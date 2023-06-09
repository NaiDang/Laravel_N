<?php

namespace App\Http\Controllers;
use App\Models\Tiki;
use Illuminate\Http\Request;

class APITikiController extends Controller
{
    public function getTiki(){
        $products1=Tiki::all();
        return response()->json($products1);
    }
    public function addTiki(Request $request)									
        {									
        $product1 = new Tiki();									
        $product1->name = $request->input('name');									
        $product1->image = $request->input('image');
        $product1->unit_price = intval($request->input('price'));
        $product1->promotion_price = intval($request->input('sale'));										
        $product1->description = $request->input('description');																		
        $product1->save();									
        return $product1;									
        }		
}
