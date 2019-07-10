<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runEngine;
use function BrainGames\Common\isPrime;

function run()
{
    $message = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

    $getGameData = function () {
        $num = rand(0, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';

        $gameData = ['question' => "$num", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
