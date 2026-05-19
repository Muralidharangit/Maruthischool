<?php

use App\Http\Controllers\Admin\ContactManagement\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController\EventController;
use App\Http\Controllers\Admin\GalleryManagement\CategoryController;
use App\Http\Controllers\Admin\GalleryManagement\ProjectController;
use App\Http\Controllers\Admin\SliderManagement\SliderController;
use App\Http\Controllers\Admin\UserManagement\PermissionController;
use App\Http\Controllers\Admin\UserManagement\RoleController;
use App\Http\Controllers\Admin\UserManagement\UserController;
use App\Http\Controllers\User\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('about', [ClientController::class, 'about'])->name('about');
Route::get('events', [ClientController::class, 'event_page'])->name('event_page');
Route::get('event-details/{id}', [ClientController::class, 'event_details'])->name('event.details');

Route::get('gallery', [ClientController::class, 'gallery'])->name('gallery');

Route::get('achievements', [ClientController::class, 'achievements'])->name('achievements');

Route::get('services', [ClientController::class, 'services'])->name('services');
Route::get('projects', [ClientController::class, 'projects'])->name('projects');
Route::get('project-detail/{id}', [ClientController::class, 'show'])->name('project.detail');
Route::get('contact', [ClientController::class, 'contact'])->name('contact');
Route::post('contact-store', [ClientController::class, 'contactstore'])->name('contact.store');

Route::get('login', [DashboardController::class, 'login'])->name('login');
Route::post('login-validate', [DashboardController::class, 'login_validate'])->name('admin.post.login');
Route::get('forgot_password', [DashboardController::class, 'forgot_password'])->name('forgot_password');
Route::post('forgot-validate', [DashboardController::class, 'forgot_validate'])->name('forgot_validate');
// otp password
Route::get('otp-verify', [DashboardController::class, 'otp_verify'])->name('otp.verify');
Route::post('otp-validate', [DashboardController::class, 'otp_validate'])->name('otp_validate');
// Route::post('otp-resend', [DashboardController::class, 'otp_resend'])->name('otp_resend');
Route::post('otp-resend', [DashboardController::class, 'otp_resend'])->name('otp_resend');

// reset password
Route::get('reset_password', [DashboardController::class, 'reset_password'])->name('reset_password');
Route::post('reset-validate', [DashboardController::class, 'reset_validate'])->name('reset_validate');

Route::get('logout-admin', [DashboardController::class, 'logout'])->name('admin.logout');
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //permission
    Route::get('permission-index', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('permission-create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('permission-store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('permission-edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::PUT('permission-update/{id}', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('permission-delete/{id}', [PermissionController::class, 'delete'])->name('permission.delete');

    //role
    Route::get('role-index', [RoleController::class, 'index'])->name('role.index');
    Route::get('role-create', [RoleController::class, 'create'])->name('role.create');
    Route::post('role-store', [RoleController::class, 'store'])->name('role.store');
    Route::get('role-edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::PUT('role-update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('role-delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    //user
    Route::get('user-index', [UserController::class, 'index'])->name('user.index');
    Route::get('user-create', [UserController::class, 'create'])->name('user.create');
    Route::post('user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::PUT('user-update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    // contact
    Route::get('contact-index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact-create', [ContactController::class, 'create'])->name('contact.create');

    //category
    Route::get('category-index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category-create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::PUT('category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    //Project Images
    Route::get('project-index', [ProjectController::class, 'index'])->name('project.index');
    Route::get('project-create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('project-store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('project-edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::PUT('project-update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project-delete/{id}', [ProjectController::class, 'destroy'])->name('project.delete');
    Route::delete('/gallery-image/{id}', [ProjectController::class, 'destroy_gallery_image'])->name('gallery_image.delete');

    //Event Images
    Route::get('event-index', [EventController::class, 'index'])->name('event.index');
    Route::get('event-create', [EventController::class, 'create'])->name('event.create');
    Route::post('event-store', [EventController::class, 'store'])->name('event.store');
    Route::get('event-edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::PUT('event-update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::delete('event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

    //slider Image
    Route::get('slider-index', [SliderController::class, 'index'])->name('slider.index');
    Route::get('slider-create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('slider-store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider-edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('slider-update/{id}', [SliderController::class, 'update'])->name('slider.update');
    // Route::delete('slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::delete('slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
});
