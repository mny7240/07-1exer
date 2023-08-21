<?php              //ここにはルーティング(ブラウザから任意のアクセスがあった場合にどのcontroller処理を動かすのかを記述する)について書く

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);  //ちなみに基本的にアプリを起動してブラウザから送られてくる最初のリクエストはこの  /   というURLである。
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class, 'show']);    // /{post}はルートパラメータといい、postのidは選んだ投稿によって変わってしまうため、{post}にする。

// Route･･･laravel 既存機能のRouteファサードを使う
// get･･･HTTP メソッドを指定
// /･･･任意の URL を指定
// 
