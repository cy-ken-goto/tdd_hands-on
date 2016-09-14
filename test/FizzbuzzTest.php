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

  public function dp_３の倍数のときは数の代わりにFizz、５の倍数のときは数の代わりにBuzzを返すこと()
  {
    return [
      [3,  'Fizz'],
      [6,  'Fizz'],
      [5,  'Buzz'],
      [10, 'Buzz']
    ];
  }

  /**
   * @test
   * @dataProvider dp_３の倍数のときは数の代わりにFizz、５の倍数のときは数の代わりにBuzzを返すこと
   */
  public function ３の倍数のときは数の代わりにFizz、５の倍数のときは数の代わりにBuzzを返すこと($num, $expected)
  {
    $fizzbuzz = new Fizzbuzz();
    $this->assertSame($expected, $fizzbuzz->calc($num));
  }


  /**
   * @test
   */
  public function ３と５両方の倍数の場合にはFizzBuzzを返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 'FizzBuzz';
    $this->assertSame($expected, $fizzbuzz->calc(15));
    $this->assertSame($expected, $fizzbuzz->calc(30));
  }


}
