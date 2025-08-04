<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore;

class CustomerReview_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $rating;
	public $title;
	public $body;
	public $reviewerNickname;
	public $createdDate;
	public $territory; // 

	public function getRating()
	{
		return $this->rating;
	}
	public function setRating($rating)
	{
		$this->rating = $rating;
		return $this;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	public function getBody()
	{
		return $this->body;
	}
	public function setBody($body)
	{
		$this->body = $body;
		return $this;
	}
	public function getReviewerNickname()
	{
		return $this->reviewerNickname;
	}
	public function setReviewerNickname($reviewerNickname)
	{
		$this->reviewerNickname = $reviewerNickname;
		return $this;
	}
	public function getCreatedDate()
	{
		return $this->createdDate;
	}
	public function setCreatedDate($createdDate)
	{
		$this->createdDate = $createdDate;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getTerritory()
	{
		return $this->territory;
	}
	/**
	* @param  string
	*/
	public function setTerritory($territory)
	{
		$this->territory = $territory;
		return $this;
	}

}

class CustomerReview_Relationships_Response_Links extends \Cantie\AppStoreConnect\Model
{
	public $self;
	public $related;

	public function getSelf()
	{
		return $this->self;
	}
	public function setSelf($self)
	{
		$this->self = $self;
		return $this;
	}
	public function getRelated()
	{
		return $this->related;
	}
	public function setRelated($related)
	{
		$this->related = $related;
		return $this;
	}

}

class CustomerReview_Relationships_Response_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviewResponses';
	public $id;

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

}

class CustomerReview_Relationships_Response extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = CustomerReview_Relationships_Response_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = CustomerReview_Relationships_Response_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CustomerReview_Relationships_Response_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  CustomerReview_Relationships_Response_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  CustomerReview_Relationships_Response_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CustomerReview_Relationships_Response_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CustomerReview_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $responseType = CustomerReview_Relationships_Response::class;
	protected $responseDataType = 'object';

	/**
	* @return  CustomerReview_Relationships_Response
	*/
	public function getResponse()
	{
		return $this->response;
	}
	/**
	* @param  CustomerReview_Relationships_Response
	*/
	public function setResponse($response)
	{
		$this->response = $response;
		return $this;
	}

}

class CustomerReview extends \Cantie\AppStoreConnect\Model
{
	public $type = 'customerReviews';
	public $id;
	protected $attributesType = CustomerReview_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CustomerReview_Relationships::class;
	protected $relationshipsDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  CustomerReview_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CustomerReview_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CustomerReview_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CustomerReview_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

