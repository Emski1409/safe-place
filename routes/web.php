<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PersonalController;


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

  Route::get('/contacts', function () 
  {
      return View::make('contacts.contacts');
  })->name('contactpage');

  Route::get('/local', function () 
  {
      return View::make('pages.local');
  })->name('local');


 Route::get('contacts.contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');


Route::get('/image', [ImageController::class,'show'])->name('image');

Route::post('/imageUpload', [ImageController::class,'store'])->name('image.path');
Route::delete('/image/{image}',[ImageController::class,'destroy'])->name('image.destroy');
Route::put('/image/{image}',[ImageController::class,'update'])->name('image.put');

//Route::get('/personal', [PersonalController::class,'show'])->name('personal');
//middleware routes

Route::middleware(['auth:sanctum', 'verified'])->get('/personal', [PersonalController::class,'show'])->name('personal');

Route::get('/dashboard', [function () {
    return Inertia\Inertia::render('Dashboard');
}])->name('dashboard');

//diary routes
// Route::get('/diary', function () 
// {
//     return View::make('pages.diary');
// })->name('diary');
Route::get('/diary', [DiaryController::class,'show'])->name('diary');
Route::post('/diary',[DiaryController::class, 'store'])->name('diary.store');
Route::delete('/diary/{diary}',[DiaryController::class,'destroy'])->name('diary.destroy');

//validate

Route::get('/vaidate/{user}', function (Request $request) {
    if (! $request->hasValidSignature()) {
        abort(401);
    }

    // ...
})->name('validate');












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

