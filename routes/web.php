<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about','page.about')->name('about');
Route::view('/services','page.services')->name('services');
Route::view('/price','page.price')->name('price');
Route::view('/projects','page.projects')->name('projects');
Route::view('/pages','page.pages')->name('pages');

// Route::view('/contact','page.contact')->name('contact');
Route::get('/contact',[ContactController::class,'create'])->name('contact');


// Route::get('/toto', function () {
//     return 'Hello World';
// });
// Route::get('/produits', function () {
//      return view('produit/al');
// });
// Route::get('/PTT', function () {
//     return view('produit/ab');

// });

// Route::view('/PTT','produit.ab');

// Route::view('/contact','AN.contact')->name('contact');
// Route::view('/a_propos','AN.a_propos')->name('a_propos');