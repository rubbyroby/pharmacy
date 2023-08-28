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

//homepage
Route::get('/Home', function () {
    return view('Home');
});  

//liste des produits
Route::get('/Products-Listing', function () {
    return view('Products-Listing');
});

// detail de produit
Route::get('/Product-detail', function () {
    return view('Product-detail');
});

//route formulaire
Route::post('/addMember', [App\Http\Controllers\MemberController::class, 'addMember'])->name("add");
