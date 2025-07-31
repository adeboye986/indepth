<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthorController;

        Route::get('/', function () {
            return view('index');
        });

        Route::get('/about', function () {
            return view('about');
        });

        Route::get('/services', function () {
            return view('services');
        });

        Route::get('/contact', function () {
            return view('contact');
        });

        Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.post');

        Route::prefix('admin')
        ->name('admin.')
        ->middleware('auth')      // ← this ensures only logged‑in users can hit any of these
        ->group(function () {
         Route::get('/', [PostController::class, 'index'])
         ->name('dashboard');

          // custom post filters
         Route::get('posts/published', [PostController::class, 'showPublishedPosts'])
              ->name('posts.published');
         Route::get('posts/draft',     [PostController::class, 'showDraftsPosts'])
              ->name('posts.draft');
         Route::get('posts/pending',   [PostController::class, 'showPendingPosts'])
              ->name('posts.pending');

         // resourceful controllers
         Route::resource('posts',      PostController::class);
         Route::resource('categories', CategoryController::class);
         Route::resource('tags',       TagController::class);

        

         // author management
         Route::get('author',        [AuthorController::class, 'index'])
              ->name('author.index');
         Route::get('author/create', [AuthorController::class, 'create'])
              ->name('author.create');
         Route::post('author',       [AuthorController::class, 'store'])
              ->name('author.store');

         Route::get('author/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
         Route::put('author/{id}', [AuthorController::class, 'update'])->name('author.update');
         Route::delete('author/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');


        });

        // Login form & submission
        Route::get('login',  [LoginController::class, 'showLoginForm'])
            ->name('login');
        Route::post('login', [LoginController::class, 'login']);

        // Logout (POST for safety)
        Route::post('logout', [LoginController::class, 'logout'])
            ->name('logout');

