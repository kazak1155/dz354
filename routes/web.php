<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AuthorizationController;

Route::get('/', [PostsController::class, 'allPost'] );
Route::get('/post/{post}', [PostsController::class, 'showPost'] );
Route::get('/create', [PostsController::class, 'createPost']);
Route::post('/create', [PostsController::class, 'createPost']);
Route::get('/post/test', [PostsController::class, 'test']);
Route::get('/about', [AboutController::class, 'about'] );
Route::get('/contacts', [ContactsController::class, 'contacts']);
Route::get('/authorization', [AuthorizationController::class, 'authorization']);
Route::post('/authorization', [AuthorizationController::class, 'authorization']);
