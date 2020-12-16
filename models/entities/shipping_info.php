<?php

class ShippingInfo
{
	private $firstname;
	private $lastname;
	private $country;
	private $county;
	private $province;
	private $streetAddress;
	private $postcode;
	private $tel;
	private $notes;
	
	public function __construct($FirstName, $LastName, $Country, $County, $Province, $StreetAddress, $Postcode, $Tel, $Notes)
	{
		$this->firstname = $FirstName;
		$this->lastname = $LastName;
		$this->country = $Country;
		$this->county = $County;
		$this->province = $Province;
		$this->streetAddress = $StreetAddress;
		$this->postcode = $Postcode;
		$this->tel = $Tel;
		$this->notes = $Notes;
	}
	
// firstname	
	public function getFirstname()
	{
		return $this->this->firstname;
	}
	public function setFirstname($FirstName)
	{
		$this->firstname = $FirstName;
	}
	
// lastname
	public function getLastname()
	{
		return $this->lastname;
	}
	public function setLastname($LastName)
	{
		$this->lastname = $LastName;
	}
	
// country
	public function getCountry()
	{
		return $this->country;
	}
	public function setCountry($Country)
	{
		$this->country = $Country;
	}
	
// county
	public function getCounty()
	{
		return $this->$county;
	}
	public function setCounty($County)
	{
		$this->$county = $County;
	}
	
// province
	public function getProvince()
	{
		return $this->province;
	}
	public function setProvince($Province)
	{
		$this->province = $Province;
	}

// streetAddress
	public function getStreetAddress()
	{
		return $this->streetAddress;
	}
	public function setStreetAddress($StreetAddress)
	{
		$this->streetAddress = $StreetAddress;
	}

// postcode
	public function getPostcode()
	{
		return $this->postcode;
	}
	public function setPostcode($Postcode)
	{
		$this->postcode = $Postcode;
	}

// tel
	public function getTel()
	{
		return $this->tel;
	}
	public function setTel($Tel)
	{
		$this->tel = $Tel;
	}

// notes
	public function getNotes()
	{
		return $this->notes;
	}
	public function setNotes($Notes)
	{
		$this->notes = $Notes;
	}
}
?>