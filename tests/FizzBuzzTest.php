<?php declare(strict_types=1);

namespace MW\PhpTraining\Tests;

use MW\PhpTraining\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->fizzBuzz);
    }
}
