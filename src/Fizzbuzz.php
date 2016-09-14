<?php
namespace App;
class Fizzbuzz
{
  const FIZZ_BUZZ = 'FizzBuzz';
  const FIZZ = 'Fizz';
  const BUZZ = 'Buzz';

  public function calc($num){
    if ($this->isFizz($num) && $this->isBuzz($num)) {
      return self::FIZZ_BUZZ;
    }
    if ($this->isFizz($num)) {
      return self::FIZZ;
    }
    if ($this->isBuzz($num)) {
      return self::BUZZ;
    }
    return $num;
  }

  private function isFizz($num)
  {
    return $num % 3 === 0;
  }

  private function isBuzz($num)
  {
    return $num % 5 === 0;
  }
}
