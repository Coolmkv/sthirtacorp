<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomePageController;
//use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get("/",[HomePageController::class,"homePage"]);
// Route::get("comingsoon",[HomePageController::class,function(){
//     return view("HomePage.ComingSoon");
// }]);
Route::get("comingsoon",[HomePageController::class,"ComingSoon"])->name("ComingSoon");
Route::get("about-us",[HomePageController::class,"aboutUs"])->name("aboutUs");
Route::get("terms-conditions",[HomePageController::class,"termsConditions"])->name("termsConditions");
Route::get("shipping-delivery-policy",[HomePageController::class,"shippingDeliverypolicy"])->name("shippingDeliverypolicy");
Route::get("cancellation-refund-policy",[HomePageController::class,"CancellationRefundPolicy"])->name("CancellationRefundPolicy");
Route::get("privacy-policy",[HomePageController::class,"privacyPolicy"])->name("privacyPolicy");
Route::get("product-and-solutions",[HomePageController::class,"product"])->name("product");
Route::get("gallery",[HomePageController::class,"galleryPages"])->name("galleryPages");
Route::get("contact-us",[HomePageController::class,"contactUs"])->name("contactUs");
Route::get("get-home-page-destinations",[DestinationController::class,"getHomePageDestinations"])->name("getHomePageDestinations");
Route::get("tostem",[HomePageController::class,"tostem"])->name("tostem");
Route::get("greenlam",[HomePageController::class,"greenlam"])->name("greenlam");
Route::get("sloan",[HomePageController::class,"sloan"])->name("sloan");
Route::get("vox",[HomePageController::class,"vox"])->name("vox");
Route::post("contact-us-form",[ContactUsController::class,"saveContactUsDetails"])->name("saveContactUsDetails");
Route::get('refresh-captcha',[HomePageController::class,"refreshCapthca"])->name("refreshCaptcha");


// require __DIR__.'/auth.php';

include_once "adminRoutes.php";
