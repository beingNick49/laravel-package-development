<?php

use Illuminate\Support\Facades\Route;
use cubed\calculator\CalculatorController;

Route::get('hello', function () {
    return response()->json(['message' => 'Hello from the calculator package!']);
});

Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
Route::get('multiply/{a}/{b}', [CalculatorController::class, 'multiply']);
Route::get('divide/{a}/{b}', [CalculatorController::class, 'divide']);
