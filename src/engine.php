<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function game(string $game, mixed $params = null): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May i have your name?');
    line("Hello, {$name}!");

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $count = 0;

    while($count < 3) {
        if ($game === 'even') {
            $question = random_int(1, 60);
        } elseif ($game === 'calc') {
            $numb1 = random_int(20, 60);
            $numb2 = random_int(1, 10);
            $operation = $params[array_rand($params)];
            $question = $numb1 . $operation . $numb2;
        } elseif ($game === 'gcd') {
            $numb1 = random_int(10, 20);
            $numb2 = random_int(1, 10);
            $question = $numb1 . ' ' . $numb2;
        }

        line("Question: {$question}");
        $answer = prompt("Your answer: ");


        if ($game === 'even') {
            [$y, $n] = $params;
            $correct = $y . ' or ' . $n;
            $valid = in_array($answer, $params);
            $check = $question % 2 === 0;
        } elseif ($game === 'calc') {
            $correct = 'number';
            $valid = is_numeric($answer);

            if ($operation === '*') {
                $correctAnsw = $numb1 * $numb2;
            } elseif ($operation === '+') {
                $correctAnsw = $numb1 + $numb2;
            } elseif ($operation === '-') {
                $correctAnsw = $numb1 - $numb2;
            }

            $check = is_numeric($correctAnsw);
        } elseif ($game === 'gcd') {
            $valid = is_numeric($answer);
            $correct = 'number';
            $valid = is_numeric($answer);
            $correctAnsw = gmp_gcd($numb1, $numb2);
            $check = is_numeric($correctAnsw);
        }
        if (!$valid) {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was {$correct}. 
                Let's try again, {$name}!"
            );
            die();
        }

        if ($check) {
            if ($game === 'even') {
                $correctAnsw = $y;
            } elseif ($game === 'calc' || $game === 'gcd') {
                $answer = intval($answer);
            }

            if ($answer == $correctAnsw) {
                line('Correct!');
                $count++;
            } else {
                line(
                    "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnsw}'. 
                    Let's try again, {$name}!"
                );
                die();
            }
        } elseif (!$check) {
            if ($game === 'even') {
                $correctAnsw = $n;
            } elseif ($game === 'calc' || $game === 'gcd') {
                $answer = intval($answer);
            }

            if ($answer == $correctAnsw) {
                line('Correct!');
                $count++;
            } else {
                line(
                    "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnsw}'. 
                    Let's try again, {$name}!"
                );
                die();
            }
        }
    }
    line("Congratulations, {$name}!");
}
