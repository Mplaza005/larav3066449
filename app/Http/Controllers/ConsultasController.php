<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class ConsultasController extends Controller
{
    //

    public function consultas()
    {

        // $user = new User();
        // $user = User::find(1);

        // return $user->posts;

        $category = new Category();
        $category = Category::find(2);

        return $category->posts;


    }
}
