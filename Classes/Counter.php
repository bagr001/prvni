<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Counter
 *
 * @author Vojta
 */
class Counter {

	private static $c = 0;

	public static function inc($n = 1){
		return self::$c += $n;
	}

	public static function dec($n = 1){
		return self::$c -= $n;
	}

	public static function count(){
		return self::$c;
	}

}
