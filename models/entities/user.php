<?php

class User
{
	private $id;
	private $email;
	
	private $firstname;
	private $lastname;
	private $country;
	private $county;
	private $province;
	private $streetAddress;
	private $postcode;
	private $tel;
	private $facebook;
	private $twitter; 
	private $google;
	
	public function __construct($Id, $Email, $FirstName, $LastName, $Country, $County, $Province, $StreetAddress, $Postcode, $Tel, $Facebook = null, $Twitter = null, $Google = null)
	{
		$this->email = $Email;
		$this->id = $Id;
		$this->firstname = $FirstName;
		$this->lastname = $LastName;
		$this->country = $Country;
		$this->county = $County;
		$this->province = $Province;
		$this->streetAddress = $StreetAddress;
		$this->postcode = $Postcode;
		$this->tel = $Tel;
		$this->notes = $Notes;
		$this->facebook = $Facebook;
		$this->twitter = $Twitter;
		$this->google = $Google;
	}


// email
	public function getEmail()
	{
		return $this->this->email;
	}
	public function setEmail($Email)
	{
		$this->email = $Email;
	}

// id
	public function getId()
	{
		return $this->this->id;
	}
	public function setId($Id)
	{
		$this->id = $Id;
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

// facebook
	public function getFacebook()
	{
		return $this->facebook;
	}
	public function setFacebook($Facebook)
	{
		$this->facebook = $Facebook;
	}

// twitter
	public function getTwitter()
	{
		return $this->twitter;
	}
	public function settwitter($Twitter)
	{
		$this->twitter = $Twitter;
	}

// google
	public function getGoogle()
	{
		return $this->google;
	}
	public function setGoogle($Google)
	{
		$this->google = $Google;
	}
}

?>