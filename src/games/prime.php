<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\runEngine;

const MESSAGE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    $square = sqrt($num);
    $divisor = 2;

    $result = true;

    do {
        if ($num % $divisor === 0) {
            $result = false;
            break;
        }

        $divisor += 1;
    } while ($divisor <= $square);

    return $result;
}

function runPrime()
{
    $getGameData = function () {
        $num = rand(0, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';

        $gameData = ['question' => "$num", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine(MESSAGE, $getGameData);
}
