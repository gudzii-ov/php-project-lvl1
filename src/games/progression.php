<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runEngine;

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
    $message = 'What number is missing in the progression?';

    $getGameData = function () {
        $progressionLength = 10;

        $gameData = array();

        $progression = generateProgression($progressionLength);
        $numberToHideIndex = rand(0, $progressionLength - 1);
        $numberToHide = $progression[$numberToHideIndex];

        $preparedProgression = array_map(function ($item) use ($numberToHide) {
            return $item === $numberToHide ? ".." : $item;
        }, $progression);

        $question = implode(" ", $preparedProgression);
        
        $gameData = ['question' => $question, 'rightAnswer' => "$numberToHide"];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
