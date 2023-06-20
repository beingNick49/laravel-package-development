<?php

namespace cubed\calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function operation($firstNumber, $secondNumber, $task)
    {
        return $firstNumber . $task . $secondNumber;
    }

    public function add($a, $b)
    {
        $result = $this->operation($a, $b, '+');

        return response()->json([
            'success' => true,
            'result' => $result
        ]);
    }

    public function subtract($a, $b)
    {
        $result = $this->operation($a, $b, '-');

        return response()->json([
            'success' => true,
            'result' => $result
        ]);
    }

    public function multiply($a, $b)
    {
        $result = $this->operation($a, $b, '*');

        return response()->json([
            'success' => true,
            'result' => $result
        ]);
    }

    public function divide($a, $b)
    {
        $result = $this->operation($a, $b, '/');

        return response()->json([
            'success' => true,
            'result' => $result
        ]);
    }
}
