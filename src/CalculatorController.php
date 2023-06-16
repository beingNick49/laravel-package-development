<?php

namespace cubed\calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;

        return ['result' => $result];
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;

        return ['result' => $result];
    }

    public function multiply($a, $b)
    {
        $result = $a * $b;

        return ['result' => $result];
    }

    public function divide($a, $b)
    {
        $result = $a / $b;

        return ['result' => $result];
    }
}
