<?php
namespace App\Tests\Unit\Service;

use App\Service\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    private FizzBuzzService $fizzBuzzService;
    
    public function setUp(): void
    {
        $this->fizzBuzzService = new FizzBuzzService();
    }

    public function testFizzBuzzService(): void
    {
        $this->assertEquals(
            'FizzBuzz, FizzBuzz, 61, 62, Fizz, 64, Buzz, Fizz, 67, 68, Fizz, Buzz, 71, Fizz, 73, 74, FizzBuzz, 76, 77, Fizz, 79, Buzz, Fizz, 82, 83, Fizz, Buzz, 86, Fizz, 88, 89, FizzBuzz, 91, 92, Fizz, 94, Buzz, Fizz',
            $this->fizzBuzzService->getFizzBuzzFormat(30,67)
        );
    }
}