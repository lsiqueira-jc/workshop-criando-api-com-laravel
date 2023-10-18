<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Agendacontroller;


Route::get('/',[Agendacontroller::class  ,'listar']);

Route::post('/',[Agendacontroller::class ,'Cadastrar']);

Route::get('/{id}',[Agendacontroller::class  ,'visualizar']);

Route::put('/',[Agendacontroller::class  ,'atualizar']);

Route::delete('/{id}',[Agendacontroller::class  ,'deletar']);


Route::group(['middleware' => ['TokenMiddleware']], function () {
});


