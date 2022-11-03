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

Route::group(['namespace' => 'App\Http\Controllers\Api\V1'],function() {
    Route::get('/notebooks/all','GetAllNotebooksController')->name('get_all_notebooks');
    Route::get('/notebooks/{notebook}','GetNotebookController')->name('get_notebook');
    Route::post('/notebooks/create','CreateNotebookController')->name('create_notebook');
    Route::patch('/notebooks/update/{notebook}','UpdateNotebookController')->name('update_notebook');
    Route::delete('/notebooks/delete/{notebook}','DeleteNotebookController')->name('delete_notebook');
});
