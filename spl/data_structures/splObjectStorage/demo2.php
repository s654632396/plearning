<?php

/**
 * As a map from object to data
 *
 */

$os = new SplObjectStorage();

$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;


$os[$o1] = 'data for object 1';
$os[$o2] = [1, 2, 3];

//print_r($os);

$os->attach($o3, 'object 3');

foreach ($os as $key => $val) {
	// actually, $val 才是 key, $key只是index
//	var_dump($os->offsetGet($val));
//	var_dump($os[$val]);
}



























