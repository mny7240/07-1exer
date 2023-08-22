<?php              //ここにはルーティング(ブラウザから任意のアクセスがあった場合にどのcontroller処理を動かすのかを記述する)について書く

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
@@ -13,6 +14,12 @@
|
*/

Route::get('/', [PostController::class, 'index']);  //ちなみに基本的にアプリを起動してブラウザから送られてくる最初のリクエストはこの  /   というURLである。
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class, 'show']);    // /{post}はルートパラメータといい、postのidは選んだ投稿によって変わってしまうため、{post}にする。
Route::post('/posts',[PostController::class,'store']);    //storeはデータを保存するという意味
Route::get('/posts/{post}/edit',[PostController::class, 'edit']);
Route::get('posts/{post}',[PostController::class, 'update']);


// Route･･･laravel 既存機能のRouteファサードを使う
// get･･･HTTP メソッドを指定
// /･･･任意の URL を指定
// 