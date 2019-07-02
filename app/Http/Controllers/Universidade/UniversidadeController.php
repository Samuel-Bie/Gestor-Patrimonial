<?php
namespace App\Http\Controllers\Universidade;

use App\Models\Universidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Universidade\Universidade\UniversidadeCollection;

class UniversidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $universidades = Universidade::paginate();
        return (new UniversidadeCollection($universidades));
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Universidade  $universidade
     * @return \Illuminate\Http\Response
     */
    public function show(Universidade $universidade)
    {
        //
    }




    public function update(Request $request, Universidade $universidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Universidade  $universidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidade $universidade)
    {
        //
    }
}
