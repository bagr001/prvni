<?php

/**
 * Description of MyClass
 *
 * @author Vojtěch Lank
 */
class MyClass {	

	private function foo(){
		return 1;
	}
	
	public function bar(){
		return $this->foo();
	}

}
