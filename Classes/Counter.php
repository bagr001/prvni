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

	private static $c;

	public static function add($n = 1){
		return self::$c += $n;
	}

	public static function count(){
		return self::$c;
	}

}
