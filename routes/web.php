<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routecontroller;
use App\Http\Controllers\builderzcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\tablecontroller;
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

Route::controller(routecontroller::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/our-services', 'services')->name('services');
    Route::get('/our-project', 'project')->name('project');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/our-team', 'team')->name('team');
    Route::get('/page', 'page')->name('page');
});

// Route::view('login', 'adminlogin.login');
Route::view('adminpanel', 'adminlogin.query-data');
Route::post('form',[builderzcontroller::class,'addquery']);
Route::get('adminpanel',[tablecontroller::class,'show']);
Route::post('login',[logincontroller::class,'loginuser'])->name('login-user');
Route::get('/logout',function(){
    if(session()->has('email'))
    {
        session()->pull('email',null);
    }
    return redirect('login');
});
Route::get('/login',function(){
    if(session()->has('email'))
    {
        return redirect('adminpanel');
    }
    return view('adminlogin.login');
});
