<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $data = Train::paginate(5);
        return view('trains', compact('data'));
    }
}
