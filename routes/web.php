<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function() {
    $data = [
        'title' => 'Hi there from Jibbol IT Solution',
        'body' => 'Am sending you this message with a lot of love and expression'
    ];

    Mail::send('emails.test', $data, function($message) {
        $message->to('ajibolarilwan14@gmail.com')->subject('Hello there, hope you\'re good?');
    });

});


