<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\runEngine;

const MESSAGE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    if ($num === 2) {
        return true;
    }

    $divisor = 2;

    do {
        if ($num % $divisor === 0) {
            return false;
        }

        $divisor += 1;
    } while ($divisor <= sqrt($num));

    return true;
}

function runPrime()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';

        $gameData = ["$question", $rightAnswer];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
