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
  }

  /**
   * @test
   */
  public function ５の倍数のときにBuzzを返すこと()
  {
    $fizzbuzz = new Fizzbuzz();
    $expected = 'Buzz';
    $this->assertSame($expected, $fizzbuzz->calc(5));
  }
}
