<?php

$stack = new SplStack();

var_dump($stack);
/**
	object(SplStack)[1]
	private 'flags' (SplDoublyLinkedList) => int 6
	private 'dllist' (SplDoublyLinkedList) =>
	array (size=0)
	empty
 */

echo $stack->getIteratorMode(); // 6
