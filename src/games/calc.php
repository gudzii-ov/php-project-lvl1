<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\runEngine;

const MESSAGE = 'What is the result of the expression?';

function runCalc()
{
    $getGameData = function () {
        $gameData = array();
        
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);

        $operations = ["+", "-", "*"];
        $operationIndex = rand(1, count($operations)) - 1;
        $operation = $operations[$operationIndex];

        switch ($operation) {
            case "+":
                $gameData['question'] = "$num1 + $num2";
                $rightAnswer = $num1 + $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
            case "-":
                $gameData['question'] = "$num1 - $num2";
                $rightAnswer = $num1 - $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
            case "*":
                $gameData['question'] = "$num1 * $num2";
                $rightAnswer = $num1 * $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
        }
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
