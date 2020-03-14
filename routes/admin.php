<?php

Route::group(['prefix' => 'personnel'], function () {
    Route::module('authors');
});

Route::module('categories');

Route::module('artists');

Route::module('photographers');
