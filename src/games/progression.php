<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\runEngine;

const MESSAGE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

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

function runProgression()
{
    $getGameData = function () {

        $gameData = array();

        $progression = generateProgression(PROGRESSION_LENGTH);
        $hiddenItemIndex = rand(0, PROGRESSION_LENGTH - 1);
        $hiddenItem = $progression[$hiddenItemIndex];

        $preparedProgression = array_map(function ($item) use ($hiddenItem) {
            return $item === $hiddenItem ? ".." : $item;
        }, $progression);

        $question = implode(" ", $preparedProgression);
        
        $gameData = ['question' => $question, 'rightAnswer' => "$hiddenItem"];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
