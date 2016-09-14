<?php
namespace App;
class Fizzbuzz
{
  public function calc($num){
    if ($this->isFizz($num) && $this->isBuzz($num)) {
      return 'FizzBuzz';
    }
    if ($this->isFizz($num)) {
      return 'Fizz';
    }
    if ($this->isBuzz($num)) {
      return 'Buzz';
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
