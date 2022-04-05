<?php

// All route names are prefixed with 'dashboard'.
Route::group(['middleware' => 'admin'  ],function () {

    // Dashboard
    Route::group(['namespace' => 'Dashboard'], function () {
        Route::resource('/'  ,'DashboardController'); // Dashboard 
    });
     
    // Settings
    Route::group(['namespace' => 'Settings'], function () {
         Route::resource('settings'  ,'SettingsController'); //Settings 
    });


    // User Management
    Route::group(['namespace' => 'User'], function () {
        Route::get('users'         , 'UsersController@index')->name('users.index');
        Route::get('users/create'  , 'UsersController@create')->name('users.create');
        Route::post('users'        , 'UsersController@store')->name('users.store');
        Route::post('delete/users' , 'UsersController@DeleteUsers')->name('users.DeleteMuiltUser');
        // Specific User
        Route::group(['prefix' => 'users/{user}'], function () {
            // User
            Route::get('/'         , 'UsersController@show')->name('users.show');
            Route::get('edit'      , 'UsersController@edit')->name('users.edit');
            Route::patch('/'       , 'UsersController@update')->name('users.update');
            Route::DELETE('/'      , 'UsersController@destroy')->name('users.destroy');
        });
    });


    // Logout
    Route::group(['namespace' => 'Login'], function () {
        Route::get('/logout','LoginManagersController@Logout'); //Logout
    });

});