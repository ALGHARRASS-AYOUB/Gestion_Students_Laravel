<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\PostDec;

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

// Route::get('/',[PostController::class,'index']);

// Route::resource('/pages',PostController::class);
// Route::get('/',HomeController::class);
// Route::get('/',[PagesController::class,'homey']);
// Route::get('/about',[PagesController::class,'about']);
// Route::get('/contact',[PagesController::class,'contact']);
// Route::get('/hello',[PagesController::class,'hello']);

/*/*********************************************************************** */

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/hello',function(){
//     return view('pages.hello');
// });

// Route::get('/about',function(){
//     return view('pages.about');
// });

// Route::get('/contact',function(){
// return view('pages.contact');
// });



// ***********************************************************//dynamic route

// Route::get('/users/{id}/{name}',function($id,$name){
//     return '<h2>hello mistre(misses): </h2>'.$name.' your id is '.$id;
// });
//********************************************************************************** */
// GET
// Route :: get('/pages',[PostController :: class,'index']);
// Route :: get('/pages/{id}',[PostController :: class,'show'])->whereAlphaNumeric('id');
// // POST
// Route :: get('/pages/create',[PostController :: class,'create']);
// Route::post('/pages',[PostController :: class,'store']);
// // PUT OR PATCH
// Route :: get('/pages/edit/{id}',[PostController :: class,'edit']);
// Route::patch('/pages/{id}',[PostController :: class,'update']);
// // DELETEI
// Route :: delete('/pages/{id}',[PostController :: class,'destroy']);
// // Route :: resource('blog',PostController :: class);
// // Route for invoke method
// Route :: get('/',HomeController :: class);

// /*/*************************************** for achors tag in index page ************************************************** */
// Route::get('/',[PostController::class,'index']);
// Route::get('/pages',[PagesController::class,'contact'])->name('pages.contact');
// Route::get('/pages/{id}',[PostController::class,'show'])->name('pages.show');

/*/******************************   route in groupe ************************************************* */

Route::prefix('/pages')->group(function(){
    Route :: get('/',[PostController :: class,'index']);
    Route :: get('/{id}/{name}',[PostController :: class,'show'])->whereAlphaNumeric('id') ->whereAlpha('name');
    Route :: get('/create',[PostController :: class,'create']);
    Route::post('/',[PostController :: class,'store']);
    Route :: get('/edit/{id}',[PostController :: class,'edit']);
    Route::patch('/{id}',[PostController :: class,'update']);
    Route :: delete('/{id}',[PostController :: class,'destroy']);

});

Route::fallback(FallbackController::class);
