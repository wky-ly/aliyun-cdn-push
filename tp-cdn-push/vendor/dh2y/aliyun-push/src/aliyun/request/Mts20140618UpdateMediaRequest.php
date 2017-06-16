<?php
/**
 * TOP API: mts.aliyuncs.com.UpdateMedia.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2015.07.13
 */
class Mts20140618UpdateMediaRequest
{
	/** 
	 * 封面图片
	 **/
	private $coverUrl;
	
	/** 
	 * 描述
	 **/
	private $description;
	
	/** 
	 * 媒资ID
	 **/
	private $mediaId;
	
	/** 
	 * 标签，用逗号分隔
	 **/
	private $tags;
	
	/** 
	 * 标题
	 **/
	private $title;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setCoverUrl($coverUrl)
	{
		$this->coverUrl = $coverUrl;
		$this->apiParas["CoverUrl"] = $coverUrl;
	}

	public function getCoverUrl()
	{
		return $this->coverUrl;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["MediaId"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["Tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["Title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "mts.aliyuncs.com.UpdateMedia.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->coverUrl,1152,"coverUrl");
		RequestCheckUtil::checkMaxLength($this->description,512,"description");
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
		RequestCheckUtil::checkMaxLength($this->tags,256,"tags");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,256,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}