<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/', function()
{
   return View::make('pages.home');
})->name('homepage');

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
      return View::make('contacts.contacts');
  })->name('contactpage');


 Route::get('contacts.contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');

Route::get('/image', [ImageUploadController::class,'show'])->name('image');

Route::post('/image', [ImageUploadController::class,'store'])->name('image.upload');

//middleware routes

Route::middleware(['auth:sanctum', 'verified'])->get('/personal', function () 
{
    return View::make('pages.personal_page');
})->name('personal');

Route::get('/dashboard', [function () {
    return Inertia\Inertia::render('Dashboard');
}])->name('dashboard');










//   Route::get('/signup', function () 
//   {
//       return View::make('pages.signup');
//    })->name("signup");

// Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Route::get('/home', function()
// {
//    return View::make('pages.home');
// })->name('homepage');

// Route::get('/demo', function () 
// {
//     return View::make('demo');
//  });


// Route::get('/config', function () {
//     return config('database');
// });

//   Route::get('/index', [ContactController::class, 'index'])->name('contacts.index');

  //show form
//Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

