<?php
/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午3:37
 */

$baseDir = __DIR__;

spl_autoload_register(function ($class) use ($baseDir) {
	require_once "classes/{$class}.php";
	#require_once $baseDir . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR .$class.".php";
});

//require_once 'classes/Caculator.php';
//require_once 'classes/OperatorInterface.php';
//require_once 'classes/Adder.php';
//require_once 'classes/Subtractor.php';
//require_once 'classes/Multiplier.php';
//require_once 'classes/Divider.php';