<?php
/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午3:01
 */

require_once 'init.php';

$c = new Calculator();

$c->setOperation(new Adder);
$c->calculate(10, 50);

$c->setOperation(new Subtractor);
$c->calculate(30);

$c->setOperation(new Multiplier);
$c->calculate(5);

$c->setOperation(new Divider);
$c->calculate(2);

echo $c->getResult();

