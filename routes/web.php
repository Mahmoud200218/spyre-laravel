<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/index', function(){
    return view('spyre.index');
})->name('index');

Route::get('/404', function(){
    return view('spyre.404');
})->name('404');

Route::get('/about', function(){
    return view('spyre.about');
})->name('about');

Route::get('/blog', function(){
    return view('spyre.blog');
})->name('blog');

Route::get('/blog-single', function(){
    return view('spyre.blog-single');
})->name('blog-single');

Route::get('/careers', function(){
    return view('spyre.careers');
})->name('careers');

Route::get('/careers-single', function(){
    return view('spyre.careers-single');
})->name('careers-single');

Route::get('/coming-soon', function(){
    return view('spyre.coming-soon');
})->name('coming-soon');

Route::get('/contact', function(){
    return view('spyre.contact');
})->name('contact');

Route::get('/faq', function(){
    return view('spyre.faq');
})->name('faq');

Route::get('/home-page', function(){
    return view('spyre.home-page');
})->name('home-page');

Route::get('/portfolio', function(){
    return view('spyre.portfolio');
})->name('portfolio');

Route::get('/pricing', function(){
    return view('spyre.pricing');
})->name('pricing');

Route::get('/recover-account', function(){
    return view('spyre.recover-account');
})->name('recover-account');

Route::get('/services', function(){
    return view('spyre.services');
})->name('services');

Route::get('/sign-in', function(){
    return view('spyre.sign-in');
})->name('sign-in');

Route::get('/sign-up', function(){
    return view('spyre.sign-up');
})->name('sign-up');

Route::get('/team', function(){
    return view('spyre.team');
})->name('team');