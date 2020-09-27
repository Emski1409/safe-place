<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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





Route::get('/home', function()
{
   return View::make('pages.home');
})->name('homepage');

Route::get('/login', function()
{
   return View::make('pages.login');
})->name('login');

Route::get('/demo', function () 
{
    return View::make('demo');
 });

 Route::get('/includes', function () 
{
    return View::make('includes/index');
 });

 Route::get('/default', function () 
 {
     return View::make('includes/default');
  });

  Route::get('/upload', function () 
 {
     return View::make('widgets/upload');
  });

  Route::get('/signup', function () 
  {
      return View::make('pages.signup');
   })->name("signup");
  
   Route::get('/general', function () 
  {
      return View::make('pages.general');
  })->name('general');

  Route::get('/personal', function () 
  {
      return View::make('pages.personal_page');
  })->name('personal');

  Route::get('/contacts', function () 
  {
      return View::make('pages.contacts');
  })->name('contacts');

  Route::get('/imageupload', function () 
  {
      return View::make('pages.image_page');
  })->name('imageupload');
