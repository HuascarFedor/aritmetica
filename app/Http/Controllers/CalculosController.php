<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function factorial(Request $request){
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        $prod = 1;
        for($i=1; $i<=$n; $i++)
            $prod = $prod * $i;
        return view('factorial', compact('n', 'prod'));
    }

    function suma(Request $request){
        $request->validate([
            'n1' => 'required|numeric',
            'n2' => 'required|numeric',
        ]);
        $n1 = intval($request->n1);
        $n2 = intval($request->n2);
        $suma = $n1 + $n2;
        return view('suma', compact('n1', 'n2', 'suma'));       
    }
}