<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tinhTongController extends Controller
{
    public function sum(){
        return $a + $b;
    }
    public function tinhtong(Request $request){
        $sum = $request->soA + $request->soB;
        return view('sum', compact('sum'));
    }
}
