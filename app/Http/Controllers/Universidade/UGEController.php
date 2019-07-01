<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidade\UGE;
use App\Http\Resources\Universidade\UGE\UGECollection;

class UGEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uges = UGE::paginate();
        return (new UGECollection($uges));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\UGE  $uGE
     * @return \Illuminate\Http\Response
     */
    public function show(UGE $uGE)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\UGE  $uGE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UGE $uGE)
    {
        //
    }
}
