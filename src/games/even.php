<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runEngine;

const MESSAGE = 'Answer "yes" if number is even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function run()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        $gameData = ['question' => "$question", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
