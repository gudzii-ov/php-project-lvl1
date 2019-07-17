<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runEngine;

function run()
{
    $message = 'What is the result of the expression?';

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

    runEngine($message, $getGameData);
}
