<?php

namespace BrainGames\games\even;

use function BrainGames\engine\runEngine;

const MESSAGE = 'Answer "yes" if number is even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function runEven()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        $gameData = ["$question", $rightAnswer];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
