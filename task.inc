<?php
class Task
{
	private $taskId;
	private $title;
	private $authorId;
	private $company;
	private $content;
	private $startTime;
	private $expireTime;
	private $taskStatus;

	function Task($taskId, $title, $authorId, $company, $content, $startTime, $expireTime, $taskStatus)
	{
		$this->taskId=$taskId;
		$this->title=$title;
		$this->authorId=$authorId;
		$this->company=$company;
		$this->content=$content;
		$this->startTime=$startTime;
		$this->expireTime=$expireTime;
		$this->taskStatus=$taskStatus;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getTitle()
	{
		return $thi->title;
	}

	public function setTitle($title)
	{
		$this->title=$title;
	}

	public function getAuthorId()
	{
		return $this->authorId;
	}

	public function setAuthorId($id)
	{
		$this->authorId=$id;
	}

	public function getCompany()
	{
		return $this->company;
	}

	public function setCompany($company)
	{
		$this->company=$company;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setContent($cont)
	{
		$this->content=$cont;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStartTime($start)
	{
		$this->startTime=$startTime;
	}

	public function getExpireTime()
	{
		return $this->expireTime;
	}

	public function setExpireTime($expire)
	{
		$this->expireTime=$expire;
	}

	public function getTaskStatus()
	{
		$this->taskStatus=$taskStatus;
	}

	public function setTaskStatus($status)
	{
		$this->taskStatus=$status;
	}
}
?>