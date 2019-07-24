<?php
namespace App\Http\Controllers\Instituicao;

use App\Models\Instituicao\UGB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Instituicao\UGB\UGBCollection;
use App\Http\Resources\Instituicao\Setor\SetorCollection;

class UGBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ugbs = Auth::user()->ugbs()->paginate();
        return (new UGBCollection($ugbs));
    }

    public function show(UGB $ugb){

    }

    public function setores(UGB $ugb)
    {
        $setores = $ugb->setores()->paginate();
        return (new SetorCollection($setores));
    }
}
