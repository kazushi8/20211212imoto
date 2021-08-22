<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($param)
    {
        $item=['txt'=>'部屋番号は','sent'=>'です','param'=>$param];
        return view('index',$item);}
    }