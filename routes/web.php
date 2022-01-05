<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\PostController;
use App\Http\Controllers\frontend\MainController;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Candidate
    Route::delete('candidates/destroy', 'CandidateController@massDestroy')->name('candidates.massDestroy');
    Route::post('candidates/media', 'CandidateController@storeMedia')->name('candidates.storeMedia');
    Route::post('candidates/ckmedia', 'CandidateController@storeCKEditorImages')->name('candidates.storeCKEditorImages');
    Route::resource('candidates', 'CandidateController');

    // View Candidates
    Route::delete('view-candidates/destroy', 'ViewCandidatesController@massDestroy')->name('view-candidates.massDestroy');
    Route::resource('view-candidates', 'ViewCandidatesController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

// frontend

Route::get('/',[MainController::class,'index'])->name('front.home');
Route::get('index1_AUS',[MainController::class,'aus'])->name('front.australia');
Route::get('index1_NZ',[MainController::class,'newzeeland'])->name('front.newzeeland');
Route::get('index1_UK',[MainController::class,'UK'])->name('front.uk');
Route::get('aus_registration',[MainController::class,'aus_candidate_register'])->name('aus.candidate.registration');
Route::get('nz_registration',[MainController::class,'nz_candidate_register'])->name('nz_candidate_registration');
Route::post('store',[PostController::class,'store'])->name('store');
Route::post('nz_store',[PostController::class,'store'])->name('nz_store');
