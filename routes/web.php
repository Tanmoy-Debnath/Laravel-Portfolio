<?php



Route::get('/',[
    'uses' => 'MessageController@home',
    'as' => '/'
]);
Route::get('/message/show',[
    'uses' => 'MessageController@ShowMessage',
    'as' => 'show-message'
]);


Route::post('/message-send/successfully/',[
    'uses' => 'MessageController@saveMessage',
    'as' => 'message-send'
]);

Route::get('/message-delete/successfully/{id}',[
    'uses' => 'MessageController@deleteMessage',
    'as' => 'delete-message'
]);







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
