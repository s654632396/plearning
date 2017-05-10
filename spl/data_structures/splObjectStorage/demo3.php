<?php


class MyObjectStorage extends SplObjectStorage
{
	public function getHash($object)
	{
		return  get_class($object);
	}
}

class TestObject {}

$list = new MyObjectStorage();

$list->attach(new TestObject());

foreach ($list as $k) {
	var_dump($list->offsetExists($k));
}

$list2 = clone $list;
foreach ($list2 as $k) {
	var_dump($list2->offsetExists($k));
}


foreach ($list as $k) {
	var_dump($list->getHash($k));
}








































