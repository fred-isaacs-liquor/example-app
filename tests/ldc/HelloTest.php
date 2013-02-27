<?php 
require_once('../vendor/autoload.php');

class HelloTest extends PHPUnit_Framework_TestCase {

	public function testSayHello() {

		$expected = "Hello, Fred!";
		
		$greeter = new \ldc\Hello();
		
		$actual = $greeter->greet("Fred");
		
		$this->assertEquals($expected, $actual);

	}

}