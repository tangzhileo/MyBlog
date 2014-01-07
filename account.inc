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
	private $resumeFile=null;
	private $coverletterFile=null;

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

	public function setPassword($pass)
	{
		$this->password=$pass;
	}

	public function getNickname()
	{
		return $this->nickname;
	}

	public function setNickname($name)
	{
		$this->nickname=$name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($mail)
	{
		$this->email=$mail;
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

	public function setCompany($company)
	{
		$this->company=$company;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->staus = $status;
	}

	public function postTask($taskId)
	{
		// should return taskId
	}

	public function endTask($taskId)
	{

	}

	public function getTaskList()
	{

	}

	public function getApplyList()
	{

	}

	public function applyTask($taskId)
	{
		// should return applyId
	}

	public function deapplyTask($taskId)
	{

	}
}
?>