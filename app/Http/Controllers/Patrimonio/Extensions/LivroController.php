<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrimonio\Tipo\Livro;
use App\Models\Patrimonio\Movimentacao\Movimentacao;
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
