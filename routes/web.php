<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// web routes
Route::get('/', fn() => view('screens.web.home.index'))->name('home');
Route::get('/about-us', fn() => view('screens.web.about-us.index'))->name('about-us');
Route::get('/key-features', fn() => view('screens.web.key-features.index'))->name('key-features');
Route::get('/testimonials', fn() => view('screens.web.testimonials.index'))->name('testimonials');
Route::get('/contact-us', fn() => view('screens.web.contact-us.index'))->name('contact-us');
Route::get('/packages', fn() => view('screens.web.packages.index'))->name('packages');

// user routes 



// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/companies', fn() => view('screens.admin.companies.index'))->name('companies.index');
    Route::get('/billing', fn() => view('screens.admin.billing.index'))->name('billing.index');
    Route::get('/projects', fn() => view('screens.admin.projects.index'))->name('projects.index');
});

// company admin routes
// Route::prefix('companyadmin')->middleware(['auth', 'role:company_admin'])->group(function () {
//     Route::get('/dashboard', fn() => view('screens.dashboards.companyadmin'))->name('companyadmin.dashboard');
// });


// auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
