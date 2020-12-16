<?php

class ProductCategory
{
	private $id;
	private $name;

	public function __construct($Id, $Name)
	{
		$this->id = $Id;
		$this->name = $Name;
	}

// id
	public function getId()
	{
		return $this->id;
	}
	public function setId($Id)
	{
		$this->id = $Id;
	}

// name
	public function getName()
	{
		return $this->name;
	}
	public function setName($Name)
	{
		$this->name = $Name;
	}
	
}

?>