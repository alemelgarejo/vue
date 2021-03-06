<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/user', UserController::class);
Route::resource('dashboard/category', CategoryController::class);
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');
Route::get('/detail/{id}', [WebController::class, 'detail']);
Route::get('/post-category/{id}', [WebController::class, 'post_category']);
Route::get('/contact', [WebController::class, 'contact']);
Route::get('/categories', [WebController::class, 'categories']);

/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */
/* Route::get('/test', function () {
    return "Hola Mundo test";
});
Route::get('/acerca-de', function () {
    return "Hola Mundo";
});
Route::get('/hola/{nombre?}', function ($nombre = "Pepe") {
    return "Hola: $nombre";
});
Route::get('/hola/{nombre?}', function ($nombre = "Juan") {
    return "Hola $nombre conocenos: <a href='" . route("nosotros") . "'>nosotros</a>";
}); */

Route::get('/sobre-nosotros-en-la-web', function () {
    return "<h1>Toda la información sobre nosotros!</h1>";
})->name("nosotros");

Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Pepe", $apellido = "Cruz") {

    $posts = ["Posts1", "Posts2", "Posts3", "Posts4"];
    $posts2 = null;

    //return view("home")->with("nombre",$nombre)->with("apellido",$apellido);
    return view("home", ['nombre' => $nombre, 'apellido' => "Mujica", 'posts' => $posts, 'posts2' => $posts2]);
})->name("home");;


/* Route::group(['prefix' => 'admin'], function () {
    Route::resource('post', PostController::class);
}); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebController::class, 'index'])->name('index');
