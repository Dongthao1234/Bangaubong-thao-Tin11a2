<?php
	
class Review
{
	private $userId;
	private $productId;
	private $content;
	private $postedTime;
	
	public function __construct($UserId, $ProductId, $Content, $PostedTime)
	{
		$this->userId = $UserId;
		$this->productId = $ProductId;
		$this->content = $Content;
		$this->postedTime = $PostedTime;
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

// productId
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($_productId)
	{
		$this->productId = $_productId;
	}

// content
	public function getContent()
	{
		return $this->content;
	}
	public function setContent($_content)
	{
		$this->content = $_content;
	}

// postedTime
	public function getPostedTime()
	{
		return $this->postedTime;
	}
	public function setPostedTime($_postedTime)
	{
		$this->postedTime = $_postedTime;
	}

}

?>