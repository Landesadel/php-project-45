<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function evenGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May i have your name?');
    line("Hello, {$name}!");

    line('Answer "yes" if the number is even, otherwise answer "no".');

    [$y, $n] = ['yes', 'no'];
    $count = 0;

    while($count < 3) {
        $randNumber = random_int(1, 50);

        line("Question: {$randNumber}");
        $answer = prompt("Your answer: ");

        if (!in_array($answer, ['yes', 'no'])) {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$y}' or '{$n}'. 
                Let's try again, {$name}!"
            );
            die();
        }

        if ($randNumber % 2 === 0) {
            if ($answer === $y) {
                line('Correct!');
                $count++;
            } else {
                line(
                    "'{$answer}' is wrong answer ;(. Correct answer was '{$y}'. 
                    Let's try again, {$name}!"
                );
                die();
            }
        } elseif ($randNumber % 2 !== 0) {
            if ($answer === $n) {
                line('Correct!');
                $count++;
            } else {
                line(
                    "'{$answer}' is wrong answer ;(. Correct answer was '{$n}'. 
                    Let's try again, {$name}!"
                );
                die();
            }
        }

    }

    line("Congratulations, {$name}!");
}
