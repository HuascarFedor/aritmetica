<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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

    function palindromo(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        $cadTrans = str_replace(' ', '', strtolower($cadena));
        $cadInv = strrev($cadTrans);
        $result = strcmp($cadTrans, $cadInv) == 0 ? 'es' : 'NO es';
        return view('palindromo', compact('cadena', 'result'));         
    }
}