<?php declare(strict_types=1);

namespace MW\PhpTraining\FizzBuzz;

class FizzBuzz
{
    public function play(int $limit): array
    {
        $result = [];

        for ($i = 1; $i <= $limit; $i++) {
            if ($this->isFizzBuzz($i)) {
                $result[] = 'FizzBuzz';
            } else if ($this->isFizz($i)) {
                $result[] = 'Fizz';
            } else if ($this->isBuzz($i)) {
                $result[] = 'Buzz';
            } else {
                $result[] = (string) $i;
            }
        }

        return $result;
    }

    public function render(array $results): void
    {
        foreach ($results as $result) {
            echo $result . PHP_EOL;
        }
    }

    public function isFizz(int $input): bool
    {
        return $input % 3 === 0;
    }

    public function isBuzz(int $input): bool
    {
        return $input % 5 === 0;
    }

    public function isFizzBuzz(int $input): bool
    {
        return $input % 15 === 0;
    }
}
