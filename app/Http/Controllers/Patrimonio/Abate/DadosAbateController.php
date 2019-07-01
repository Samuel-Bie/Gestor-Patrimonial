<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio\Abate\DadosAbate;
use Illuminate\Http\Request;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateCollection;
use App\Models\Patrimonio\Patrimonio;

class DadosAbateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abates = DadosAbate::paginate();
        return (new AbateCollection($abates));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio\Abate\DadosAbate  $dadosAbate
     * @return \Illuminate\Http\Response
     */
    public function show(DadosAbate $dadosAbate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Abate\DadosAbate  $dadosAbate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DadosAbate $dadosAbate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Abate\DadosAbate  $dadosAbate
     * @return \Illuminate\Http\Response
     */
    public function destroy(DadosAbate $dadosAbate)
    {
        //
    }
}
