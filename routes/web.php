<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

    Route::get('/', function () {
        return view('beranda', [
            "title" => "Beranda"
        ]);
    });

    Route::get('/profil', function () {
        return view('profil', [
                "title"  => "Profil",
                "nama"   => "Zidane Maulana Chilmy",
                "nim"    => "202153172",
                "alamat" => "Jati Kulon",
        ]);
    });

    Route::get('/blog', [PostController::class, 'index']);
    // Route::get('blog', function(){
        //     return view('posts', [
            //         "title" => "Posts",
            //         "posts" => Post::all()
            //     ]);
            
            // });
            
    // Halaman single post
    Route::get('/posts/{slug}', [PostController::class, 'show']);
    // Route::get('post/{slug}', function($slug){
    //     return view('post', [
    //         "title" => "Single Post",
    //         "posts" => Post::find($slug)
    //     ]);

    // });


