<?php

include_once('shipping_info.php');

class Order
{
	private $id;
	private $userId;
	private $diffShipAddr;
	private $totalPrice;
	private $shippingInfo;
	private $content; // array of (product => amount)

	public function __construct($Id, $UserId, $DiffShipAddr, $TotalPrice,  $ShippingInfo, $Content = array())
	{
		$this->id = $Id;
		$this->userId = $UserId;
		$this->diffShipAddr = $DiffShipAddr;
		$this->totalPrice = $TotalPrice;
		$this->shippingInfo = $ShippingInfo;
		$this->content = $content;
	}

// id
	public function getId()
	{
		return $this->id;
	}
	public function setId($_id)
	{
		$this->id = $_id;
	}

// userId
	public function getUserId()
	{
		return $this->userId;
	}
	public function setUserId($_userId)
	{
		$this->userId = $_userId;
	}

// diffShipAddr
	public function getdiffShipAddr()
	{
		return $this->diffShipAddr;
	}
	public function setdiffShipAddr($_diffShipAddr)
	{
		$this->diffShipAddr = $_diffShipAddr;
	}

// totalPrice
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}
	public function setTotalPrice($_totalPrice)
	{
		$this->totalPrice = $_totalPrice;
	}

// content
	public function getContent()
	{
		return $this->$content;
	}
	public function modifyAmount($ProductName, $UpdatedValue)
	{
		if (array_key_exists($ProductName, $this->content)) {
			$this->content[$ProductName] = $UpdatedValue;
			return true;
		}
		return false;
	}
	public function addProduct($ProductName, $Amount)
	{
		if (!array_key_exists($ProductName, $this->content)) {
			$this->content[$ProductName] = $Amount;
			return true;
		}
		return false;
	}
	public function removeProduct($ProductName)
	{
		if (array_key_exists($ProductName)) {
			unset($this->content[$ProductName]);
			return true;
		}
		return false;
	}

// shippingInfo
	public function getShippingInfo()
	{
		return $this->shippingInfo;
	}
	public function setShippingInfo($ShippingInfo)
	{
		$this->shippingInfo = $ShippingInfo;
	}
}
?>