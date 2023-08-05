<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\FrindController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/AddAFriend', function () {return view('addfrind');});

Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});


Route::get('/login', function () {return view('sign-in');})->name('login');
Route::post('/main/checklogin', [MainController::class, 'checklogin'])->name('checklogin');
Route::get('/register', function () {return view('sign-up');})->name('register');
Route::post('/post/register', [MainController::class, 'registerPost'])->name('registerPost');


// Route::get('main/successlogin', 'MainController@successlogin');
// Route::get('main/logout', 'MainController@logout');


Route::group(['middleware' => ['auth']], function () {


Route::get('/AddAFriend', [FrindController::class, 'addFrind'])->name('addFrind');
Route::get('/AddAFriendNew', [FrindController::class, 'addFrindNew'])->name('addFrindNew');

Route::get('/AddAFriend/{id}', [FrindController::class, 'addFrindPost'])->name('addFrindPost');


Route::get('/BlockedFriend/{id}', [FrindController::class, 'blokedFrind'])->name('blokedFrind');



Route::get('/', [NotesController::class, 'index'])->name('index');
Route::get('/AddNote', [NotesController::class, 'add'])->name('note.add');
Route::get('/Trash', [NotesController::class, 'trash']);
Route::get('/Favorite', [NotesController::class, 'favorites']);
Route::get('/EditNote/{id}', [NotesController::class, 'edit']);

Route::post('/note/store', [NotesController::class, 'store'])->name('note.store');
Route::post('/note/favourite/{id}', [NotesController::class, 'favourite']);
Route::post('/note/update/{id}', [NotesController::class, 'update']);
Route::post('/note/delete/{id}', [NotesController::class, 'destroy']);
Route::post('/note/recover/{id}', [NotesController::class, 'recover']);
Route::post('/note/force-delete/{id}', [NotesController::class, 'forceDestroy']);


Route::get('/categories', [CategoriesController::class, 'index'])->name('category.index');
Route::get('/add-categories', function () {return view('add-category');});
Route::post('/category/store', [CategoriesController::class, 'store'])->name('category.store');
Route::post('/category/delete/{id}', [CategoriesController::class, 'destroy']);


Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/add-users', function () {return view('add-users');});
Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
Route::post('/users/delete/{id}', [UsersController::class, 'destroy']);


});

Route::get('/faq', function () {return view('faq');});


