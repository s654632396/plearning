<?php

class MyHeap extends SplHeap
{
	protected function compare($val1, $val2)
	{
		return $val2 - $val1;
	}
}

$heap = new MyHeap();

//var_dump($heap);
/**
	object(MyHeap)[1]
	private 'flags' (SplHeap) => int 0
	private 'isCorrupted' (SplHeap) => boolean false
	private 'heap' (SplHeap) =>
	array (size=0)
	empty
 */

$data = range(1, 100, 3);
assert(shuffle($data), 'shuffle the variable $data failed');


foreach ($data as $k => $v) {
	$heap->insert($v);
}

var_dump($heap);
echo '<table border="1">';

for ($heap->rewind(); $heap->valid(); $heap->next())
{
	echo '<tr>';
	echo '<td>', $heap->key() , '</td>';
	echo '<td>', $heap->current() , '</td>';
	echo '</tr>';
}

echo '</table>';
