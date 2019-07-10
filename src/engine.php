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

    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        ['question' => $question, 'rightAnswer' => $rightAnswer] = $getGameData();
        
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($userAnswer !== $rightAnswer) {
            line("\n'%s' is wrong answer ;(. Correct answer is '%s'.", $userAnswer, $rightAnswer);
            line("Let's try again, %s!", $userName);
            return;
        } else {
            line("Correct!\n");
            $count += 1;
        }

        line("Congratulations, %s!", $userName);
    };
}
