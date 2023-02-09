<?php

use App\Http\Controllers\TestamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/teste',function(){
  //  return "Teste ok";
//});

//Route::post('/testamento', [App\Http\Controllers\TestamentoController::class, 'store']);
Route::post('/testamento', 'App\Http\Controllers\TestamentoController@store');
Route::get('/testamento', 'App\Http\Controllers\TestamentoController@index');
Route::get('/testamento/{id}', 'App\Http\Controllers\TestamentoController@show');
Route::put('/testamento/{id}', 'App\Http\Controllers\TestamentoController@update');
Route::delete('/testamento/{id}', 'App\Http\Controllers\TestamentoController@destroy');


Route::post('/livro', 'App\Http\Controllers\LivroController@store');
Route::get('/livro', 'App\Http\Controllers\LivroController@index');
Route::get('/livro/{id}', 'App\Http\Controllers\LivroController@show');
Route::put('/livro/{id}', 'App\Http\Controllers\LivroController@update');
Route::delete('/livro/{id}', 'App\Http\Controllers\LivroController@destroy');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
