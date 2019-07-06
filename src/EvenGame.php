<?php

namespace BrainGames\EvenGame;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line("Welcome to the Brain Games!\n");
    line("Answer \"yes\" if number is even otherwise answer \"no\".\n");
    $userName = prompt('May I have your name?');
    line("Hello, %s!\n", $userName);

    $count = 0;

    do {
        $num = rand(0, 100);
        $trueAnswer = $num % 2 === 0 ? 'yes' : 'no';

        line("Question: %d", $num);
        $userAnswer = prompt("Your answer");

        if ($userAnswer !== $trueAnswer) {
            line("\n'%s' is wrong answer ;(. Correct answer is '%s'.", $userAnswer, $trueAnswer);
            return;
        } else {
            line("Correct!\n");
            $count += 1;
        }

        line("Congratulations, %s!", $userName);
    } while ($count < 3);
}
