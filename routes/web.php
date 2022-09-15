<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routecontroller;
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

