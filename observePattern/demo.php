<?php
/**
 * Created by PhpStorm.
 * User: haruharu
 * Date: 17-5-9
 * Time: 下午4:54
 */

interface Observer
{
	public function update($msg = null);
}


abstract class EventGenerator
{
	private $observers = [];
	
	public function addObserver(Observer $ob)
	{
		$this->observers[] = $ob;
	}
	
	public function notify($msg = '')
	{
		foreach ($this->observers as $observer) {
			$observer->update($msg);
		}
	}
	
}

class Aobserver implements Observer
{
	public function update($msg = null)
	{
		// TODO: Implement update() method.
		echo 'A:'. $msg;
	}
}

class Bobserver implements Observer
{
	public function update($msg = null)
	{
		// TODO: Implement update() method.
		echo 'B:'. $msg;
	}
}

class Event extends EventGenerator
{
	public function trigger()
	{
		echo 'Event on'. PHP_EOL;
		$this->notify('message...');
	}
}

$event = new Event();
$event->addObserver(new Aobserver());
$event->addObserver(new Bobserver());
$event->trigger();


