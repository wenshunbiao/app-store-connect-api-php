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

class UserInvitationCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $email;
	public $firstName;
	public $lastName;
	public $roles; // 
	public $allAppsVisible;
	public $provisioningAllowed;

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
	public function getFirstName()
	{
		return $this->firstName;
	}
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}
	public function getLastName()
	{
		return $this->lastName;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $this;
	}
	/**
	* @return  string[]
	*/
	public function getRoles()
	{
		return $this->roles;
	}
	/**
	* @param  string[]
	*/
	public function setRoles($roles)
	{
		$this->roles = $roles;
		return $this;
	}
	public function getAllAppsVisible()
	{
		return $this->allAppsVisible;
	}
	public function setAllAppsVisible($allAppsVisible)
	{
		$this->allAppsVisible = $allAppsVisible;
		return $this;
	}
	public function getProvisioningAllowed()
	{
		return $this->provisioningAllowed;
	}
	public function setProvisioningAllowed($provisioningAllowed)
	{
		$this->provisioningAllowed = $provisioningAllowed;
		return $this;
	}

}

class UserInvitationCreateRequest_Data_Relationships_VisibleApps_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'apps';
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

class UserInvitationCreateRequest_Data_Relationships_VisibleApps extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = UserInvitationCreateRequest_Data_Relationships_VisibleApps_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  UserInvitationCreateRequest_Data_Relationships_VisibleApps_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  UserInvitationCreateRequest_Data_Relationships_VisibleApps_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class UserInvitationCreateRequest_Data_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $visibleAppsType = UserInvitationCreateRequest_Data_Relationships_VisibleApps::class;
	protected $visibleAppsDataType = 'object';

	/**
	* @return  UserInvitationCreateRequest_Data_Relationships_VisibleApps
	*/
	public function getVisibleApps()
	{
		return $this->visibleApps;
	}
	/**
	* @param  UserInvitationCreateRequest_Data_Relationships_VisibleApps
	*/
	public function setVisibleApps($visibleApps)
	{
		$this->visibleApps = $visibleApps;
		return $this;
	}

}

class UserInvitationCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'userInvitations';
	protected $attributesType = UserInvitationCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = UserInvitationCreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  UserInvitationCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  UserInvitationCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  UserInvitationCreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  UserInvitationCreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class UserInvitationCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = UserInvitationCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  UserInvitationCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  UserInvitationCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

