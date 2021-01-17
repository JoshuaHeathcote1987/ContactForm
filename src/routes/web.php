<?php

    // CoteHeath\contactform\src\routes\web.php
    
    Route::group(['namespace' => 'CoteHeath\ContactForm\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });

?>