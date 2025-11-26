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

Route::get('//creat-post-save', function () {

    $post = new Post();
    $post->title = 'test title';
    $post->content = 'test content';
    $post->is_feature = false;
    $post->save();

    return 'save() 新增成功！';
});
