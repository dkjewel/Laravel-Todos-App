<?php


Route::get('/', function () {
    return view('todo.create');
});

Route::resource('todo','TodoController');

Route::get('todo/{todo}/complete', 'TodoController@complete')->name('todo.complete');
