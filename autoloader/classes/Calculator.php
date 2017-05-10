<?php

/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午3:01
 */
class Calculator
{
	protected $operator;
	protected $val = 0;
	
	public function __construct()
	{
		
	}
	
	public function setOperation(OperatorInterface $operator) {
		$this->operator = $operator;
		$this->operator->val = $this->val;
	}
	
	public function calculate() {
		$args = func_get_args();
		if (count($args) == 1) {
			$val = $this->operator->calculate($args[0]);
			$this->operator->val = $this->val = $val;
		} else {
			$val = $this->operator->calculate($args[0], $args[1]);
			$this->operator->val = $this->val = $val;
		}
		return $val;
	}
	
	public function getResult() {
		return $this->val;
	}
}