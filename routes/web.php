<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFactController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeatureDetailController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PortfolioCardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialDetailController;
use App\Http\Controllers\WorkerController;
use App\Models\AboutFact;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/portfolio-details", function () {
    return view('portfolio-details');
})->name("portfolio-details");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/about-fact', AboutFactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/adresse', AdresseController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/email', EmailController::class);
Route::resource('/feature_detail', FeatureDetailController::class);
Route::get('/feature-detail/{id}/download', [FeatureDetailController::class, "download"]);
Route::resource('/feature', FeatureController::class);
Route::resource('/footer', FooterController::class);
Route::resource('/home-table', HomeController::class);
Route::get('/home-table/{id}/download', [HomeController::class, "download"]);
Route::resource('/links', LinksController::class);
Route::resource('/newsletter', NewsletterController::class);
Route::resource('/personne', PersonneController::class);
Route::get('/personne/{id}/download', [PersonneController::class, "download"]);
Route::resource('/phone', PhoneController::class);
Route::resource('/portfolio', PortfolioController::class);
Route::resource('/portfolio-card', PortfolioCardController::class);
Route::get('/portfolio-card/{id}/download', [PortfolioCardController::class, "download"]);
Route::resource('/service-detail', ServiceDetailController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/team', TeamController::class);
Route::resource('/testimonials-detail', TestimonialDetailController::class);
Route::resource('/testimonial', TestimonialController::class);
Route::resource('/worker', WorkerController::class);
Route::get('/worker/{id}/download', [WorkerController::class, "download"]);



require __DIR__.'/auth.php';
