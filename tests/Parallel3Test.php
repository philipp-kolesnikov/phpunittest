<?php

class ParallelTest3 extends PHPUnit_Framework_TestCase {

	public function testProvider()
	{
		return array(
			array(1),
			array(1),
			array(1)
		);
	}

	/**
	 *  @dataProvider testProvider
	 */
	public function testFirst($a) {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		assert(true);
	}
}
 