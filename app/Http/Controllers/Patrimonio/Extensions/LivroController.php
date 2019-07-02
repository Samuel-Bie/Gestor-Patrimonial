<?php
namespace App\Http\Controllers\Patrimonio\Extensions;

use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Tipo\Livro;
use App\Http\Resources\Patrimonio\Extensions\Livro\LivroCollection;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livros = Livro::paginate();
        return (new LivroCollection($livros));
    }

    public function show(Livro $livro)
    {
        //
    }

    public function destroy(Livro $livro)
    {
        //
    }
}
