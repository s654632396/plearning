<?php

$dlist = new SplDoublyLinkedList();

$arr = ['001', '002', '003', '004', '005', '006',];
foreach ($arr as $k => $v) {
	$dlist->push($v);
}

$dlist->add(3, '003.5');

//for ($dlist->rewind(); $dlist->valid(); $dlist->next()) {
//	echo $dlist->current();
//	echo PHP_EOL;
//}


// 设置迭代删除模式
//$dlist->setIteratorMode($dlist::IT_MODE_DELETE);
//echo $dlist->getIteratorMode();
//echo PHP_EOL;

//for ($dlist->rewind(); $dlist->valid(); $dlist->next()) {
//	echo $dlist->current();
//	echo PHP_EOL;
//}
//var_dump($dlist);
/*
  迭代过后的元素都被删除了
  object(SplDoublyLinkedList)[1]
  private 'flags' => int 1
  private 'dllist' =>
    array (size=0)
      empty
 */


//var_dump($dlist);

for ($dlist->rewind(); $dlist->valid(); $dlist->next()) {
	echo $dlist->current();
	echo PHP_EOL;
	echo $dlist->top();
	echo PHP_EOL;
	echo $dlist->bottom();
	echo '<br/>';
}
