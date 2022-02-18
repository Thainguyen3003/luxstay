<?php

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

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/the-loai', 'CategoryController@category')->name('category');
Route::get('/quoc-gia', 'CountryController@country')->name('country');
Route::get('/phim', 'MovieController@movie')->name('movie');
Route::get('/xem-phim', 'WatchController@watch')->name('watch');
Route::get('/tap-phim', 'EpisodeController@episode')->name('episode');

/* ---------------------------------------------------------------------------- */
/* Admin */
Route::get('/admin', 'AdminController@home')->name('home');

// Admin category
Route::get('/admin/danh-muc', 'AdminCategoryController@formCreateCategory')->name('admin.pages.category.createCategory');
Route::post('/admin/tao-danh-muc', 'AdminCategoryController@createCategory')->name('createCategory.post');
Route::get('/admin/danh-sach-danh-muc', 'AdminCategoryController@listCategory')->name('admin.pages.category.listCategory');
Route::get('/admin/chinh-sua-danh-muc/{slugCategory}', 'AdminCategoryController@formEditCategory')->name('admin.pages.category.editCategory');
Route::post('/admin/chinh-sua-danh-muc', 'AdminCategoryController@editCategory')->name('editCategory.post');
Route::get('/admin/xoa-danh-muc/{slugCategory}', 'AdminCategoryController@deleteCategory')->name('deleteCategory');

// Admin Genre
Route::get('/admin/the-loai', 'AdminGenreController@formCreateGenre')->name('admin.pages.genre.createGenre');
Route::post('/admin/tao-the-loai', 'AdminGenreController@createGenre')->name('createGenre.post');
Route::get('/admin/danh-sach-the-loai', 'AdminGenreController@listGenre')->name('admin.pages.genre.listGenre');
Route::get('/admin/chinh-sua-the-loai/{slugGenre}', 'AdminGenreController@formEditGenre')->name('admin.pages.genre.editGenre');
Route::post('/admin/chinh-sua-the-loai', 'AdminGenreController@editGenre')->name('editGenre.post');
Route::get('/admin/xoa-the-loai/{slugGenre}', 'AdminGenreController@deleteGenre')->name('deleteGenre');

// Admin Country
Route::get('/admin/quoc-gia', 'AdminCountryController@formCreateCountry')->name('admin.pages.country.createCountry');
Route::post('/admin/tao-quoc-gia', 'AdminCountryController@createCountry')->name('createCountry.post');
Route::get('/admin/danh-sach-quoc-gia', 'AdminCountryController@listCountry')->name('admin.pages.country.listCountries');
Route::get('/admin/chinh-sua-quoc-gia/{slugCountry}', 'AdminCountryController@formEditCountry')->name('admin.pages.country.editCountry');
Route::post('/admin/chinh-sua-quoc-gia', 'AdminCountryController@editCountry')->name('editCountry.post');
Route::get('/admin/xoa-quoc-gia/{slugCountry}', 'AdminCountryController@deleteCountry')->name('deleteCountry');

// Admin Movie
Route::get('/admin/phim', 'AdminMovieController@formCreateMovie')->name('admin.pages.movie.createMovie');
Route::post('/admin/tao-phim', 'AdminMovieController@createMovie')->name('createMovie.post');
Route::get('/admin/danh-sach-phim', 'AdminMovieController@listMovie')->name('admin.pages.movie.listMovies');
Route::get('/admin/chinh-sua-phim/{slugMovie}', 'AdminMovieController@formEditMovie')->name('admin.pages.movie.editMovie');
Route::post('/admin/chinh-sua-phim', 'AdminMovieController@editMovie')->name('editMovie.post');
Route::get('/admin/xoa-phim/{slugMovie}', 'AdminMovieController@deleteMovie')->name('deleteMovie');

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home'); */
