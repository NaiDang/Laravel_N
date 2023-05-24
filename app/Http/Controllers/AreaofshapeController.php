<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaofshapeController extends Controller
{
    function computeArea (Request $request)
    {
        $a = $request->input('a');
        $h = $request->input('h');
        $c1 = $request->input('c1');
        $c2 = $request->input('c2');
        $c3 = $request->input('c3');
        $c4 = $request->input('c4');
        return view('areaOfShape')->with(['areaTriangle'=>($a * $h)/2, 'areaQuadrangle'=>($c1+$c2+$c3+$c4)]);
    }
}