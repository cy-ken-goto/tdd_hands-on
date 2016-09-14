<?php
namespace App;
class Fizzbuzz
{
  public function calc($num){
    if ($num % 3 === 0 && $num % 5 === 0) {
      return 'FizzBuzz';
    }
    if ($num % 3 === 0) {
      return 'Fizz';
    }
    if ($num % 5 === 0) {
      return 'Buzz';
    }
    return $num;
  }
}
