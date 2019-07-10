<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;
use function BrainGames\Common\getGcd;

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
