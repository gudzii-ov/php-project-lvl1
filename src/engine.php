<?php

namespace BrainGames\engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function runEngine(string $message, $getGameData)
{
    line("Welcome to the Brain Games!\n");
    line("%s\n", $message);
    $userName = prompt('May I have your name?');
    line("Hello, %s!\n", $userName);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $rightAnswer] = $getGameData();
        
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($userAnswer !== $rightAnswer) {
            line("\n'%s' is wrong answer ;(. Correct answer is '%s'.", $userAnswer, $rightAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
        
        line("Correct!\n");
    }

    line("Congratulations, %s!", $userName);
}
