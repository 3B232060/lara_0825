<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('//creat-post-save', function () {
//
//    $post = new Post();
//    $post->title = 'test title';
//    $post->content = 'test content';
//    $post->is_feature = false;
//    $post->save();
//
//    return 'save() 新增成功！';
//});

//Route::get('/create-post-create', function () {
//
//    // 使用 create() 方法新增資料
//    Post::create([
//        'title' => 'test title',
//        'content' => 'test content',
//        'is_feature' => false,
//    ]);
//
//    return 'create() 新增成功！';
//});

//Route::get('/find-post', function () {
//
//    $post = Post::find(1); // 找 id=1 的貼文
//
//    if (!$post) {
//        return '找不到這筆貼文';
//    }
//
//    echo '標題：'.$post->title.'<br>';
//    echo '內容：'.$post->content.'<br>';
//    echo '張貼時間：'.$post->created_at.'<br>';
//
//    dd($post); // 顯示完整貼文資訊並停止
//});

Route::get('/show-all-posts', function () {

    $posts = Post::all(); // 撈出所有貼文

    foreach ($posts as $post){
        echo '編號：'.$post->id.'<br>';
        echo '標題：'.$post->title.'<br>';
        echo '內容：'.$post->content.'<br>';
        echo '張貼時間：'.$post->created_at.'<br>';
        echo '------------------------------'.'<br>';
    }

    dd($posts);  // dump 所有資料並停止程式
});

Route::get('/post-filter', function () {

    $posts = Post::where('id', '<', 10)
        ->orderBy('id', 'DESC')
        ->get();

    dd($posts);
});
