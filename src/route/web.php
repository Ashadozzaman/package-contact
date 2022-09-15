<?php

use Ashadozzaman\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=> "Ashadozzaman\Contact\Http\Controllers"],function(){
    Route::get('/contact',[ContactController::class,'index'])->name('contact');
    
    Route::post('contact',[ContactController::class,'contact']);

});
