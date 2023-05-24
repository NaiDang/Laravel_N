<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    public function xinchao(){
        echo'Xin chào các bạn PNV';
        $title="Đây là tiêu đề";
        $des="Đây là dòng mô tả";
        $copy="Học web chuẩn";
        $arr=['tittle'=>$title,'description'=>$des,'cop'=>$copy];
        return view('test')->with('tittle',$arr);
    }
    
}
