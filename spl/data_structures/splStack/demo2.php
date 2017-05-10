<?php

class Stack extends SplStack
{
	public function iterateStack()
	{
		echo '<ul>';
		for ($this->rewind(); $this->valid(); $this->next()) {
			echo '<li>';
			echo $this->current();
			echo '</li>';
		}
		echo '</ul>';
	}
	
	public function pushArray(array $array)
	{
		foreach ($array as $v) {
			$this->push($v);
		}
	}
}

$stack = new Stack();

$stack->pushArray(range(0, 10, 2.5));

$stack->iterateStack();

echo $stack->offsetGet(0);
echo '<br/>';
echo $stack->offsetGet(1);
echo '<br/>';
echo $stack->offsetGet(2);
echo '<br/>';
