<?php

Route::get('/','DisciplinaController@index');
Route::get('/disciplinas/create','DisciplinaController@create');
Route::get('/disciplinas/{disciplina}','DisciplinaController@show');
Route::post('/disciplinas', 'DisciplinaController@store');
Route::get('/disciplinas/{disciplina}/edit','DisciplinaController@edit');
Route::patch('/disciplinas/{disciplina}','DisciplinaController@update');
Route::delete('/disciplinas/{disciplina}','DisciplinaController@destroy');
