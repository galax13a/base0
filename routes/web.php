<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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

/* ruta para cambio de idioma */

Route::get('locate/{locate}', function ($locate) {
    session()->put('locate',$locate);
    if($locate=='en')
    return redirect('/en');
    else    return redirect('/es');
});

Route::get('/', function () {
    if(session('locate')=='en')
    return   view('/index');
    else    return redirect('/es');
});

Route::get('/es', function () {
    session()->put('locate','es');
    return view('index');
});
Route::get('/en', function () {
    session()->put('locate','en');
    return   view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('navegators', 'livewire.navegators.index')->middleware('auth');
	Route::view('contacts', 'livewire.contacts.index')->middleware('auth');