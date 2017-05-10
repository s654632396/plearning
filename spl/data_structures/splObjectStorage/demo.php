<?php

$os = new SplObjectStorage();

$ob1 = new StdClass;
$ob2 = new StdClass;
$ob3 = new StdClass;

$os->attach($ob1);
$os->attach($ob2);
//$os->attach($ob3);

var_dump($os->contains($ob1));
var_dump($os->contains($ob2));
var_dump($os->contains($ob3));

$os->detach($ob2);

var_dump($os->contains($ob1));
var_dump($os->contains($ob2));
var_dump($os->contains($ob3));

var_dump($os);









































