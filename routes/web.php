<?php

use App\Http\Controllers\CommunityAdminController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CommunityModeratorController;
use App\Http\Controllers\CommunityUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::middleware('auth')->group(function () {
    Route::post('/post', [PostController::class,'store'])->name('post.store');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::get('/community/create', [CommunityController::class, 'create'])->name('community.create');
    Route::post('/community', [CommunityController::class,'store'])->name('community.store');
    Route::post('/community/join', [CommunityUserController::class, 'store'])->name('community.user.join');
    Route::get('/post/{post}/report', [PostReportController::class,'create'])->name('post.report.create');
    Route::post('/post/{post}/report', [PostReportController::class, 'store'])->name('post.report.store');
    Route::get('/user/{user}/report', [UserReportController::class,'create'])->name('user.report.create');
    Route::post('/user/{user}/report', [UserReportController::class, 'store'])->name('user.report.store');

    Route::middleware('checkOwner:post')->group(function () {
        Route::get('/post/{post}/edit', [PostController::class, 'edit'])
            ->name('post.edit');

        Route::put('/post/{post}', [PostController::class, 'update'])
            ->name('post.update');

        Route::delete('/post/{post}', [PostController::class, 'destroy'])
            ->name('post.destroy');

        Route::get('/post/{post}/delete', [PostController::class, 'delete'])
            ->name('post.delete');
    });
});

//Moderator
Route::middleware('checkCommunityModerator')->group(function () {

        Route::get('/community/{community}/dashboard', [CommunityController::class, 'dashboard'])
            ->name('community.dashboard');


        //Admin
        Route::middleware('checkCommunityAdmin')->group(function () {

            Route::get('/community/{community}/edit', [CommunityController::class, 'edit'])
                ->name('community.edit');

            Route::put('/community/{community}', [CommunityController::class, 'update'])
                ->name('community.update');

            Route::post('/community/{community}/moderator', [CommunityModeratorController::class, 'store'])
                ->name('community.moderator.store');

            Route::delete('/community/{community}/moderator/{user}', [CommunityModeratorController::class, 'destroy'])
                ->name('community.moderator.destroy');

            //Owner
            Route::middleware('checkCommunityOwner')->group(function () {

                Route::delete('/community/{community}', [CommunityController::class, 'destroy'])
                    ->name('community.destroy');

                Route::get('/community/{community}/delete', [CommunityController::class, 'delete'])
                    ->name('community.delete');

                Route::post('/community/{community}/admin', [CommunityAdminController::class, 'store'])
                    ->name('community.admin.store');

                Route::delete('/community/{community}/admin/{user}', [CommunityAdminController::class, 'destroy'])
                    ->name('community.admin.destroy');
            });

        });
    });



Route::get('/post/{id}', [PostController::class,'show'])->name('post.show');


Route::get('/community', [CommunityController::class,'index'])->name('community.index');
Route::get('/community/{id}', [CommunityController::class,'show'])->name('community.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
