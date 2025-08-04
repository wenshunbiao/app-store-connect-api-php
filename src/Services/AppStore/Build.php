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

class Build_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $uploadedDate;
	public $expirationDate;
	public $expired;
	public $minOsVersion;
	public $lsMinimumSystemVersion;
	public $computedMinMacOsVersion;
	protected $iconAssetTokenType = ImageAsset::class;
	protected $iconAssetTokenDataType = '';
	public $processingState; // PROCESSING, FAILED, INVALID, VALID
	public $buildAudienceType; // 
	public $usesNonExemptEncryption;

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	public function getUploadedDate()
	{
		return $this->uploadedDate;
	}
	public function setUploadedDate($uploadedDate)
	{
		$this->uploadedDate = $uploadedDate;
		return $this;
	}
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}
	public function setExpirationDate($expirationDate)
	{
		$this->expirationDate = $expirationDate;
		return $this;
	}
	public function getExpired()
	{
		return $this->expired;
	}
	public function setExpired($expired)
	{
		$this->expired = $expired;
		return $this;
	}
	public function getMinOsVersion()
	{
		return $this->minOsVersion;
	}
	public function setMinOsVersion($minOsVersion)
	{
		$this->minOsVersion = $minOsVersion;
		return $this;
	}
	public function getLsMinimumSystemVersion()
	{
		return $this->lsMinimumSystemVersion;
	}
	public function setLsMinimumSystemVersion($lsMinimumSystemVersion)
	{
		$this->lsMinimumSystemVersion = $lsMinimumSystemVersion;
		return $this;
	}
	public function getComputedMinMacOsVersion()
	{
		return $this->computedMinMacOsVersion;
	}
	public function setComputedMinMacOsVersion($computedMinMacOsVersion)
	{
		$this->computedMinMacOsVersion = $computedMinMacOsVersion;
		return $this;
	}
	/**
	* @return  ImageAsset
	*/
	public function getIconAssetToken()
	{
		return $this->iconAssetToken;
	}
	/**
	* @param  ImageAsset
	*/
	public function setIconAssetToken($iconAssetToken)
	{
		$this->iconAssetToken = $iconAssetToken;
		return $this;
	}
	public function getProcessingState()
	{
		return $this->processingState;
	}
	public function setProcessingState($processingState)
	{
		$this->processingState = $processingState;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getBuildAudienceType()
	{
		return $this->buildAudienceType;
	}
	/**
	* @param  string
	*/
	public function setBuildAudienceType($buildAudienceType)
	{
		$this->buildAudienceType = $buildAudienceType;
		return $this;
	}
	public function getUsesNonExemptEncryption()
	{
		return $this->usesNonExemptEncryption;
	}
	public function setUsesNonExemptEncryption($usesNonExemptEncryption)
	{
		$this->usesNonExemptEncryption = $usesNonExemptEncryption;
		return $this;
	}

}

class Build_Relationships_PreReleaseVersion_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_PreReleaseVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'preReleaseVersions';
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

class Build_Relationships_PreReleaseVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_PreReleaseVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_PreReleaseVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_PreReleaseVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_PreReleaseVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_PreReleaseVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_PreReleaseVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_IndividualTesters_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_IndividualTesters_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaTesters';
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

class Build_Relationships_IndividualTesters extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_IndividualTesters_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Build_Relationships_IndividualTesters_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Build_Relationships_IndividualTesters_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_IndividualTesters_Links
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
	* @return  Build_Relationships_IndividualTesters_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_IndividualTesters_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_BetaGroups_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_BetaGroups_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaGroups';
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

class Build_Relationships_BetaGroups extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_BetaGroups_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Build_Relationships_BetaGroups_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Build_Relationships_BetaGroups_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_BetaGroups_Links
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
	* @return  Build_Relationships_BetaGroups_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_BetaGroups_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_BetaBuildLocalizations_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_BetaBuildLocalizations_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaBuildLocalizations';
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

class Build_Relationships_BetaBuildLocalizations extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_BetaBuildLocalizations_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Build_Relationships_BetaBuildLocalizations_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Build_Relationships_BetaBuildLocalizations_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_BetaBuildLocalizations_Links
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
	* @return  Build_Relationships_BetaBuildLocalizations_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_BetaBuildLocalizations_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_AppEncryptionDeclaration_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_AppEncryptionDeclaration_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appEncryptionDeclarations';
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

