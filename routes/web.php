<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Task;

// Volt::route('/', 'users.index');
Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/tasks', Task\Index::class)->name('task.index');
Route::get('/tasks/create', Task\Create::class)->name('task.create');
