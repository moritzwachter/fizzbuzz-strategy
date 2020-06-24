<?php

namespace MW\PhpTraining;

use MW\PhpTraining\FizzBuzz\FizzBuzz;

class Application
{
    public function run()
    {
        $fizzBuzz = new FizzBuzz();
        $results = $fizzBuzz->doFizzBuzz(30);

        $fizzBuzz->render($results);
    }
}
