<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){			
    	return view('Page.trangchu');
}
public function getLoaiSp(){			
    return view('Page.loaisanpham');
}
public function getChitiet(){			
    return view('Page.chitietsanpham');
}
public function getLienhe(){			
    return view('Page.lienhe');
}
public function getAbout(){			
    return view('Page.about');
}
}