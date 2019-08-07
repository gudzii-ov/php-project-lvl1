<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\runEngine;

const MESSAGE = 'What is the result of the expression?';
const OPERATIONS = ["+", "-", "*"];

function runCalc()
{
    $getGameData = function () {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);

        $operation = OPERATIONS[rand(1, count(OPERATIONS)) - 1];

        $question = "$num1 $operation $num2";

        switch ($operation) {
            case "+":
                $rightAnswer = $num1 + $num2;
                break;
            case "-":
                $rightAnswer = $num1 - $num2;
                break;
            case "*":
                $rightAnswer = $num1 * $num2;
                break;
        }

        $gameData = [$question, (string) $rightAnswer];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
