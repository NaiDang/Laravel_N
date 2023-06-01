<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Product_type;
use App\Models\Comment;

class PageController extends Controller
{
    public function getIndex(){
        $slide=Slide::all();
        // return view('page.trangchu');
        $new_product = Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai=	Product::where('promotion_price','<>',0)->paginate(4);
        return view('Page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
       
    }
    public function getDetail(Request $request){
        $sanpham=Product::where('id',$request->id)->first();
        $splienquan=Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);
        $comment=Comment::where('id_product',$request->id)->first();
        return view('Page.chitietsanpham',compact('sanpham','splienquan','comment'));
    }

    public function getLoaiSp($type)
    {
        
        $sp_theoloai=Product::where('id_type',$type)->get();
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3);

        $loai=Product_type::all();
        $loai_sp=Product_type::where('id',$type)->first();

        return view('Page.loaisanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
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
