<?php

namespace App\Http\Controllers;

class SinglePageApplicationController extends Controller
{
    public function index(){
        return view('welcome');
    }
}