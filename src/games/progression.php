<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\runEngine;

const MESSAGE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function generateProgression($firstItem, $step, $length)
{
    $progression = array($firstItem);

    for ($i = 1; $i < $length; $i++) {
        $progression[$i] = $firstItem + $step * $i;
    };

    return $progression;
}

function runProgression()
{
    $getGameData = function () {

        $gameData = array();

        $progressionStart = rand(0, 10);
        $progressionStep = rand(0, 9);
        $progression = generateProgression($progressionStart, $progressionStep, PROGRESSION_LENGTH);

        $hiddenItemIndex = rand(0, PROGRESSION_LENGTH - 1);
        $hiddenItem = $progression[$hiddenItemIndex];

        $preparedProgression = array_map(function ($item) use ($hiddenItem) {
            return $item === $hiddenItem ? ".." : $item;
        }, $progression);

        $question = implode(" ", $preparedProgression);
        
        $gameData = [$question, "$hiddenItem"];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
