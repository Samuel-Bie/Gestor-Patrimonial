<?php
namespace App\Http\Controllers\User;


use App\Models\User\Permissoes;
use Illuminate\Http\Request;
use App\Http\Resources\User\Permissao\PermissaoCollection;

class PermissoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissoes = Permissoes::paginate();
        return (new PermissaoCollection($permissoes));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function show(Permissoes $permissoes)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permissoes $permissoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\Permissoes  $permissoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissoes $permissoes)
    {
        //
    }
}
