<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('fizzBuzz', [$this, 'formatFizzBuzz']),
        ];
    }

    public function formatFizzBuzz($number)
    {
        $numbers = '';
        for ($i=0; $i < 30; $i++) { 
            $nextNum = $number + $i;

            if ($nextNum % 3 == 0 and $nextNum % 5 == 0) {
                $numbers .= 'FizzBuzz';
            } else if ($nextNum % 3 == 0) {
                $numbers .= 'Fizz';
            } else if ($nextNum % 5 == 0) {
                $numbers .= 'Buzz';
            } else {
                $numbers .= $nextNum;
            }

            if ($i < 29) $numbers .= ', ';
        }
        
        return $numbers;
    }
}