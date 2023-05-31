<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        return view('Page.trangchu', compact('slide'));
        $new_product=product::where('new',1)->get();
    }

    public function getLoaiSp()
    {
        return view('Page.loaisanpham');
    }

    public function getChitiet()
    {
        return view('Page.chitietsanpham');
    }

    public function getLienhe()
    {
        return view('Page.lienhe');
    }

    public function getAbout()
    {
        return view('Page.about');
    }
}
