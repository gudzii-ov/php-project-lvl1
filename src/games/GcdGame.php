<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Common\gcd;
use function BrainGames\Engine\runEngine;

function run()
{
    $message = "Find the greatest common divisor of given numbers.\n";

    $getGameData = function () {
        $gameData = array();
        $num1 = rand(0, 50);
        $num2 = rand(0, 50);
        $rightAnswer = gcd($num1, $num2);

        $gameData[0] = "$num1 $num2";
        
        $gameData[1] = "$rightAnswer";
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}