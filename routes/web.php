<?php
use App\Http\Controllers\LanguageController;
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
Route::redirect('/', '/login');
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/','DashboardController@index')->name('admin.dashboard');
        // Dates
        Route::resource('dates','DateController');
        Route::delete('soft/dates/{date}', 'DateController@forceDestroy')->name('dates.force.destroy');
        Route::put('soft/restore/{date}', 'DateController@restore')->name('dates.restore');
    });
    
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');

Auth::routes();