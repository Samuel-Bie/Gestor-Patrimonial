<?php

namespace App\Http\Controllers;

use App\Models\UGB;
use Illuminate\Http\Request;
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
}
