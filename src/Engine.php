<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function runEngine(string $message, $getGameData)
{
    line("Welcome to the Brain Games!\n");
    line("%s\n", $message);
    $userName = prompt('May I have your name?');
    line("Hello, %s!\n", $userName);

    $count = 0;
    $gamesCount = 3;

    do {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $getGameData();
        
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($userAnswer !== $rightAnswer) {
            line("\n'%s' is wrong answer ;(. Correct answer is '%s'.", $userAnswer, $rightAnswer);
            return;
        } else {
            line("Correct!\n");
            $count += 1;
        }

        line("Congratulations, %s!", $userName);
    } while ($count < $gamesCount);
}
