<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\TodoController;

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

//Route::get('/', function () {
//
//    $test = "sadfadsfdsafadsfds";
//    $mobileList = \App\Models\UserMobile::all();
//
//    return view('welcome',[
//        'getData' => $test,
//        'allMobileList' => $mobileList
//    ]);
//})->name('home');

//Route::post('user/create', function(Request $request){
//
//    $userMobile = new \App\Models\UserMobile();
//    $userMobile->mobile_number = $request->get('inputvalue');
//    $userMobile->Save();
//
//    return redirect()->route('home');
//})->name('postCreate');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::prefix('todo')->middleware('auth')->group(function() {
//    Route::get('', [TodoController::class, 'todoControllerList']);
//
//    Route::post('', [TodoController::class, 'store']);
//
//    Route::get('/{number}', [TodoController::class, 'show']);
//
//    Route::get('/{number}/edit', [TodoController::class, 'edit']);
//
//    Route::put('/{number}', [TodoController::class, 'update']);
//
//    Route::delete('/{number}', [TodoController::class, 'destroy']);
//});
// 아렇게 사용할 경우 위의 라우트를 한줄에 정의
Route::resource('todo', 'App\Http\Controllers\TodoController')->middleware('auth');

//Route::get('create', [TodoController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
