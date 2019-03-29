<?php


Route::group(['namespace'=>'testnamespace\contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});
