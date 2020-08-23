<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| Items endpoints
|--------------------------------------------------------------------------
 */
Route::name('items.')->prefix('items')->group(function () {
    Route::get('/', 'ItemsControllerAPI@index')->name('index');
    Route::post('/', 'ItemsControllerAPI@store')->name('create');
    Route::get('/{items}', 'ItemsControllerAPI@show')->name('show');
    Route::patch('/{items}', 'ItemsControllerAPI@update')->name('update');
    Route::delete('/{items}', 'ItemsControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Tasks endpoints
|--------------------------------------------------------------------------
 */
Route::name('tasks.')->prefix('tasks')->group(function () {
    Route::get('/', 'TasksControllerAPI@index')->name('index');
    Route::post('/', 'TasksControllerAPI@store')->name('create');
    Route::get('/{tasks}', 'TasksControllerAPI@show')->name('show');
    Route::patch('/{tasks}', 'TasksControllerAPI@update')->name('update');
    Route::delete('/{tasks}', 'TasksControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Orders endpoints
|--------------------------------------------------------------------------
 */
Route::name('orders.')->prefix('orders')->group(function () {
    Route::get('/', 'OrdersControllerAPI@index')->name('index');
    Route::post('/', 'OrdersControllerAPI@store')->name('create');
    Route::get('/{orders}', 'OrdersControllerAPI@show')->name('show');
    Route::patch('/{orders}', 'OrdersControllerAPI@update')->name('update');
    Route::delete('/{orders}', 'OrdersControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Reports endpoints
|--------------------------------------------------------------------------
 */
Route::name('reports.')->prefix('reports')->group(function () {
    Route::get('/', 'ReportsControllerAPI@index')->name('index');
    Route::post('/', 'ReportsControllerAPI@store')->name('create');
    Route::get('/{reports}', 'ReportsControllerAPI@show')->name('show');
    Route::patch('/{reports}', 'ReportsControllerAPI@update')->name('update');
    Route::delete('/{reports}', 'ReportsControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Stores endpoints
|--------------------------------------------------------------------------
 */
Route::name('stores.')->prefix('stores')->group(function () {
    Route::get('/', 'StoresControllerAPI@index')->name('index');
    Route::post('/', 'StoresControllerAPI@store')->name('create');
    Route::get('/{stores}', 'StoresControllerAPI@show')->name('show');
    Route::patch('/{stores}', 'StoresControllerAPI@update')->name('update');
    Route::delete('/{stores}', 'StoresControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Address endpoints
|--------------------------------------------------------------------------
 */
Route::name('addresses.')->prefix('addresses')->group(function () {
    Route::get('/', 'AddressControllerAPI@index')->name('index');
    Route::post('/', 'AddressControllerAPI@store')->name('create');
    Route::get('/{address}', 'AddressControllerAPI@show')->name('show');
    Route::patch('/{address}', 'AddressControllerAPI@update')->name('update');
    Route::delete('/{address}', 'AddressControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Users endpoints
|--------------------------------------------------------------------------
 */
Route::name('users.')->prefix('users')->group(function () {
    Route::get('/', 'UsersControllerAPI@index')->name('index');
    Route::post('/', 'UsersControllerAPI@store')->name('create');
    Route::get('/{users}', 'UsersControllerAPI@show')->name('show');
    Route::patch('/{users}', 'UsersControllerAPI@update')->name('update');
    Route::delete('/{users}', 'UsersControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Provinces endpoints
|--------------------------------------------------------------------------
 */
Route::name('provinces.')->prefix('provinces')->group(function () {
    Route::get('/', 'ProvincesControllerAPI@index')->name('index');
    Route::post('/', 'ProvincesControllerAPI@store')->name('create');
    Route::get('/{provinces}', 'ProvincesControllerAPI@show')->name('show');
    Route::patch('/{provinces}', 'ProvincesControllerAPI@update')->name('update');
    Route::delete('/{provinces}', 'ProvincesControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| TasksQuestions endpoints
|--------------------------------------------------------------------------
 */
Route::name('tasks-questions.')->prefix('tasks-questions')->group(function () {
    Route::get('/', 'TasksQuestionsControllerAPI@index')->name('index');
    Route::post('/', 'TasksQuestionsControllerAPI@store')->name('create');
    Route::get('/{tasksQuestions}', 'TasksQuestionsControllerAPI@show')->name('show');
    Route::patch('/{tasksQuestions}', 'TasksQuestionsControllerAPI@update')->name('update');
    Route::delete('/{tasksQuestions}', 'TasksQuestionsControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| TasksQuestionsAnswers endpoints
|--------------------------------------------------------------------------
 */
Route::name('tasks-questions-answers.')->prefix('tasks-questions-answers')->group(function () {
    Route::get('/', 'TasksQuestionsAnswersControllerAPI@index')->name('index');
    Route::post('/', 'TasksQuestionsAnswersControllerAPI@store')->name('create');
    Route::get('/{tasksQuestionsAnswers}', 'TasksQuestionsAnswersControllerAPI@show')->name('show');
    Route::patch('/{tasksQuestionsAnswers}', 'TasksQuestionsAnswersControllerAPI@update')->name('update');
    Route::delete('/{tasksQuestionsAnswers}', 'TasksQuestionsAnswersControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Statuses endpoints
|--------------------------------------------------------------------------
 */
Route::name('statuses.')->prefix('statuses')->group(function () {
    Route::get('/', 'StatusesControllerAPI@index')->name('index');
    Route::post('/', 'StatusesControllerAPI@store')->name('create');
    Route::get('/{statuses}', 'StatusesControllerAPI@show')->name('show');
    Route::patch('/{statuses}', 'StatusesControllerAPI@update')->name('update');
    Route::delete('/{statuses}', 'StatusesControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Brands endpoints
|--------------------------------------------------------------------------
 */
Route::name('brands.')->prefix('brands')->group(function () {
    Route::get('/', 'BrandsControllerAPI@index')->name('index');
    Route::post('/', 'BrandsControllerAPI@store')->name('create');
    Route::get('/{brands}', 'BrandsControllerAPI@show')->name('show');
    Route::patch('/{brands}', 'BrandsControllerAPI@update')->name('update');
    Route::delete('/{brands}', 'BrandsControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Images endpoints
|--------------------------------------------------------------------------
 */
Route::name('images.')->prefix('images')->group(function () {
    Route::get('/', 'ImagesControllerAPI@index')->name('index');
    Route::post('/', 'ImagesControllerAPI@store')->name('create');
    Route::get('/{images}', 'ImagesControllerAPI@show')->name('show');
    Route::patch('/{images}', 'ImagesControllerAPI@update')->name('update');
    Route::delete('/{images}', 'ImagesControllerAPI@destroy')->name('destroy');
});

