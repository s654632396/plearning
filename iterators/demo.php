<?php
/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午2:38
 */

$data = [
	'title' => 'how to work with iterators',
	'posts' => [
		[
			'title' => 'introduction to iterators',
			'email' => 'JohnDoe@example.com'
		],
		[
			'title' => 'extending iterators',
			'email' => 'JohnDoe@example.com'
		],
	]
];

foreach (new RecursiveArrayIterator($data) as $key => $val) {
	echo $key . ': ' . $val . PHP_EOL;
}
