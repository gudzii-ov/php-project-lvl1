<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runEngine;

function isEven($num)
{
    return $num % 2 === 0;
}

function run()
{
    $message = 'Answer "yes" if number is even otherwise answer "no".';

    $getGameData = function () {
        $question = rand(0, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        $gameData = ['question' => "$question", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
