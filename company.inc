<?php
class Company
{
	private $id;
	private $companyName;
	
	function Company($id, $companyName)
	{
		$this->id=$id;
		$this->companyName=$companyName;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getCompanyName()
	{
		return $this->companyName;
	}
	
	public function setCompanyName($name)
	{
		$this->companyName=$companyName;
	}
}
?>