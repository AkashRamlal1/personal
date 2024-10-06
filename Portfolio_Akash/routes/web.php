<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('index');
})->name("home");

Route::get('/projects', function () {
    return view('projects');
})->name("project");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get("/projects",[ProjectController::class,'index'])->name("project");
;

Route::post('/form',[VisitorController::class,'store'])->name('form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
