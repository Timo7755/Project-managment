<?php
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;

Route::redirect('/', 'dashboard');




// only authenticated and verified users can access this group
Route::middleware(["auth", "verified"])->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])
    ->name("dashboard");

    Route::resource("project", ProjectController::class);
    Route::resource("task", TaskController::class);
    Route::get("my-tasks", [TaskController::class, "myTasks"])->name("task.my-tasks");
    Route::resource("user", UserController::class);
 
   
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
