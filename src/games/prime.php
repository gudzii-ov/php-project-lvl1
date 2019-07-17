<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runEngine;

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

function run()
{
    $message = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $getGameData = function () {
        $num = rand(0, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';

        $gameData = ['question' => "$num", 'rightAnswer' => $rightAnswer];
        
        return $gameData;
    };

    runEngine($message, $getGameData);
}
