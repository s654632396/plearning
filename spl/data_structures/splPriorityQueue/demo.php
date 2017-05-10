<?php

$pq = new SplPriorityQueue;

$data = [
	['A',  3],
	['B',  6],
	['C',  1],
	['D',  2],
];

foreach ($data as $v)
{
	// insert方法,第一个参数是value,也就是数据
	// 第二个参数是权值,也就是优先级,通过compare方法,来比较优先级决定heap的数据结构
	$pq->insert($v[0], $v[1]);
}

echo "COUNT->", $pq->count(), "<br/>";
$pq->setExtractFlags($pq::EXTR_BOTH);
//$pq->setExtractFlags($pq::EXTR_PRIORITY);
//$pq->setExtractFlags($pq::EXTR_DATA);


var_dump($pq->top());

while ($pq->valid())
{
	print_r($pq->current());
//	print_r($pq->top()); // 这里的top方法输出和current方法一致,难以理解..
	echo '<br/>';
	$pq->next();
}



























