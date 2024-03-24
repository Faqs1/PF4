<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;


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
    return view('welcome');
});
Route::get('/routing',function(){
    return view('routing');
});
Route::get('/basic_routing',function(){
    return 'Hello World';
});
Route::get('/cloning',function(){
    return view('clone');
});

Route::view('/view-route','view_route');
Route::view('view_route','view_route',['name'=> 'Faiq']);
Route::get('/controller_route',[RouteController::class,'index']);
/* `Route::redirect('/','/routing');` is creating a redirect route in Laravel. This means that when a
user accesses the root URL '/', they will be redirected to the '/routing' URL. */
Route::redirect('/','/routing');
Route::get('/user/{id}',function($id){
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comments}',function($postId,$commentId){
    return "Post Id: ".$postId.",Comment Id : ".$commentId;
});
Route::get('username/{name?}',function($name=null){
    return 'Username: '.$name;
});
Route::get('/title/{title}',function($title){
    return "Title: ".$title;
})->where('title','[A-Za-z]+');
Route::get('/profile/{profileId}',[RouteController::class,'profile'])->name('profileRouteName');
Route::get('/route_priority/{rpId}',function($rpId){
    return "This is Route one";
});
Route::get('/route_priority/user',function(){
    return "This is Route 1";
});
Route::get('/route_priority/user',function(){
    return "This is Route 2";
});
Route::get('/route_priority/user',function(){
    return "This is Route 1";
});
Route::get('/route_priority/user',function(){
    return "This is route 2";
});
Route::fallback(function(){
    return 'This is fallback Route';
});
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');
    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');
    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});



