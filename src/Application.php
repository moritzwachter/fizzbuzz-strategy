<?php declare(strict_types=1);

namespace MW\PhpTraining;

use MW\PhpTraining\FizzBuzz\FizzBuzz;

class Application
{
    public function run(): void
    {
        $fizzBuzz = new FizzBuzz();
        $results = $fizzBuzz->play(30);

        $fizzBuzz->render($results);
    }
}
