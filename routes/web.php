<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ChatController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/timeline/create', [TimelineController::class, 'create'])->name('createTimeline');
Route::post('/timeline/store', [TimelineController::class, 'store'])->name('storeTimeline');
Route::get('/user/{user}/home', [TimelineController::class, 'index'])->name('indexTimeline');

Route::get('/report/create', [ReportController::class, 'create'])->name('createReport');
Route::post('/report/store', [ReportController::class, 'store'])->name('storeReport');
Route::get('/report/index', [ReportController::class, 'index'])->name('indexReport');

Route::get('/student/create', [StudentController::class, 'create'])->name('createStudent');
Route::post('/student/store', [StudentController::class, 'store'])->name('storeStudent');

Route::get('/chat/index', [ChatController::class, 'index'])->name('indexChat');
Route::get('/chat/{user}', [ChatController::class, 'openChat']);
Route::post('/chat', [ChatController::class, 'sendMessage']);

require __DIR__.'/auth.php';