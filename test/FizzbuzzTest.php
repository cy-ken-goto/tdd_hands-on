<?php
namespace App;
class FizzbuzzTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @test
   */
  public function 受け取った数値をそのまま返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 1;
    $this->assertSame($expected, $fizzbuzz->calc(1));
  }

  public function dp_３の倍数はFizz、５の倍数はBuzz、３と５の倍数はFizzBuzzを返すこと()
  {
    return [
      [3,  'Fizz'],
      [6,  'Fizz'],
      [5,  'Buzz'],
      [10, 'Buzz'],
      [15, 'FizzBuzz'],
      [30, 'FizzBuzz']
    ];
  }

  /**
   * @test
   * @dataProvider dp_３の倍数はFizz、５の倍数はBuzz、３と５の倍数はFizzBuzzを返すこと
   */
  public function ３の倍数はFizz、５の倍数はBuzz、３と５の倍数はFizzBuzzを返すこと($num, $expected)
  {
    $fizzbuzz = new Fizzbuzz();
    $this->assertSame($expected, $fizzbuzz->calc($num));
  }
}
