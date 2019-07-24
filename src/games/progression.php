<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runEngine;

const MESSAGE = 'What number is missing in the progression?';

function generateProgression($length)
{
    $firstNum = rand(0, 10);
    $step = rand(0, 9);

    $progression = array($firstNum);

    $i = 1;

    do {
        $progression[$i] = $firstNum + $step * $i;
        $i += 1;
    } while ($i < $length);

    return $progression;
}

function run()
{
    $getGameData = function () {
        $progressionLength = 10;

        $gameData = array();

        $progression = generateProgression($progressionLength);
        $hiddenNumberIndex = rand(0, $progressionLength - 1);
        $hiddenNumber = $progression[$hiddenNumberIndex];

        $preparedProgression = array_map(function ($item) use ($hiddenNumber) {
            return $item === $hiddenNumber ? ".." : $item;
        }, $progression);

        $question = implode(" ", $preparedProgression);
        
        $gameData = ['question' => $question, 'rightAnswer' => "$hiddenNumber"];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
