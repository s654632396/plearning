<?php

$dl = new SplDoublyLinkedList();

//echo $dl->getIteratorMode(); // 0

$dl->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

//echo $dl->getIteratorMode();    // 2

$dl->push('a');
$dl->push('b');
$dl->push('c');
$dl->push('d');

for ($dl->rewind(); $dl->valid(); $dl->next()) {
	echo $dl->current() . PHP_EOL;
}

echo '<br/>';

$dl->setIteratorMode($dl::IT_MODE_FIFO);
for ($dl->rewind(); $dl->valid(); $dl->next()) {
	echo $dl->current() . PHP_EOL;
}

