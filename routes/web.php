<?php


// site routes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\SponsorController;
use App\Http\Controllers\Site\VolunteerController;
use App\Http\Controllers\Site\TermsController;
use App\Http\Controllers\Site\PolicyController;

Route::get('/', [IndexController::class, 'displayIndex'])->name('displayIndex');
Route::get('/about', [AboutController::class, 'displayAbout'])->name('displayAbout');
Route::get('/service', [ServiceController::class, 'displayService'])->name('displayService');
Route::get('/blog', [BlogController::class, 'displayBlog'])->name('displayBlog');
Route::get('/contact', [ContactController::class, 'displayContact'])->name('displayContact');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('storeContact');
Route::get('/sponsor', [SponsorController::class, 'displaySponsor'])->name('displaySponsor');
Route::get('/volunteer', [VolunteerController::class, 'displayVolunteer'])->name('displayVolunteer');
Route::get('/terms/condition', [TermsController::class, 'displayTerms'])->name('displayTerms');
Route::get('/privacy/policy', [PolicyController::class, 'displayPolicy'])->name('displayPolicy');
// site routes end

// admin routes
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ResetPassword;
use App\Http\Controllers\Admin\ChangePassword;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminSponsorController;
use App\Http\Controllers\Admin\AdminVolunteerController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminCauseController;
use App\Http\Controllers\Admin\AdminTermsController;
use App\Http\Controllers\Admin\AdminPolicyController;


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	// about
	Route::get('/about/manage', [AdminAboutController::class, 'manageAbout'])->name('manageAbout');
	Route::post('/about/manage/update', [AdminAboutController::class, 'updateAbout'])->name('updateAbout');
	//about end
	//service
	Route::get('/service/manage', [AdminServiceController::class, 'manageService'])->name('manageService');
	Route::get('/service/add', [AdminServiceController::class, 'addService'])->name('addService');
	Route::post('/service/store', [AdminServiceController::class, 'storeService'])->name('storeService');
	Route::get('/service/edit/{slug}', [AdminServiceController::class, 'editService'])->name('editService');
	Route::post('/service/update/{slug}', [AdminServiceController::class, 'updateService'])->name('updateService');
	Route::delete('/service/delete/{slug}', [AdminServiceController::class, 'deleteService'])->name('deleteService');
	//service end
    //causes
    Route::get('/cause/manage', [AdminCauseController::class, 'manageCause'])->name('manageCause');
    Route::get('/cause/add', [AdminCauseController::class, 'addCause'])->name('addCause');
    Route::post('/cause/store', [AdminCauseController::class, 'storeCause'])->name('storeCause');
    Route::get('/cause/edit/{slug}', [AdminCauseController::class, 'editCause'])->name('editCause');
    Route::post('/cause/update/{slug}', [AdminCauseController::class, 'updateCause'])->name('updateCause');
    Route::delete('/cause/delete/{slug}', [AdminCauseController::class, 'deleteCause'])->name('deleteCause');
	//blog
	Route::get('/blog/manage', [AdminBlogController::class, 'manageBlog'])->name('manageBlog');
    Route::get('/blog/add', [AdminBlogController::class, 'addBlog'])->name('addBlog');
    Route::post('/blog/store', [AdminBlogController::class, 'storeBlog'])->name('storeBlog');
    Route::get('/blog/edit/{slug}', [AdminBlogController::class, 'editBlog'])->name('editBlog');
    Route::post('/blog/update/{slug}', [AdminBlogController::class, 'updateBlog'])->name('updateBlog');
    Route::delete('/blog/delete/{slug}', [AdminBlogController::class, 'deleteBlog'])->name('deleteBlog');
	//blog end
    //gallery
    Route::get('/gallery/manage', [AdminGalleryController::class, 'manageGallery'])->name('manageGallery');
    Route::get('/gallery/add', [AdminGalleryController::class, 'addGallery'])->name('addGallery');
    Route::post('/gallery/store', [AdminGalleryController::class, 'storeGallery'])->name('storeGallery');
    Route::get('/gallery/edit/{slug}', [AdminGalleryController::class, 'editGallery'])->name('editGallery');
    Route::post('/gallery/update/{slug}', [AdminGalleryController::class, 'updateGallery'])->name('updateGallery');
    Route::delete('/gallery/delete/{slug}', [AdminGalleryController::class, 'deleteGallery'])->name('deleteGallery');
    //gallery end
    //team
    Route::get('/team/manage', [AdminTeamController::class, 'manageTeam'])->name('manageTeam');
    Route::get('/team/add', [AdminTeamController::class, 'addTeam'])->name('addTeam');
    Route::post('/team/store', [AdminTeamController::class, 'storeTeam'])->name('storeTeam');
    Route::get('/team/edit/{slug}', [AdminTeamController::class, 'editTeam'])->name('editTeam');
    Route::post('/team/update/{slug}', [AdminTeamController::class, 'updateTeam'])->name('updateTeam');
    Route::delete('/team/delete/{slug}', [AdminTeamController::class, 'deleteTeam'])->name('deleteTeam');
    //team end
    //Sponsor
    Route::get('/sponsor/manage', [AdminSponsorController::class, 'manageSponsor'])->name('manageSponsor');
    Route::get('/sponsor/add', [AdminSponsorController::class, 'addSponsor'])->name('addSponsor');
    Route::post('/sponsor/store', [AdminSponsorController::class, 'storeSponsor'])->name('storeSponsor');
    Route::get('/sponsor/edit/{slug}', [AdminSponsorController::class, 'editSponsor'])->name('editSponsor');
    Route::post('/sponsor/update/{slug}', [AdminSponsorController::class, 'updateSponsor'])->name('updateSponsor');
    Route::delete('/sponsor/delete/{slug}', [AdminSponsorController::class, 'deleteSponsor'])->name('deleteSponsor');
    //Sponsor end
    //Volunteer
    Route::get('/volunteer/manage', [AdminVolunteerController::class, 'manageVolunteer'])->name('manageVolunteer');
    Route::get('/volunteer/add', [AdminVolunteerController::class, 'addVolunteer'])->name('addVolunteer');
    Route::post('/volunteer/store', [AdminVolunteerController::class, 'storeVolunteer'])->name('storeVolunteer');
    Route::get('/volunteer/edit/{slug}', [AdminVolunteerController::class, 'editVolunteer'])->name('editVolunteer');
    Route::post('/volunteer/update/{slug}', [AdminVolunteerController::class, 'updateVolunteer'])->name('updateVolunteer');
    Route::delete('/volunteer/delete/{slug}', [AdminVolunteerController::class, 'deleteVolunteer'])->name('deleteVolunteer');
    //Volunteer end
    //contact
    Route::get('/contact/manage', [AdminContactController::class, 'manageContact'])->name('manageContact');
    Route::post('/contact/manage/update', [AdminContactController::class, 'updateContact'])->name('updateContact');
    //contact end
    //terms And Condition
    Route::get('/terms/manage', [AdminTermsController::class, 'manageTerms'])->name('manageTerms');
    Route::post('/terms/manage/update', [AdminTermsController::class, 'updateTerms'])->name('updateTerms');
    //terms And Condition end
    //privacy policy
    Route::get('/policy/manage', [AdminPolicyController::class, 'managePolicy'])->name('managePolicy');
    Route::post('/policy/manage/update', [AdminPolicyController::class, 'updatePolicy'])->name('updatePolicy');
    //privacy policy end

	//user profile
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	//user profile end
});
// admin routes end
