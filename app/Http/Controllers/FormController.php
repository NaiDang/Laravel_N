<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form-signup');
    }
    public function displayInfo(signupRequest $Request)
    {
        $user=[
            'name' => $name=$Required->input("name"),
            'age' => $age=$Required->input("age"),
            'date' => $date=$Required->input("date"),
            'phone' => $phone=$Required->input("phone"),
            'web' => $web=$Required->input("web"),
            'address' => $address=$Required->input("address"),
        ];
        return view('form-signup')->with('user,$user');
    }
}
