<?php declare(strict_types=1);

namespace MW\PhpTraining\FizzBuzz;

class FizzBuzz
{
    public function play(int $limit): array
    {
        return [];
    }

    public function render(array $results): void
    {
        echo "";
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