class Build_Relationships_AppEncryptionDeclaration extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_AppEncryptionDeclaration_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_AppEncryptionDeclaration_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_AppEncryptionDeclaration_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_AppEncryptionDeclaration_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_AppEncryptionDeclaration_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_AppEncryptionDeclaration_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_BetaAppReviewSubmission_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_BetaAppReviewSubmission_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'betaAppReviewSubmissions';
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

class Build_Relationships_BetaAppReviewSubmission extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_BetaAppReviewSubmission_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_BetaAppReviewSubmission_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_BetaAppReviewSubmission_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_BetaAppReviewSubmission_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_BetaAppReviewSubmission_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_BetaAppReviewSubmission_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_App_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_App_Data extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_App extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_App_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_App_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_App_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_App_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_App_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_App_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_BuildBetaDetail_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_BuildBetaDetail_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBetaDetails';
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

class Build_Relationships_BuildBetaDetail extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_BuildBetaDetail_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_BuildBetaDetail_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_BuildBetaDetail_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_BuildBetaDetail_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_BuildBetaDetail_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_BuildBetaDetail_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_AppStoreVersion_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_AppStoreVersion_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'appStoreVersions';
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

class Build_Relationships_AppStoreVersion extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_AppStoreVersion_Links::class;
	protected $linksDataType = 'object';
	protected $dataType = Build_Relationships_AppStoreVersion_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  Build_Relationships_AppStoreVersion_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_AppStoreVersion_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  Build_Relationships_AppStoreVersion_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_AppStoreVersion_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_Icons_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_Icons_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildIcons';
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

class Build_Relationships_Icons extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_Icons_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Build_Relationships_Icons_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Build_Relationships_Icons_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_Icons_Links
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
	* @return  Build_Relationships_Icons_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_Icons_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships_BuildBundles_Links extends \Cantie\AppStoreConnect\Model
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

class Build_Relationships_BuildBundles_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'buildBundles';
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

class Build_Relationships_BuildBundles extends \Cantie\AppStoreConnect\Model
{
	protected $linksType = Build_Relationships_BuildBundles_Links::class;
	protected $linksDataType = 'object';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';
	protected $dataType = Build_Relationships_BuildBundles_Data::class;
	protected $dataDataType = 'array';

