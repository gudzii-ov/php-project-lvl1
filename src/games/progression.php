<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runEngine;
use function BrainGames\Common\generateProgression;

function run()
{
    $message = "What number is missing in the progression?\n";

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
