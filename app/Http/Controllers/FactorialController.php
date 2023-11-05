<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FactorialController extends Controller
{
   public function factorial($n){
        $result = 1;
        
        for ($i = 1; $i <= $n; $i++){  
            $result = $result * $i;
        }
        return view('factorial',compact('result'));
   }
}
