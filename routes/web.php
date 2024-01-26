<?php

use App\Events\UserPush;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegisterController;


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



// Route::get('/userpush', function () {
//     return view('userpush', [
//         "title" => "User Push"
//     ]);
// });

// Route::post('/userpush', function() {

    // $name = request()->name;
    // event(new userpush($name));
    // return view ('userpush');
// });
Route::get('/', [HomeController::class,'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/aboutus', function () {
    return view('aboutus', [
        "title" => "About Us"
    ]);
});

route::get('/ourcollection',[HomeController::class,'ourcollection'])->middleware('auth');



Route::get('/detail', function () {
    return view('detail', [
        "title" => "Detail"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

route::post('/uploademail',[HomeController::class,'uploademail']);

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/collection',[AdminController::class,'collection']);

route::post('/uploadcollection',[AdminController::class,'uploadcollection']);
route::get('/showcollection',[AdminController::class,'showcollection']);
route::get('/deletecollection/{id}',[AdminController::class,'deletecollection']);
route::get('/updatecollection/{id}',[AdminController::class,'updatecollection']);
route::post('/updatecollections/{id}',[AdminController::class,'updatecollections']);

route::get('/search',[HomeController::class,'search']);
route::get('/showcontactus',[AdminController::class,'showcontactus']);


route::get('/showuser',[AdminController::class,'showuser']);
route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
route::get('/updateuser/{id}',[AdminController::class,'updateuser']);
route::post('/updateusers/{id}',[AdminController::class,'updateusers']);




