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

//Route::get('/post-filter', function () {
//
//    $posts = Post::where('id', '<', 10)
//        ->orderBy('id', 'DESC')
//        ->get();
//
//    dd($posts);
//});

//Route::get('/update-post', function () {
//    $post = Post::find(1);
//
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//
//    return '更新成功！';
//});

//Route::get('/update-post-save', function () {
//
//    $post = \App\Models\Post::find(1);
//
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();
//
//    return '使用 save() 更新成功！';
//});

Route::get('/delete-post', function () {
    // 1.delete()：刪除單筆資料
    $post = \App\Models\Post::find(1);
    if ($post) {
        $post->delete();
    }

    // 3.destroy()：直接刪除某個 id 的資料
    \App\Models\Post::destroy(2);

    // 5.destroy()：刪除多筆資料
    \App\Models\Post::destroy([3, 5, 7]);

    return '已刪除，在 MySQL 查看結果';
});
