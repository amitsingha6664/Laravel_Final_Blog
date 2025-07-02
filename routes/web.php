<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;  /* Connected Controllers */
use App\Http\Controllers\AdminController;  /* Connected Controllers */
use App\Http\Controllers\SettingsController;  /* Connected Controllers */
use App\Http\Controllers\AuthenticationController;

// Auth

Route::get('Login', [AuthenticationController::class, 'Login'])->name('Login');
Route::get('UserLogin', [AuthenticationController::class, 'User_Login'])->name('User-Login');

Route::get('Registration', [AuthenticationController::class, 'Registration'])->name('Registration');
Route::post('NewUserCreate', [AuthenticationController::class, 'New_User_Create'])->name('New-User-Create');

/* Frontend Routes */

Route::get('/', [BlogController::class, 'Home'])->name('Home');
Route::get('AddNewPost', [BlogController::class, 'Add_New_Post'])->name('Add-New-Post');
Route::post('UserCreatePost', [BlogController::class, 'User_Create_Post'])->name('User-Create-Post');
Route::get('Category', [BlogController::class, 'Category'])->name('Category');
Route::get('Articles', [BlogController::class, 'Articles'])->name('Articles');
Route::get('About', [BlogController::class, 'About'])->name('About');
Route::get('Contact', [BlogController::class, 'Contact'])->name('Contact');

/* Backend Admin Routes */

Route::get('DashboardView', [AdminController::class, 'Dashboard_View'])->name('Dashboard-View');
Route::get('AllPostView', [AdminController::class, 'All_Post_View'])->name('All-Post-View');
Route::get('SearchPost', [AdminController::class, 'Search_Post'])->name('Search-Post');
Route::get('PostFilter', [AdminController::class, 'Post_Filter'])->name('Post-Filter');
Route::get('RejectedPostView', [AdminController::class, 'Rejected_Post_View'])->name('Rejected-Post-View');
Route::get('CreatePostView', [AdminController::class, 'Create_Post_View'])->name('Create-Post-View');
Route::post('CreatePost', [AdminController::class, 'Create_Post'])->name('Create-Post');  /* New Post Create Routes */

Route::get('UsersPostManagementView', [AdminController::class, 'Users_Post_Management_View'])->name('Users-Post-Management-View');
Route::get('UserPostSearch', [AdminController::class, 'User_Post_Search'])->name('User-Post-Search');
Route::post('UserPostAccept/{id}', [AdminController::class, 'User_Post_Accept'])->name('User-Post-Accept');
Route::post('UserPostReject/{id}', [AdminController::class, 'User_Post_Reject'])->name('User-Post-Reject');

Route::get('CategoriesManagementView', [AdminController::class, 'Categories_Management_View'])->name('Categories-Management-View');
Route::post('AddNewCategory', [AdminController::class, 'Add_New_Category'])->name('Add-New-Category');
Route::get('CategoryDelete/{id}', [AdminController::class, 'Category_Delete'])->name('Category-Delete');

Route::get('CommentsManagementView', [AdminController::class, 'Comments_Management_View'])->name('Comments-Management-View');
Route::get('UsersManagementView', [AdminController::class, 'Users_Management_View'])->name('Users-Management-View');
Route::post('AddNewUser', [AdminController::class, 'Add_New_User'])->name('Add-New-User');
Route::get('ViewPost/{id}', [AdminController::class, 'View_Post'])->name('View-Post');  /* Post View Routes */
Route::get('PostEditView/{id}', [AdminController::class, 'Post_Edit_View'])->name('Post-Edit-View');  /* Post Edit Routes */
Route::post('PostEditUpdate/{id}', [AdminController::class, 'Post_Edit_Update'])->name('Post-Edit-Update');
Route::get('PostDelete/{id}', [AdminController::class, 'Post_Delete'])->name('Post-Delete');

/* Settings Routes */

Route::get('ProfileView', [SettingsController::class, 'Profile_View'])->name('Profile-View');
Route::get('SettingsView', [SettingsController::class, 'Settings_View'])->name('Settings-View');
Route::get('SettingsEditView', [SettingsController::class, 'Settings_Edit_View'])->name('Settings-Edit-View');
Route::post('SiteInformationUpdate', [SettingsController::class, 'Site_Information_Update'])->name('Site-Information-Update');
Route::post('SocialMediaUpdate', [SettingsController::class, 'Social_Media_Update'])->name('Social-Media-Update');