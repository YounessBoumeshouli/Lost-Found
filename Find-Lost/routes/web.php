<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Models\Lost;
use App\Http\Controllers\LostController;
use App\Http\Controllers\userController;
use App\Http\Controllers\commentController;



Route::get('/delete/{id}', [userController::class, 'delete']);
//Route::get('/users', [userController::class, 'index'])->name('dashboard');
Route::get('/',function (){
    return view('home');
});
Route::get('/losts',[LostController::class,'index'])->name('losts');
Route::get('/post/{id}',[LostController::class,'show'])->name('post');

Route::get('/update/{id}', [userController::class, 'update']);
Route::post('/update/{id}', [userController::class, 'modify']);

Route::get('/jobs', function ()  {
    return view('jobs',['jobs'=>Lost::all()]);
});
Route::get('/statistic',[UserController::class,'statistics']);
Route::post('/addAnnonce',[LostController::class,'create']);
Route::get('/changeStatut/{id}',[LostController::class,'update']);
Route::post('/addComment/{id}',[commentController::class,'create']);
Route::get('/items/delete/{id}',[LostController::class,'delete'] );
Route::post('/jobs', [LostController::class, 'create']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/counter', Counter::class);
require __DIR__.'/auth.php';
