<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\runEngine;

function run()
{
    $message = "Answer \"yes\" if number is even otherwise answer \"no\".\n";

    $getGameData = function () {
        $num = rand(0, 100);
        $rightAnswer = $num % 2 === 0 ? 'yes' : 'no';
        $gameData = ['question' => "$num", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
