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

  /**
   * @test
   */
  public function ３の倍数のときにFizzを返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 'Fizz';
    $this->assertSame($expected, $fizzbuzz->calc(3));
    $this->assertSame($expected, $fizzbuzz->calc(6));
  }

  /**
   * @test
   */
  public function ５の倍数のときにBuzzを返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 'Buzz';
    $this->assertSame($expected, $fizzbuzz->calc(5));
    $this->assertSame($expected, $fizzbuzz->calc(10));
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
