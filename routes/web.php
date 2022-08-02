<?php

use App\Http\Controllers\Main\PagesController;
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

Route::get('/', [ PagesController::class, 'index'])->name('home');
Route::get('/my-account', [ PagesController::class, 'myAccount'])->name('my-account');

Route::get('/404', [ PagesController::class, 'pageNotFound'])->name('pageNotFound');

Route::get('/artist', [ PagesController::class, 'artist'])->name('artist');
Route::get('/single-artist', [ PagesController::class, 'singleArtist'])->name('single-artist');
Route::get('/single-works', [ PagesController::class, 'singleWorks'])->name('single-works');
Route::get('/collection-type-1', [ PagesController::class, 'collectionType1'])->name('collection-type-1');
Route::get('/collection-type-2', [ PagesController::class, 'collectionType2'])->name('collection-type-2');

Route::get('/event-compact', [ PagesController::class, 'eventCompact'])->name('event-compact');
Route::get('/event-grid', [ PagesController::class, 'eventGrid'])->name('event-grid');
Route::get('/events-list', [ PagesController::class, 'eventList'])->name('events-list');
Route::get('/single-events', [ PagesController::class, 'singleEvent'])->name('single-events');

Route::get('/exhibition-compact', [ PagesController::class, 'exhibitionCompact'])->name('exhibition-compact');
Route::get('/exhibition-grid', [ PagesController::class, 'exhibitionGrid'])->name('exhibition-grid');
Route::get('/exhibition-list', [ PagesController::class, 'exhibitionList'])->name('exhibition-list');
Route::get('/single-exhibition', [ PagesController::class, 'singleExhibition'])->name('single-exhibition');
Route::get('/facility-rental', [ PagesController::class, 'facilityRental'])->name('facility-rental');

Route::get('/gallery-caption', [ PagesController::class, 'galleryCaption'])->name('gallery-caption');
Route::get('/gallery-fullwidth', [ PagesController::class, 'galleryFullwidth'])->name('gallery-fullwidth');
Route::get('/gallery-grid', [ PagesController::class, 'galleryGrid'])->name('gallery-grid');
Route::get('/gallery-masonry', [ PagesController::class, 'galleryMasonry'])->name('gallery-masonry');
Route::get('/image-gallery', [ PagesController::class, 'imageGallery'])->name('image-gallery');

Route::get('/news-classic', [ PagesController::class, 'newsClassic'])->name('news-classic');
Route::get('/news-grid', [ PagesController::class, 'newsGrid'])->name('news-grid');
Route::get('/news-list', [ PagesController::class, 'newsList'])->name('news-list');
Route::get('/single-post', [ PagesController::class, 'singlePost'])->name('single-post');

Route::get('/cart', [ PagesController::class, 'cart'])->name('cart');
Route::get('/checkout', [ PagesController::class, 'checkout'])->name('checkout');
Route::get('/shop', [ PagesController::class, 'shop'])->name('shop');
Route::get('/single-product', [ PagesController::class, 'singleProduct'])->name('single-product');

Route::get('/board-staff', [ PagesController::class, 'boardStaff'])->name('board-staff');
Route::get('/career', [ PagesController::class, 'career'])->name('career');
Route::get('/career-details', [ PagesController::class, 'careerDetails'])->name('career-details');

Route::get('/contact-us', [ PagesController::class, 'contactUs'])->name('contact-us');
Route::get('/faq', [ PagesController::class, 'faq'])->name('faq');

Route::get('/donate', [ PagesController::class, 'donate'])->name('donate');
Route::get('/membership', [ PagesController::class, 'membership'])->name('membership');
Route::get('/sponsers', [ PagesController::class, 'sponsers'])->name('sponsers');

Route::get('/mission-history', [ PagesController::class, 'missionHistory'])->name('mission-history');
Route::get('/venues', [ PagesController::class, 'venues'])->name('venues');
Route::get('/visit-us-block', [ PagesController::class, 'visitUsBlock'])->name('visit-us-block');
