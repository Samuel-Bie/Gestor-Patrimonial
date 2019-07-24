<?php
namespace App\Http\Controllers\Patrimonio;


use Illuminate\Http\Request;
use App\Models\Instituicao\Setor;
use App\Models\Patrimonio\Ficheiro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Tipo\Movel;
use App\Models\Patrimonio\Localizacao;
use App\Models\Patrimonio\Tipo\Imovel;
use App\Models\Patrimonio\Tipo\Veiculo;
use App\Http\Requests\PatrimonioRequest;
use App\Models\Patrimonio\Info\AdicionalGeral;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Patrimonio\Info\AdicionalImovel;
use App\Models\Patrimonio\Tools\EstadoAquisicao;
use App\Models\Patrimonio\Tipo\Imovel\TipoImovel;
use App\Models\Patrimonio\Tools\FormaDeAquisicao;
use App\Models\Patrimonio\Tipo\Imovel\TipoDominio;
use App\Models\Patrimonio\Tools\EstadoConservacao;
use App\Models\Patrimonio\Tipo\Imovel\TipoEdificio;
use App\Models\Patrimonio\Tools\ClassificadorGeral;
use App\Http\Resources\Patrimonio\Ficheiro\FicheiroCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioCollection;
use App\Http\Resources\Patrimonio\Patrimonio\PatrimonioBasicResource;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bens = Patrimonio::all();
        return (new PatrimonioCollection($bens));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatrimonioRequest $request)
    {
        $identificacao = (object) $request->identificacao;

        $classificador      = ClassificadorGeral::where('codigo', $identificacao->classificador)->first();
        $formaAquisicao     = FormaDeAquisicao::where('codigo', $identificacao->forma_aquisicao)->first();
        $estado_aquisicao   = EstadoAquisicao::where('designacao', $identificacao->estado_aquisicao)->first();
        $estadoConservacao  = EstadoConservacao::where('designacao', $identificacao->estado_conservacao)->first();

        $patrimonio = new Patrimonio();
        $patrimonio->classe()->associate($classificador);
        $patrimonio->formaAquisicao()->associate($formaAquisicao);
        $patrimonio->user()->associate(Auth::user());
        $patrimonio->estadoAquisicao()->associate($estado_aquisicao);
        $patrimonio->estadoConservacao()->associate($estadoConservacao);

        $patrimonio->data_aquisicao = now();# $identificacao->data_aquisicao;
        $patrimonio->valor_aquisicao = $identificacao->valor_aquisicao;


        $inicial = (object) $request->inicial;
        $setor = Setor::where('id', $inicial->setor)->first();
        $localizacao = new Localizacao();

        $localizacao->setor()->associate($setor);
        $localizacao->provincia             = $request->input('inicial.provincia');
        $localizacao->destrito              = $request->input('inicial.destrito');
        $localizacao->posto_administrativo  = $request->input('inicial.posto');
        $localizacao->localidade            = $request->input('inicial.localidade');
        $localizacao->bairro                = $request->input('inicial.bairro');
        $localizacao->endereco              = $request->input('inicial.endereco');
        $localizacao->classificador_territorial  = $request->input('inicial.classe_territorial');

        $patrimonio->save();
        $patrimonio->localizacao()->save($localizacao);
        foreach ($request->arquivos as $arquivo) {
            $arquivo = Ficheiro::find($arquivo);
            if($arquivo){
                $arquivo->patrimonio()->associate($patrimonio);
                $arquivo->save();
            }
        }

        $informacaoesAdicionais = new AdicionalGeral();
        $informacaoesAdicionais->patrimonio()->associate($patrimonio);
        $informacaoesAdicionais->fornecedor =  $request->input('adicional.empresa_fornecedora');
        $informacaoesAdicionais->nuit =  $request->input('adicional.nuit');
        $informacaoesAdicionais->endereco =  $request->input('adicional.endereco');
        $informacaoesAdicionais->cidade =  $request->input('adicional.cidade');
        $informacaoesAdicionais->tipo_comprovativo =  $request->input('adicional.tipo_comprovativo');
        $informacaoesAdicionais->nr_comprovativo =  $request->input('adicional.nr_comprovativo');
        $informacaoesAdicionais->obs =  $request->input('adicional.observacoes');

        if($request->tipo == 'Imovel'){
            $imovel = new Imovel();
            $adicionalImovel = new AdicionalImovel();
            $this->saveAsImovel($imovel,$informacaoesAdicionais, $adicionalImovel,$request);
            $imovel->patrimonio()->associate($patrimonio);
            $imovel->save();
            $adicionalImovel->imovel()->associate($imovel);
            $adicionalImovel->save();
        }
        elseif ($request->tipo == 'Movel') {
            $movel = new Movel();
            $this->saveAsMovel($movel, $informacaoesAdicionais, $request);
            $movel->patrimonio()->associate($patrimonio);
            $movel->save();
        }
        elseif ($request->tipo == 'Veiculo') {
            $veiculo = new Veiculo();
            $this->saveAsVeiculo($veiculo, $informacaoesAdicionais, $request);
            $veiculo->patrimonio()->associate($patrimonio);
            $veiculo->save();
        }
        elseif ($request->tipo == 'Livro') {
            $livro = new Livro();
            $this->saveAsLivro($livro, $informacaoesAdicionais, $request);
            $livro->patrimonio()->associate($patrimonio);
            $livro->save();
        }
        $informacaoesAdicionais->save();

        return response()->json((new PatrimonioBasicResource($patrimonio)), Response::HTTP_CREATED);
    }
    private function saveAsVeiculo(Veiculo $veiculo, AdicionalGeral $informacaoesAdicionais, Request $request){
        $veiculo->combustivel   = $request->input('identificacao.combustivel');
        $veiculo->cilindrada    = $request->input('identificacao.cilindrada');
        $veiculo->marca     = $request->input('identificacao.marca');
        $veiculo->modelo    = $request->input('identificacao.modelo');
        $veiculo->matricula = $request->input('identificacao.matricula');
        $veiculo->nr_motor  = $request->input('identificacao.motor');
        $veiculo->nr_portas = $request->input('identificacao.portas');
        $veiculo->matricula_nova    = $request->input('identificacao.matricula_nova');
        $veiculo->nr_chassis        = $request->input('identificacao.chassis');
        $veiculo->ano_fabrico       = $request->input('identificacao.ano_fabrico');
        $veiculo->lotacao   = $request->input('identificacao.lotacao');
        $veiculo->tonelagem = $request->input('identificacao.tonelagem');
        $veiculo->cor       = $request->input('identificacao.cor');

        $informacaoesAdicionais->assistencia_tecnica =  $request->input('adicional.assistencia')== 'SIM'? true: false;;
        $informacaoesAdicionais->garantia       = $request->input('adicional.garantia');
        $informacaoesAdicionais->utilizador     = $request->input('adicional.utilizador');
        $informacaoesAdicionais->seguro         = $request->input('adicional.seguro')== 'SIM'? true: false;;
        $informacaoesAdicionais->ferramentas    = $request->input('adicional.ferramentas')== 'SIM'? true: false;;
        $informacaoesAdicionais->extintor       = $request->input('adicional.extintor')== 'SIM'? true: false;;
    }
    private function saveAsImovel(Imovel $imovel, AdicionalGeral $informacaoesAdicionais, AdicionalImovel $adicionalImovel, Request $request){

        $tipoImovel     = TipoImovel::find(strtolower($request->input('identificacao.tipoImovel')));
        $tipoEdificio   = TipoEdificio::find(strtolower($request->input('identificacao.tipoEdificio')));
        $tipoDominio    = TipoDominio::find(strtolower($request->input('identificacao.tipoDominio')));

        $imovel->tipoImovel()->associate($tipoImovel);
        $imovel->tipoEdificio()->associate($tipoEdificio);
        $imovel->tipoDominio()->associate($tipoDominio);

        $imovel->nr_divisoes        = $request->input('identificacao.nr_divisoes');
        $imovel->nr_pisos           = $request->input('identificacao.nr_pisos');
        $imovel->cor                = $request->input('identificacao.cor');
        $imovel->area_cobertura     = $request->input('identificacao.area_cobertura');
        $imovel->area_terreno       = $request->input('identificacao.area_terreno');
        $imovel->elevadores         = $request->input('identificacao.elevador') == 'SIM'? true: false;
        $imovel->sistema_incendio   = $request->input('identificacao.rede_incendio') == 'SIM'? true: false;
        $imovel->ano_construcao     = $request->input('identificacao.ano_construcao');


        $adicionalImovel->conservatoria_registro_predial    = $request->input('adicional.cons_reg_predial');
        $adicionalImovel->nr_registro_predial               = $request->input('adicional.nr_reg_predial');
        $adicionalImovel->folhas_registro_predial           = $request->input('adicional.folhas_de_reg_predial');
        $adicionalImovel->livro_registro_predial            = $request->input('adicional.livro_registro_predial');
        $adicionalImovel->ano_registro                      = $request->input('adicional.ano_reg_predial');

        $adicionalImovel->direcao_area_fiscal       = $request->input('adicional.cons_reg_fiscal');
        $adicionalImovel->nr_matriz_predial         = $request->input('adicional.nr_matriz_predial');
        $adicionalImovel->folhas_matriz_predial     = $request->input('adicional.folhas_de_reg_fiscal');
        $adicionalImovel->livro_matriz_predial      = $request->input('adicional.livro_matriz_predial');
        $adicionalImovel->ano_matriz_predial        = $request->input('adicional.ano_reg_fiscal');


        $informacaoesAdicionais->seguro = $request->input('adicional.seguro')== 'SIM'? true: false;;
    }
    private function saveAsMovel(Movel $movel, AdicionalGeral $informacaoesAdicionais, Request $request){
        $movel->marca       = $request->input('identificacao.marca');
        $movel->nr_serie    = $request->input('identificacao.nr_serie');
        $movel->comprimento = $request->input('identificacao.comprimento');
        $movel->largura     = $request->input('identificacao.largura');
        $movel->cor         = $request->input('identificacao.cor');
        $movel->material    = $request->input('identificacao.material');
        $movel->modelo      = $request->input('identificacao.modelo');
        $movel->altura      = $request->input('identificacao.altura');

        $informacaoesAdicionais->assistencia_tecnica = $request->input('adicional.assistencia')== 'SIM'? true: false;;
        $informacaoesAdicionais->garantia = $request->input('adicional.garantia');
        $informacaoesAdicionais->utilizador  = $request->input('adicional.utilizador');
    }
    private function saveAsLivro(Livro $livro, AdicionalGeral $informacaoesAdicionais, Request $request){

        $livro->titulo      = $request->input('identificacao.titulo', 'nd');
        $livro->assunto     = $request->input('identificacao.assunto');
        $livro->tipo_obra   = $request->input('identificacao.tipo_obra');
        $livro->edicao      = $request->input('identificacao.nr_edicao');
        $livro->paginas     = $request->input('identificacao.nr_paginas');
        $livro->autor       = $request->input('identificacao.autor');
        $livro->editora     = $request->input('identificacao.editora');
        $livro->local_edicao    = $request->input('identificacao.local_edicao');
        $livro->volumes         = $request->input('identificacao.nr_volume');
        $livro->ano_edicao      = $request->input('identificacao.ano_edicao');

        $informacaoesAdicionais->utilizador = $request->input('adicional.utilizador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimonio $patrimonio)
    {
        return new PatrimonioBasicResource($patrimonio);
    }

    public function files(Patrimonio $patrimonio)
    {
        $ficheiros = $patrimonio->ficheiros()->paginate();
        return (new FicheiroCollection($ficheiros));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrimonio $patrimonio)
    {
        //
    }
}
