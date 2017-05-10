<?php
/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午1:36
 */

$arr = [1, 2, 3, 4, 5, 6];


$res = array_reduce($arr, function($carry, $item) {
	$carry *= $item;
	return $carry;
}, 10);
var_export($res);

echo PHP_EOL;