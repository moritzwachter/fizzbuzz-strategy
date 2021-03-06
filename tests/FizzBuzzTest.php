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

    public function testConstructor(): void
    {
        $this->assertInstanceOf(FizzBuzz::class, $this->fizzBuzz);
    }

    /**
     * @dataProvider isFizzDataProvider
     *
     * @param $input
     * @param $expectedIsFizz
     */
    public function testIsFizz(int $input, bool $expectedIsFizz): void
    {
        $actual = $this->fizzBuzz->isFizz($input);
        $this->assertSame($expectedIsFizz, $actual);
    }

    public function isFizzDataProvider(): array
    {
        return [
            [0, true],
            [1, false],
            [2, false],
            [5, false],
            [11, false],
            [55, false],
            [3, true],
            [6, true],
            [15, true],
            [30, true],
            [33, true],
        ];
    }

    /**
     * @dataProvider isBuzzDataProvider
     *
     * @param $input
     * @param $expectedIsBuzz
     */
    public function testIsBuzz(int $input, bool $expectedIsBuzz): void
    {
        $actual = $this->fizzBuzz->isBuzz($input);
        $this->assertSame($expectedIsBuzz, $actual);
    }

    public function isBuzzDataProvider(): array
    {
        return [
            [0, true],
            [1, false],
            [2, false],
            [3, false],
            [11, false],
            [33, false],
            [5, true],
            [10, true],
            [55, true],
            [15, true],
            [30, true],
        ];
    }
    /**
     * @dataProvider isFizzBuzzDataProvider
     *
     * @param $input
     * @param $expectedIsFizzBuzz
     */
    public function testIsFizzBuzz(int $input, bool $expectedIsFizzBuzz): void
    {
        $actual = $this->fizzBuzz->isFizzBuzz($input);
        $this->assertSame($expectedIsFizzBuzz, $actual);
    }

    public function isFizzBuzzDataProvider(): array
    {
        return [
            [0, true],
            [1, false],
            [3, false],
            [11, false],
            [15, true],
            [30, true],
            [45, true],
            [450, true],
        ];
    }

    /**
     * @dataProvider playDataProvider
     *
     * @param int $limit
     * @param array $expectedResult
     */
    public function testPlay(int $limit, array $expectedResult)
    {
        $actualResult = $this->fizzBuzz->play($limit);

        $this->assertSame($expectedResult, $actualResult);
    }

    public function playDataProvider(): array
    {
        return [
            'should return empty array' => [0, []],
            'should return first fizz' => [3, ['1', '2', 'Fizz']],
            'should return first buzz' => [5, ['1', '2', 'Fizz', '4', 'Buzz']],
            'should return first fizzbuzz' => [
                15,
                ['1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz', 'Buzz', '11', 'Fizz', '13', '14', 'FizzBuzz']
            ],

        ];
    }
}
