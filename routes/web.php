<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\PostController;
use App\Http\Controllers\Admin\ActivebarController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\TestimonialController;

Route::redirect('/', '/login');

Route::get('migrate', function () {
    Artisan::call('migrate:fresh --seed');

    return 'Successfully Migrated !';
});

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

    //filters and exports
    Route::get('candidates/filters/{slug?}/{export?}', 'CandidateController@index')->name('filter.candidates');

    Route::resource('candidates', 'CandidateController');

    // View Candidates
    Route::delete('view-candidates/destroy', 'ViewCandidatesController@massDestroy')->name('view-candidates.massDestroy');
    Route::resource('view-candidates', 'ViewCandidatesController');


    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::post('jobs/media', 'JobsController@storeMedia')->name('jobs.storeMedia');
    Route::post('jobs/ckmedia', 'JobsController@storeCKEditorImages')->name('jobs.storeCKEditorImages');
    Route::resource('jobs', 'JobsController');

    // Question
    Route::resource('questions', 'QuestionController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

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

//--------------------------------- frontend -------------------------------
Route::get('/',[MainController::class,'index'])->name('front.home');
Route::get('index1_AUS',[MainController::class,'aus'])->name('front.australia');
Route::get('index1_NZ',[MainController::class,'newzeeland'])->name('front.newzeeland');
Route::get('index1_UK',[MainController::class,'UK'])->name('front.uk');
Route::get('aus_registration',[MainController::class,'aus_candidate_register'])->name('aus.candidate.registration');
Route::get('nz_registration',[MainController::class,'nz_candidate_register'])->name('nz_candidate_registration');
Route::post('store',[PostController::class,'store'])->name('store');
Route::post('nz_store',[PostController::class,'store'])->name('nz_store');
Route::post('update1/{id}',[CandidateController::class,'update1']);
Route::post('update2/{id}',[CandidateController::class,'update2']);
Route::post('update3/{id}',[CandidateController::class,'update3']);
Route::post('update_interview/{id}',[CandidateController::class,'updateInterview'])->name('interview');
Route::post('update_interviewsummary/{id}',[CandidateController::class,'update_interviewsummary'])->name('update_interviewsummary');
Route::post('update_progress/{id}',[CandidateController::class,'updateProgress'])->name('update_progress');
Route::get('add_client',[ClientController::class,'index'])->name('add_client');
Route::get('show_client',[ClientController::class,'show'])->name('show_client');

//--------------------------------- Activity ---------------------------------
Route::post('insert_activity/{id}',[ActivebarController::class,'insertActivity'])->name('insert_activity');
Route::post('update_activity/{id}',[ActivebarController::class,'updateActivity'])->name('update_activity');
Route::get('delete_activity/{id}',[ActivebarController::class,'deleteActivity'])->name('delete_activity');

//--------------------------------- References -------------------------------
Route::post('insert_reference/{id}',[ReferenceController::class,'insertReference'])->name('insert_reference');
Route::post('update_reference/{id}',[ReferenceController::class,'updateReference'])->name('update_reference');
Route::get('delete_reference/{id}',[ReferenceController::class,'deleteReference'])->name('delete_reference');

//--------------------------------- Testimonial -------------------------------
Route::post('insert_testimonial/{id}',[TestimonialController::class,'insertTestimonial'])->name('insert_testimonial');
Route::post('update_testimonial/{id}',[TestimonialController::class,'updateTestimonial'])->name('update_testimonial');
Route::get('delete_testimonial/{id}',[TestimonialController::class,'destroy'])->name('delete_testimonial');

Route::get('cv_delete/{id}',[CandidateController::class,'cv_delete']);
Route::get('form_delete/{id}',[CandidateController::class,'form_delete']);
Route::get('privacy_delete/{id}',[CandidateController::class,'privacy_delete']);

//.................................Job...........................................

Route::post('create_job',[JobController::class,'create'])->name('create_job');
Route::get('index_job',[JobController::class,'index'])->name('index_job');
Route::post('edit_job',[JobController::class,'edit'])->name('edit_job');

