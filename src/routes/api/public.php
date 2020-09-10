<?php

Route::group(['prefix' => 'public', 'as' => 'public.'], function () {

    Route::group(['prefix' => 'characters', 'as' => 'characters.'], function () {
        Route::get('/', ['uses' => 'Api\CharactersController@all', 'as' => 'all']);
        Route::get('/{characterId}', ['uses' => 'Api\CharactersController@getById', 'as' => 'id']);
        Route::get('/{characterId}/comics', ['uses' => 'Api\CharactersController@comics', 'as' => 'comics']);
        Route::get('/{characterId}/events', ['uses' => 'Api\CharactersController@events', 'as' => 'events']);
        Route::get('/{characterId}/series', ['uses' => 'Api\CharactersController@series', 'as' => 'series']);
        Route::get('/{characterId}/stories', ['uses' => 'Api\CharactersController@stories', 'as' => 'stories']);
    });

});