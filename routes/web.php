<?php


use App\Http\Controllers\Admin\{BrandController, DashboardController};
use App\Http\Controllers\PostController;
use App\Livewire\Admin\Categories\{CategoryList};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    //return view('hello', ['date' => date('Y-m-d')]);
    $date = date('Y-m-d');
    return view('hello', compact('date'));
});
Route::get('/hello/{name}', function () {
    return 'Hello world!';
})->where('name', '[A-Za-z]+');
Route::get('/hello/{id?}', function (\Illuminate\Http\Request $request) {
    return "Your ID is $request->id !";
})->where('id', '[0-9]+');
Route::get('/hello/{name}/{id?}', function (\Illuminate\Http\Request $request) {
    return "Your ID is $request->id Name: $request->name!";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/about', 'App\Http\Controllers\AboutController')->name('about'); //invokable controller example

//Route::get('/posts', [PostController::class, 'index']);
Route::controller(PostController::class)->group(function () {
    Route::get('blog', 'index')->name('blog');
    Route::get('blog/{id}', 'view');
});

Route::get('/brands/{name?}', [\App\Http\Controllers\BrandsController::class, 'index']);
Route::get('/products/{brand_id}', [\App\Http\Controllers\ProductsController::class, 'index'])
    ->where(['brand_id', '[0-9]+']);
Route::get('/products/details/{id}', [\App\Http\Controllers\ProductsController::class, 'details'])
    ->where(['id' => '[0-9]+']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//Admin panel

Route::prefix('admin')->group(function () {
    Route::get('', DashboardController::class)->name('admin');

    //TODO свої спец маршрути розміщувати перед ресурсними маршрутами щоб не було накладок маршрутів.
    Route::controller(BrandController::class)->group(function () {
        Route::get('brands/trashed', [BrandController::class, 'trashed'])->name('brands.trashed');
        Route::post('brands/restore/{id}', [BrandController::class, 'restore'])->name('brands.restore')
            ->where('id', '[0-9]+');
        Route::delete('brands/force-destroy/{id}', [BrandController::class, 'forceDestroy'])->name('brands.forceDestroy')
            ->where('id', '[0-9]+');
    });

    Route::get('categories', CategoryList::class)->name('categories');

    Route::resource('brands', BrandController::class);
});
