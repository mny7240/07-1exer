<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)  //引数でpostというモデルを変数の$post にインスタンス化して格納している
    {
        return $Post->get();  
    }
}
