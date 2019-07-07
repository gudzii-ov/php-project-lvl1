<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Engine\runEngine;
use function BrainGames\Common\isPrime;

function run()
{
    $message = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

    $getGameData = function () {
        $gameData = array();
        
        $num = rand(0, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';

        $gameData[0] = "$num";
        $gameData[1] = "$rightAnswer";
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
