<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth:api'])->group(function () {
    /* Patrimonio */
        Route::apiResource('patrimonio',    'Patrimonio\PatrimonioController');

        Route::prefix('patrimonio')->group(function () {
            Route::get('{patrimonio}/ficheros', 'Patrimonio\PatrimonioController@files')->name('patrimonio.ficheiros');
            Route::get('{patrimonio}/info',     'Patrimonio\InformacaoController@show')->name('patrimonio.info');
            Route::get('{patrimonio}/localizacao', 'Patrimonio\LocalizacaoController@show')->name('patrimonio.localizacao.show');

            /* Operações */
                Route::get('/{patrimonio}/operacoes',               'Patrimonio\PatrimonioController@operacoes')->name('operacoes.show');
                Route::apiResource('{patrimonio}/abate',            'Patrimonio\Abate\AbateController');
                Route::apiResource('{patrimonio}/transferencia',    'Patrimonio\Transferencia\TransferenciaController');

                Route::apiResource('{patrimonio}/manutencao',       'Patrimonio\Manutencao\ManutencaoController');
                Route::apiResource('{patrimonio}/movimentacao',     'Patrimonio\Movimentacao\MovimentacaoController');
            /* Operações */

        });

        Route::apiResource('ficheiro',    'Patrimonio\FicheiroController');

        /* Tipos */
            Route::apiResource('imovel',    'Patrimonio\Extensions\ImovelController');
            Route::apiResource('movel',     'Patrimonio\Extensions\MovelController');
            Route::apiResource('livro',     'Patrimonio\Extensions\LivroController');
            Route::apiResource('veiculo',   'Patrimonio\Extensions\VeiculoController');
        /* Tipos */



        /* Tools */
            Route::apiResource('classificador', 'Patrimonio\Tools\ClassificadorGeralController');

            Route::prefix('classificador')->group(function () {
                Route::get('{classificador}/bens', 'Patrimonio\Tools\ClassificadorGeralController@bens')->name('classificador.bens');
            });
            Route::apiResource('forma-aquisicao', 'Patrimonio\Tools\FormaDeAquisicaoController');
        /* Tools */
    /* Patrimonio */

    /* Univerisdade */
        Route::apiResource('uge', 'Instituicao\UGEController');
        Route::apiResource('ugb', 'Instituicao\UGBController');
        Route::get('ugb/{ugb}/setores/',        'Instituicao\SetorController@index')->name('ugb.setores');

        Route::apiResource('setor', 'Instituicao\SetorController');
    /* Univerisdade */


    /* User */
        Route::get('user', 'User\UserController@current');
    /* User */

});
