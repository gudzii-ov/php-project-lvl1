<?php

namespace BrainGames\Games\CalculatorGame;

use function BrainGames\Engine\runEngine;

function run()
{
    $message = "What is the result of the expression?\n";

    $getGameData = function () {
        $gameData = array();
        
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $expressionNum = rand(1, 3);

        switch ($expressionNum) {
            case 1:
                $gameData[0] = "$num1 + $num2";
                $rightAnswer = $num1 + $num2;
                $gameData[1] = "$rightAnswer";
                break;
            case 2:
                $gameData[0] = "$num1 - $num2";
                $rightAnswer = $num1 - $num2;
                $gameData[1] = "$rightAnswer";
                break;
            case 3:
                $gameData[0] = "$num1 * $num2";
                $rightAnswer = $num1 * $num2;
                $gameData[1] = "$rightAnswer";
                break;
            default:
                $gameData[0] = "Question generation error!";
        }
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
