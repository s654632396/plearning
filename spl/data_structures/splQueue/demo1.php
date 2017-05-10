<?php

$queue = new SplQueue();

//var_dump($queue);
/**
	object(SplQueue)[1]
	private 'flags' (SplDoublyLinkedList) => int 4
	private 'dllist' (SplDoublyLinkedList) =>
	array (size=0)
	empty
 */


$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->enqueue('D');

var_dump($queue);
while (!$queue->isEmpty())
	var_dump($queue->dequeue());


var_dump($queue);

