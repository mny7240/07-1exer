<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;     //
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller     // controller を継承して、Postcontroller を作っている
{
    public function index(Post $post)  //引数でpostというモデルを変数の$post にインスタンス化して格納している
    {
        return view('posts/index')->with(['posts' => $post->getPaginateBylimit(5)]);
    }
    
    /**
     * 特定IDのPOSTを表示する
     * 
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Response post view
     */
    public function show(Post $post)   //ルーティングで渡したidに該当するpostsテーブルのデータが入ったPostインスタンス
    {
        return view('posts/show')->with(['post' => $post]);         // dd($post);   //変数の中身を確認
        //'post'はbladeファイルで使う変数。中身は$postはid=1のpostインスタンス。
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
}
