<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/kniga', [App\Http\Controllers\BookController::class, 'index'])->name('allBooks');
Route::get('/kniga/{id}',[App\Http\Controllers\BookController::class,'show'])->name('kniga.prikazi');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);

Route::get('/avtor', [App\Http\Controllers\AuthorsController::class, 'index'])->name('allAuthors');
Route::get('/avtor/{id}',[App\Http\Controllers\AuthorsController::class,'show'])->name('avtor.prikazi');

//  Route::get('/', function () {
//      return view('welcome');
//  });

// Route::get('/proba',function()
// {
//   return view('_layout.cork');
// });
Route::get('/',function()
{
  return view('welcome');
});

Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');