<?php

abstract class Model implements SplSubject
{
	protected $observers = null;
	
	public function __construct()
	{
		$this->observers = new SplObjectStorage();
	}
	
	/**
	 * @return mixed
	 */
	abstract protected function _getData();
	
	public function attach(SplObserver $observer)
	{
		// TODO: Implement attach() method.
		$this->observers->attach($observer, $this->_getData());
	}
	
	public function detach(SplObserver $observer)
	{
		// TODO: Implement detach() method.
		$this->observers->detach($observer);
	}
	
	public function notify()
	{
		// TODO: Implement notify() method.
		
		foreach ($this->observers as $observer) {
			$observer->update($this, $this->observer->offsetGet($observer));
		}
	}
	
	
}

class User extends Model
{
	private $email;
	private $username;
	private $mobile;
	private $password;
	
	public function __construct($email, $username, $mobile, $passowrd)
	{
		parent::__construct();
		$this->email = $email;
		$this->username = $username;
		$this->mobile = $mobile;
		$this->password = $passowrd;
	}
	
	protected function _getData()
	{
		// TODO: Implement _getData() method.
		return [
			'email' => $this->email,
			'username' => $this->username,
			'mobile' => $this->mobile,
			'password' => $this->password,
		];
	}
	
	public function create()
	{
		echo __METHOD__ , PHP_EOL;
		$this->notify();
	}
	
	public function changePassword($newPassword)
	{
		echo __METHOD__ , PHP_EOL;
		$this->password = $newPassword;
		$this->notify();
	}
	
	public function resetPassword()
	{
		echo __METHOD__ , PHP_EOL;
		$this->password = mt_rand(100000, 999999);
		$this->notify();
	}
}

class Sender implements SplObserver
{
	public function update(SplSubject $subject)
	{
		// TODO: Implement update() method.
	}
}











































