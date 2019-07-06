<?php

namespace BrainGames\Games\EvenGame;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Engine\runEngine;

function run()
{
    $message = "Answer \"yes\" if number is even otherwise answer \"no\".\n";

    $getGameData = function ()
    {
        $gameData = array();
        $gameData[] = rand(0, 100);
        $gameData[] = $gameData[0] % 2 === 0 ? 'yes' : 'no';
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}