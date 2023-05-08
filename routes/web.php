<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\HomeController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Admin\DashboardAdminController;


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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all-articles', [HomeController::class, 'article'])->name('all.articles');
Route::get('/all-portfolios', [HomeController::class, 'portfolio'])->name('all.portfolios');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/all-articles/{id}', [HomeController::class, 'showArticle'])->name('show.article');
Route::get('/all-portfolios/{id}', [HomeController::class, 'showPortfolio'])->name('show.portfolio');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');

// Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
//     Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
//     Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// });

Route::group(['middleware' => 'auth:admin,user'], function() {
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('logout2', [AuthController::class, 'logoutUser'])->name('logoutUser');
    // article route
    Route::get('article', [ArticleController::class, 'index'])->name('article');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('admin.article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('admin.article.store');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
    Route::get('/article/show/{id}', [ArticleController::class, 'show'])->name('admin.article.show');
    Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('admin.article.delete');
    // portfolio route
    Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    Route::put('/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
    Route::get('/portfolio/show/{id}', [PortfolioController::class, 'show'])->name('admin.portfolio.show');
    Route::delete('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('admin.portfolio.delete');
    // user route
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('/user/show/{id}', [UserController::class, 'show'])->name('admin.user.show');
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');
});