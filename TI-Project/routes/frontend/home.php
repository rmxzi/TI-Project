<?php 


     //HomePage
    Route::group(['namespace' => 'Home'], function () {
      Route::get('/' ,'HomePageController@Welcome'); 
      Route::get('/upload-file' ,'HomePageController@UploadFile'); 
      Route::post('/upload' ,'HomePageController@Upload'); 

    });


?>