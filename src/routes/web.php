<?php

use Illuminate\Http\Request;
use Demo\Sendmaildemo\Http\Controllers\SendMailController;

Route::group(['namespace'=>'Demo\Sendmaildemo\Http\Controllers'], function () {
    Route::get('/dashboard', [SendMailController::class, 'index'])->name('index');

    Route::post('sendmail', [SendMailController::class, 'sendmail'])->name('sendmail');
});
