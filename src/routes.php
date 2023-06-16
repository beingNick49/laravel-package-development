<?php

use Illuminate\Support\Facades\Route;
use cubed\calculator\CalculatorController;

Route::get('hello', function () {
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
