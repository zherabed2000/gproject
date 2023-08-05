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

Route::get('/migrate', function () {
    \Artisan::call('migrate');
    dd('migrated!');
});


Route::get('/login', function () {
    return view('sign-in');
})->name('login');
Route::post('/main/checklogin', [MainController::class, 'checklogin'])->name('checklogin');
Route::get('/register', function () {
    return view('sign-up');
})->name('register');
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


    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {

        Route::get('/', [CategoriesController::class, 'index'])->name('index');

        Route::group(['prefix' => 'create'], function () {
            Route::get('/', [CategoriesController::class, 'create'])->name('create');
            Route::post('/', [CategoriesController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', [CategoriesController::class, 'edit'])->name('edit');
            Route::put('/edit', [CategoriesController::class, 'update'])->name('update');
            Route::delete('/', [CategoriesController::class, 'destroy'])->name('destroy');
        });
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

        Route::get('/', [UsersController::class, 'index'])->name('index');

        Route::group(['prefix' => 'create'], function () {
            Route::get('/', [UsersController::class, 'create'])->name('create');
            Route::post('/', [UsersController::class, 'store'])->name('store');
        });
        Route::group(['prefix' => '{id}'], function () {
            Route::get('/edit', [UsersController::class, 'edit'])->name('edit');
            Route::put('/edit', [UsersController::class, 'update'])->name('update');
            Route::delete('/', [UsersController::class, 'destroy'])->name('destroy');
        });
    });





});

Route::get('/faq', function () {
    return view('faq');
});


