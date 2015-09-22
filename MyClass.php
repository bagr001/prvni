<?php

/**
 * Description of MyClass
 *
 * @author Vojtěch Lank
 */
class MyClass {	

	private $x = 0;

	private function foo(){
		return $x++;
	}
	
	public function bar(){
		return $this->foo();
	}

}
