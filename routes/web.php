<?php

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

Route::get('/', function() {
    return view('welcome');
});
Route::get('/aboutus.blade.php', function() {
    return view('aboutus');
});
Route::get('/class_rooms.blade.php', function() {
    return view('class_rooms');
});
Route::get('/contact.blade.php', function() {
    return view('contact');
});
Route::get('/faculty.blade.php', function() {
    return view('faculty');
});
Route::get('/gallery.blade.php', function() {
    return view('gallery');
});
Route::get('/labs.blade.php', function() {
    return view('labs');
});
Route::get('/lib.blade.php', function() {
    return view('lib');
});
Route::get('/mca_reg.blade.php', function() {
    return view('mca_reg');
});
Route::get('/mca.blade.php', function() {
    return view('mca');
});
Route::get('/msccsda_reg.blade.php', function() {
    return view('msccsda_reg');
});
Route::get('/msccsda.blade.php', function() {
    return view('msccsda');
});
Route::get('/rfaculty.blade.php', function() {
    return view('rfaculty');
});
Route::get('/spfaculty.blade.php', function() {
    return view('spfaculty');
});