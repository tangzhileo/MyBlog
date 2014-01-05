<?php
class Person
{
	private $id;
	private $accountName;
	private $password;
	private $nickname;
	private $email;
	private $registerTime;
	private $birthday;
	private $company;
	private $status;
	
	function Person($id, $accountName, $password, $nickname, $email, $registerTime, $birthday, $company, $status)
	{
		$this->id=$id;
		$this->accountName=$accountName;
		$this->password=$password;
		$this->nickname=$nickname;
		$this->email=$email;
		$this->registerTime=$registerTime;
		$this->birthday=$birthday;
		$this->company=$company;
		$this->status=$status;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getAccountName()
	{
		return $this->accountName;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getNickname()
	{
		return $this->nickname;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getRegisterTime()
	{
		return $this->registerTime;
	}
	
	public function getBirthday()
	{
		return $this->birthday;
	}
	
	public function getCompany()
	{
		return $this->company;
	}
	
	public function getStatus()
	{
		return $this->status;
	}
}
?>