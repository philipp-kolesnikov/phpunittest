<?php

/**
 * @runTestsInSeparateProcesses
 */
class ParallelTest1 extends PHPUnit_Framework_TestCase {

	/**
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testFirst() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		sleep(2);
		assert(true);
	}

	/**
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testSecond() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		assert(true);
	}

	/**
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testLast() {
		print(__CLASS__."::".$this->getName()." pid is ".getmypid());
		assert(true);
	}


}
 