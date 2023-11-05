<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MulController extends Controller
{
    public function mul()
    {
        $a=20;
        $b=30;
        $result=$a*$b;
        return view('mul',compact('result'));
    }
    
}
