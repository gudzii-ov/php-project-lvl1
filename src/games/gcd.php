<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;

function getGcd($num1, $num2)
{
    return $num2 !== 0 ? getGcd($num2, $num1 % $num2) : $num1;
}

function run()
{
    $message = "Find the greatest common divisor of given numbers.\n";

    $getGameData = function () {
        $num1 = rand(0, 50);
        $num2 = rand(0, 50);
        $rightAnswer = getGcd($num1, $num2);

        $gameData = ['question' => "$num1 $num2", 'rightAnswer' => "$rightAnswer"];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