	/**
	* @return  Build_Relationships_BuildBundles_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  Build_Relationships_BuildBundles_Links
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
	* @return  Build_Relationships_BuildBundles_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  Build_Relationships_BuildBundles_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class Build_Relationships extends \Cantie\AppStoreConnect\Model
{
	protected $preReleaseVersionType = Build_Relationships_PreReleaseVersion::class;
	protected $preReleaseVersionDataType = 'object';
	protected $individualTestersType = Build_Relationships_IndividualTesters::class;
	protected $individualTestersDataType = 'object';
	protected $betaGroupsType = Build_Relationships_BetaGroups::class;
	protected $betaGroupsDataType = 'object';
	protected $betaBuildLocalizationsType = Build_Relationships_BetaBuildLocalizations::class;
	protected $betaBuildLocalizationsDataType = 'object';
	protected $appEncryptionDeclarationType = Build_Relationships_AppEncryptionDeclaration::class;
	protected $appEncryptionDeclarationDataType = 'object';
	protected $betaAppReviewSubmissionType = Build_Relationships_BetaAppReviewSubmission::class;
	protected $betaAppReviewSubmissionDataType = 'object';
	protected $appType = Build_Relationships_App::class;
	protected $appDataType = 'object';
	protected $buildBetaDetailType = Build_Relationships_BuildBetaDetail::class;
	protected $buildBetaDetailDataType = 'object';
	protected $appStoreVersionType = Build_Relationships_AppStoreVersion::class;
	protected $appStoreVersionDataType = 'object';
	protected $iconsType = Build_Relationships_Icons::class;
	protected $iconsDataType = 'object';
	protected $buildBundlesType = Build_Relationships_BuildBundles::class;
	protected $buildBundlesDataType = 'object';

	/**
	* @return  Build_Relationships_PreReleaseVersion
	*/
	public function getPreReleaseVersion()
	{
		return $this->preReleaseVersion;
	}
	/**
	* @param  Build_Relationships_PreReleaseVersion
	*/
	public function setPreReleaseVersion($preReleaseVersion)
	{
		$this->preReleaseVersion = $preReleaseVersion;
		return $this;
	}
	/**
	* @return  Build_Relationships_IndividualTesters
	*/
	public function getIndividualTesters()
	{
		return $this->individualTesters;
	}
	/**
	* @param  Build_Relationships_IndividualTesters
	*/
	public function setIndividualTesters($individualTesters)
	{
		$this->individualTesters = $individualTesters;
		return $this;
	}
	/**
	* @return  Build_Relationships_BetaGroups
	*/
	public function getBetaGroups()
	{
		return $this->betaGroups;
	}
	/**
	* @param  Build_Relationships_BetaGroups
	*/
	public function setBetaGroups($betaGroups)
	{
		$this->betaGroups = $betaGroups;
		return $this;
	}
	/**
	* @return  Build_Relationships_BetaBuildLocalizations
	*/
	public function getBetaBuildLocalizations()
	{
		return $this->betaBuildLocalizations;
	}
	/**
	* @param  Build_Relationships_BetaBuildLocalizations
	*/
	public function setBetaBuildLocalizations($betaBuildLocalizations)
	{
		$this->betaBuildLocalizations = $betaBuildLocalizations;
		return $this;
	}
	/**
	* @return  Build_Relationships_AppEncryptionDeclaration
	*/
	public function getAppEncryptionDeclaration()
	{
		return $this->appEncryptionDeclaration;
	}
	/**
	* @param  Build_Relationships_AppEncryptionDeclaration
	*/
	public function setAppEncryptionDeclaration($appEncryptionDeclaration)
	{
		$this->appEncryptionDeclaration = $appEncryptionDeclaration;
		return $this;
	}
	/**
	* @return  Build_Relationships_BetaAppReviewSubmission
	*/
	public function getBetaAppReviewSubmission()
	{
		return $this->betaAppReviewSubmission;
	}
	/**
	* @param  Build_Relationships_BetaAppReviewSubmission
	*/
	public function setBetaAppReviewSubmission($betaAppReviewSubmission)
	{
		$this->betaAppReviewSubmission = $betaAppReviewSubmission;
		return $this;
	}
	/**
	* @return  Build_Relationships_App
	*/
	public function getApp()
	{
		return $this->app;
	}
	/**
	* @param  Build_Relationships_App
	*/
	public function setApp($app)
	{
		$this->app = $app;
		return $this;
	}
	/**
	* @return  Build_Relationships_BuildBetaDetail
	*/
	public function getBuildBetaDetail()
	{
		return $this->buildBetaDetail;
	}
	/**
	* @param  Build_Relationships_BuildBetaDetail
	*/
	public function setBuildBetaDetail($buildBetaDetail)
	{
		$this->buildBetaDetail = $buildBetaDetail;
		return $this;
	}
	/**
	* @return  Build_Relationships_AppStoreVersion
	*/
	public function getAppStoreVersion()
	{
		return $this->appStoreVersion;
	}
	/**
	* @param  Build_Relationships_AppStoreVersion
	*/
	public function setAppStoreVersion($appStoreVersion)
	{
		$this->appStoreVersion = $appStoreVersion;
		return $this;
	}
	/**
	* @return  Build_Relationships_Icons
	*/
	public function getIcons()
	{
		return $this->icons;
	}
	/**
	* @param  Build_Relationships_Icons
	*/
	public function setIcons($icons)
	{
		$this->icons = $icons;
		return $this;
	}
	/**
	* @return  Build_Relationships_BuildBundles
	*/
	public function getBuildBundles()
	{
		return $this->buildBundles;
	}
	/**
	* @param  Build_Relationships_BuildBundles
	*/
	public function setBuildBundles($buildBundles)
	{
		$this->buildBundles = $buildBundles;
		return $this;
	}

}

class Build extends \Cantie\AppStoreConnect\Model
{
	public $type = 'builds';
	public $id;
	protected $attributesType = Build_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = Build_Relationships::class;
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
	* @return  Build_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  Build_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  Build_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  Build_Relationships
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

