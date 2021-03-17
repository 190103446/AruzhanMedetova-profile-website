<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Blog;


use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('i/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('post/create', function () {
    DB::table('post')->insert([
        'title' => 'SDU',
        'body' => 'Suleyman Demirel University'
    ]);
}); 

Route::get('post', function () {
    $post = Post::find(1);
    return $post; 
}); 

Route::get('blog/add', function () {
    DB::table('blog')->insert([
        'title' => 'SDU',
        'body' => 'Suleyman Demirel University'
    ]);
}); 


Route::get('blog', [BlogController::class, 'index']); 
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('blog/{id}', [BlogController::class, 'get_blog']);

