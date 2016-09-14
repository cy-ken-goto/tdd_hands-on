<?php
namespace App;
class Fizzbuzz
{
  const FIZZ_BUZZ = 'FizzBuzz';
  const FIZZ = 'Fizz';
  const BUZZ = 'Buzz';
  const FIZZ_NUMBER = 3;
  const BUZZ_NUMBER = 5;

  public function calc($num){
    if (!is_int($num) || $num < 1 || $num > 100) {
      throw new \Exception('1~100までの数値を入力してください');
    }
    if ($this->isFizzBuzz($num)) {
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
    return $num % self::FIZZ_NUMBER === 0;
  }

  private function isBuzz($num)
  {
    return $num % self::BUZZ_NUMBER === 0;
  }

  private function isFizzBuzz($num)
  {
    return $num % self::FIZZ_NUMBER === 0 && $num % self::BUZZ_NUMBER === 0;
  }
}
