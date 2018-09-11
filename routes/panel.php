<?php

Route::prefix('panel')->group(function () {
    Route::match(['get', 'post'], '/', 'MiControlador@usuarios');
    Route::match(['get', 'post', 'patch'], 'saludar', 'MiControlador@usuarios')->name('panel.saludos');
});
