<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NftController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelpCenterController;
use App\Http\Controllers\ItemDetailsController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\HelpQuestionDetailController;
use App\Http\Controllers\TodayController;
use App\Http\Controllers\NewestController;
use App\Http\Controllers\UpComingController;
use App\Http\Controllers\OnGoingController;
use App\Http\Controllers\PriacyController;
use App\Http\Controllers\TermsController;








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
})->name('index');

Route::get('/collection', [CollectionController::class, 'index'])->name('collection');
Route::get('/today', [TodayController::class, 'index'])->name('today');
Route::get('/newest', [NewestController::class, 'index'])->name('newest');
Route::get('/upcoming', [UpComingController::class, 'index'])->name('upcoming');
Route::get('/ongoing', [OnGoingController::class, 'index'])->name('ongoing');
Route::get('/blog', [NewsController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogDetailsController::class, 'index'])->name('blog-details');
Route::get('/help-questions', [HelpCenterController::class, 'index'])->name('help-questions');
Route::get('/question-details', [HelpQuestionDetailController::class, 'index'])->name('question-details');
Route::get('/privacy-policy', [PriacyController::class, 'index'])->name('privacy-policy');
Route::get('/terms-condition', [TermsController::class, 'index'])->name('terms-condition');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/save', [ContactController::class, 'save'])->name('contact.save');



Route::get('/create', [NftController::class, 'index'])->name('create');
Route::post('/store', [NftController::class, 'store'])->name('nft.save');


Route::get('/item-details', [ItemDetailsController::class, 'index'])->name('item-details');
