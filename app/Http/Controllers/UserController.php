<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function  create (){

     return view('frm_user');

    }


    public function store(Request $request){

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        

       // $category->save();

    }

}
