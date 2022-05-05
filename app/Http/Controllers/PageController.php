<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $data = Train::where('orario_partenza', 'LIKE', date('Y-m-d', time())."%")->get();
        return view('trains', compact('data'));
    }
}
