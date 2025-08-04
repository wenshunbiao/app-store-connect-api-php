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

class AppEventLocalization_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $locale;
	public $name;
	public $shortDescription;
	public $longDescription;

	public function getLocale()
	{
		return $this->locale;
	}
	public function setLocale($locale)
	{
		$this->locale = $locale;
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getShortDescription()
	{
		return $this->shortDescription;
	}
	public function setShortDescription($shortDescription)
	{
		$this->shortDescription = $shortDescription;
		return $this;
	}
	public function getLongDescription()
	{
		return $this->longDescription;
	}
	public function setLongDescription($longDescription)
	{
		$this->longDescription = $longDescription;
		return $this;
	}

}

class AppEventLocalization_Relationships_AppEvent_Links extends \Cantie\AppStoreConnect\Model
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

class AppEventLocalization_Relationships_AppEvent_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEvents';
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

class AppEventLocalization_Relationships_AppEvent extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEventLocalization_Relationships_AppEvent_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = AppEventLocalization_Relationships_AppEvent_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AppEventLocalization_Relationships_AppEvent_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEvent_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships_AppEvent_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEvent_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEventLocalization_Relationships_AppEventScreenshots_Links extends \Cantie\AppStoreConnect\Model
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

class AppEventLocalization_Relationships_AppEventScreenshots_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventScreenshots';
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

class AppEventLocalization_Relationships_AppEventScreenshots extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEventLocalization_Relationships_AppEventScreenshots_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppEventLocalization_Relationships_AppEventScreenshots_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppEventLocalization_Relationships_AppEventScreenshots_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventScreenshots_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships_AppEventScreenshots_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventScreenshots_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEventLocalization_Relationships_AppEventVideoClips_Links extends \Cantie\AppStoreConnect\Model
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

class AppEventLocalization_Relationships_AppEventVideoClips_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventVideoClips';
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

class AppEventLocalization_Relationships_AppEventVideoClips extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = AppEventLocalization_Relationships_AppEventVideoClips_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = AppEventLocalization_Relationships_AppEventVideoClips_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  AppEventLocalization_Relationships_AppEventVideoClips_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventVideoClips_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships_AppEventVideoClips_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventVideoClips_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class AppEventLocalization_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $appEventType = AppEventLocalization_Relationships_AppEvent::class;
	protected $appEventDataType = 'object';
	protected $appEventScreenshotsType = AppEventLocalization_Relationships_AppEventScreenshots::class;
	protected $appEventScreenshotsDataType = 'object';
	protected $appEventVideoClipsType = AppEventLocalization_Relationships_AppEventVideoClips::class;
	protected $appEventVideoClipsDataType = 'object';

	/**
	* @return  AppEventLocalization_Relationships_AppEvent
	*/
	public function getAppEvent()
	{
		return $this->appEvent;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEvent
	*/
	public function setAppEvent($appEvent)
	{
		$this->appEvent = $appEvent;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships_AppEventScreenshots
	*/
	public function getAppEventScreenshots()
	{
		return $this->appEventScreenshots;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventScreenshots
	*/
	public function setAppEventScreenshots($appEventScreenshots)
	{
		$this->appEventScreenshots = $appEventScreenshots;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships_AppEventVideoClips
	*/
	public function getAppEventVideoClips()
	{
		return $this->appEventVideoClips;
	}
	/**
	* @param  AppEventLocalization_Relationships_AppEventVideoClips
	*/
	public function setAppEventVideoClips($appEventVideoClips)
	{
		$this->appEventVideoClips = $appEventVideoClips;
		return $this;
	}

}

class AppEventLocalization extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEventLocalizations';
	public $id;
	protected $attributesType = AppEventLocalization_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = AppEventLocalization_Relationships::class;
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
	* @return  AppEventLocalization_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AppEventLocalization_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  AppEventLocalization_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  AppEventLocalization_Relationships
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

