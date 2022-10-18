<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function factorial(Request $request){
        $n = intval($request->n);
        $prod = 1;
        for($i=1; $i<=$n; $i++)
            $prod = $prod * $i;
        return view('factorial', compact('n', 'prod'));
    }
}