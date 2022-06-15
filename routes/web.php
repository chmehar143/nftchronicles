<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\HelpQuestionDetailController;
use App\Http\Controllers\NewestController;
use App\Http\Controllers\UpComingController;
use App\Http\Controllers\OnGoingController;
use App\Http\Controllers\PriacyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ArticleController;











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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/blog', [NewsController::class, 'index'])->name('blog');
Route::get('/blog-details/{blog}', [NewsController::class, 'show'])->name('blog-details');

Route::get('/help-questions', [HelpCenterController::class, 'index'])->name('help-questions');
Route::get('/question-details/{question}', [HelpCenterController::class, 'show'])->name('question-details');
Route::post('/search', [HelpCenterController::class, 'search'])->name('search');

Route::get('/Nft-Article', [ArticleController::class, 'index'])->name('Nft-Article');

Route::get('/privacy-policy', [PriacyController::class, 'index'])->name('privacy-policy');
Route::get('/Nft-Marketplace', [MarketplaceController::class, 'index'])->name('Nft-Marketplace');

Route::get('/terms-condition', [TermsController::class, 'index'])->name('terms-condition');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/save', [ContactController::class, 'save'])->name('contact.save');



Route::get('/create', [NftController::class, 'index'])->name('create');
Route::post('/insert', [NftController::class, 'insert'])->name('nft.save');

Route::get('/collection', [CollectionController::class, 'index'])->name('collection');
Route::get('/today', [CollectionController::class, 'today'])->name('today');
Route::get('/newest', [CollectionController::class, 'newest'])->name('newest');
Route::get('/upcoming', [CollectionController::class, 'upcoming'])->name('upcoming');
Route::get('/ongoing', [CollectionController::class, 'ongoing'])->name('ongoing');
Route::get('/item-details/{nft}', [CollectionController::class, 'show'])->name('item-details');


Route::post('/store', [\App\Http\Controllers\LetterController::class, 'store'])->name('letter.save');
