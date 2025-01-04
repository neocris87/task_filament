<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Task;

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', function(){
        return view('welcome');
    })->name('home');

    Route::get('/tasks', Task\Index::class)->name('task.index');
    Route::get('/tasks/create', Task\Create::class)->name('task.create');
});
