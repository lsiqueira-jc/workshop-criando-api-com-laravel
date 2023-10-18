<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Agendacontroller;
use App\Http\Controllers\Tokencontroller;




Route::post('/',[Agendacontroller::class ,'Cadastrar']);

Route::get('/{id}',[Agendacontroller::class  ,'visualizar']);

Route::put('/',[Agendacontroller::class  ,'atualizar']);

Route::delete('/{id}',[Agendacontroller::class  ,'deletar']);


Route::group(['middleware' => ['JWTToken']], function () {
    Route::get('/',[Agendacontroller::class  ,'listar']);

});


Route::post('/logar',[Tokencontroller::class ,'index']);



