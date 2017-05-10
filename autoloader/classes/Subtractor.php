<?php

/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午3:05
 */
class Subtractor implements OperatorInterface
{
	protected $val = 0;
	
	public function calculate($arg1, $arg2 = null)
	{
		// TODO: Implement calculate() method.
		if ($arg2 == null) {
			$this->val -= $arg1;
		} else {
			$this->val = $arg1 - $arg2;
		}
		
		return $this->val;
	}
	
	public function __set($name, $val) {
		$this->$name = $val;
	}
	
	public function __get($name) {
		return $this->$name;
	}
}