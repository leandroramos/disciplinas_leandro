<?php

Route::get('/','DisciplinaController@index');
Route::get('/disciplinas/create','DisciplinaController@create');
Route::get('/disciplinas/{disciplina}','DisciplinaController@show');
Route::post('/disciplinas', 'DisciplinaController@store');
