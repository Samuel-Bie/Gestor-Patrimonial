<?php
namespace App\Http\Controllers\Universidade;
use App\Models\Universidade\UGB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Universidade\UGB\UGBCollection;

class UGBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ugbs = UGB::paginate();
        return (new UGBCollection($ugbs));
    }

    public function show(UGB $ugb){

    }
}
