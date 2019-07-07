<?php

namespace BrainGames\Common;

function getGcd($num1, $num2)
{
    return $num2 !== 0 ? getGcd($num2, $num1 % $num2) : $num1;
}

function generateProgression($length, $maxStep)
{
    $firstNum = rand(0, 10);
    $step = rand(0, $maxStep);

    $progression = array($firstNum);

    $i = 1;

    do {
        $progression[$i] = $firstNum + $step * $i;
        $i += 1;
    } while ($i < $length);

    return $progression;
}

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
