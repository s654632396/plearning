<?php

interface PriorityLoggerInterface
{
	public function insert($value, $priority);
}

class PriorityLogger extends SplPriorityQueue implements PriorityLoggerInterface
{
	
}

class logger
{
	const ERROR = 3;
	const NOTICE = 1;
	const WARNING = 2;
	
	private $priorityLogger;
	
	public function __construct(PriorityLoggerInterface $priorityLogger)
	{
		$this->priorityLogger = $priorityLogger;
	}
	
	public function getPriorityLogger()
	{
		return $this->priorityLogger;
	}
	
	public function addMessage($value, $priority = self::NOTICE)
	{
		$this->priorityLogger->insert($value, $priority);
	}
	
	public function printLoggerQueue()
	{
		foreach ($this->priorityLogger as $queue)
		{
			print $queue . '<br/>';
		}
	}
}

$logger = new logger(new PriorityLogger());
$logger->addMessage("Message1 with notice type");
$logger->addMessage("Message2 with warning type", $logger::WARNING);
$logger->addMessage("Message3 with notice type");
$logger->addMessage("Message4 with Error type", $logger::ERROR);

$logger->printLoggerQueue();





























