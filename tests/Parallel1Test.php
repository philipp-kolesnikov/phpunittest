<?php

class ParallelTest1 extends PHPUnit_Framework_TestCase {

	public function testFirst() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		sleep(2);
		assert(true);
	}

	public function testSecond() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		assert(true);
	}

	public function testLast() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		assert(true);
	}


}
 