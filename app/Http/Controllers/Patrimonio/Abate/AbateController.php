<?php
namespace App\Http\Controllers\Patrimonio\Abate;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Models\Patrimonio\Abate\Abate;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateCollection;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateGeneralResource;
use App\Http\Resources\Patrimonio\Operations\Abate\AbateBasicResource;

class AbateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patrimonio $patrimonio)
    {
        $abate = $patrimonio->abate;
        return new AbateBasicResource($abate);

        $abates = Abate::paginate();

        return (new AbateBasicResource($abates));
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
     * @param  \App\Models\Patrimonio\Abate\Abate  $Abate
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimonio $patrimonio, Abate $abate)
    {
        return new AbateGeneralResource($abate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio\Abate\Abate  $Abate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abate $Abate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio\Abate\Abate  $Abate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abate $Abate)
    {
        //
    }
}
