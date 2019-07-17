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
        $expressionNum = rand(1, 3);

        switch ($expressionNum) {
            case 1:
                $gameData['question'] = "$num1 + $num2";
                $rightAnswer = $num1 + $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
            case 2:
                $gameData['question'] = "$num1 - $num2";
                $rightAnswer = $num1 - $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
            case 3:
                $gameData['question'] = "$num1 * $num2";
                $rightAnswer = $num1 * $num2;
                $gameData['rightAnswer'] = "$rightAnswer";
                break;
        }
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
