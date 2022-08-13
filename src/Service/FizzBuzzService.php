<?php
namespace App\Service;

class FizzBuzzService
{
    public function getFizzBuzzFormat(int $init, int $end): string
    {
        $numbers = '';
        $nextNum = $init;
        for ($i=$init; $i <= $end; $i++) {
            if ($nextNum % 3 == 0 and $nextNum % 5 == 0) {
                $numbers .= 'FizzBuzz';
            } else if ($nextNum % 3 == 0) {
                $numbers .= 'Fizz';
            } else if ($nextNum % 5 == 0) {
                $numbers .= 'Buzz';
            } else {
                $numbers .= $nextNum;
            }

            if ($i < $end) $numbers .= ', ';
            $nextNum = $init + $i;
        }
        
        return $numbers;
    }
}