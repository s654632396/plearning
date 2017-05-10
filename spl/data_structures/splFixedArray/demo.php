<?php


$farr = new SplFixedArray(10);

var_dump($farr);
/**
object(SplFixedArray)[1]
public 0 => null
public 1 => null
public 2 => null
public 3 => null
public 4 => null
public 5 => null
public 6 => null
public 7 => null
public 8 => null
public 9 => null
 */

echo PHP_INT_MAX; // my machine is 9223372036854775807 (2^63)

$farr[0] = 2;
$farr[3] = 'have fun!';
$farr[9] = 'enjoy it';

var_dump($farr);

echo $farr->count(); // 10
echo '<br/>';
echo $farr->getSize(); // 10
echo '<br/>';
echo count($farr);// 10
echo '<br/>';

$data = [
	0 => '1',
	1 => '2',
	'2' => '3',
	'3' => '4',
	'4' => '5',
	6 => '6',
];

$iarr = SplFixedArray::fromArray($data);
var_dump($iarr);

/* -------------------
object(SplFixedArray)[2]
  public 0 => string '1' (length=1)
  public 1 => string '2' (length=1)
  public 2 => string '3' (length=1)
  public 3 => string '4' (length=1)
  public 4 => string '5' (length=1)
  public 5 => null
  public 6 => string '6' (length=1)
-----------------------
*/

var_dump($iarr->toArray());

/* -------------------
array (size=7)
  0 => string '1' (length=1)
  1 => string '2' (length=1)
  2 => string '3' (length=1)
  3 => string '4' (length=1)
  4 => string '5' (length=1)
  5 => null
  6 => string '6' (length=1)
-----------------------
*/

$iarr->setSize(5);
var_dump($iarr);
$iarr->setSize(9);
var_dump($iarr);
















