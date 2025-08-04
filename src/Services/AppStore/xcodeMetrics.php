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

class xcodeMetrics_Insights extends \Cantie\AppStoreConnect\Model
{
	protected $trendingUpType = MetricsInsight::class;
	protected $trendingUpDataType = 'array';
	protected $regressionsType = MetricsInsight::class;
	protected $regressionsDataType = 'array';

	/**
	* @return  MetricsInsight[]
	*/
	public function getTrendingUp()
	{
		return $this->trendingUp;
	}
	/**
	* @param  MetricsInsight[]
	*/
	public function setTrendingUp($trendingUp)
	{
		$this->trendingUp = $trendingUp;
		return $this;
	}
	/**
	* @return  MetricsInsight[]
	*/
	public function getRegressions()
	{
		return $this->regressions;
	}
	/**
	* @param  MetricsInsight[]
	*/
	public function setRegressions($regressions)
	{
		$this->regressions = $regressions;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_GoalKeys extends \Cantie\AppStoreConnect\Model
{
	public $goalKey;
	public $lowerBound;
	public $upperBound;

	public function getGoalKey()
	{
		return $this->goalKey;
	}
	public function setGoalKey($goalKey)
	{
		$this->goalKey = $goalKey;
		return $this;
	}
	public function getLowerBound()
	{
		return $this->lowerBound;
	}
	public function setLowerBound($lowerBound)
	{
		$this->lowerBound = $lowerBound;
		return $this;
	}
	public function getUpperBound()
	{
		return $this->upperBound;
	}
	public function setUpperBound($upperBound)
	{
		$this->upperBound = $upperBound;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_Unit extends \Cantie\AppStoreConnect\Model
{
	public $identifier;
	public $displayName;

	public function getIdentifier()
	{
		return $this->identifier;
	}
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $this;
	}
	public function getDisplayName()
	{
		return $this->displayName;
	}
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_FilterCriteria extends \Cantie\AppStoreConnect\Model
{
	public $percentile;
	public $device;
	public $deviceMarketingName;

	public function getPercentile()
	{
		return $this->percentile;
	}
	public function setPercentile($percentile)
	{
		$this->percentile = $percentile;
		return $this;
	}
	public function getDevice()
	{
		return $this->device;
	}
	public function setDevice($device)
	{
		$this->device = $device;
		return $this;
	}
	public function getDeviceMarketingName()
	{
		return $this->deviceMarketingName;
	}
	public function setDeviceMarketingName($deviceMarketingName)
	{
		$this->deviceMarketingName = $deviceMarketingName;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points_PercentageBreakdown extends \Cantie\AppStoreConnect\Model
{
	public $value;
	public $subSystemLabel;

	public function getValue()
	{
		return $this->value;
	}
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}
	public function getSubSystemLabel()
	{
		return $this->subSystemLabel;
	}
	public function setSubSystemLabel($subSystemLabel)
	{
		$this->subSystemLabel = $subSystemLabel;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points extends \Cantie\AppStoreConnect\Model
{
	public $version;
	public $value;
	public $errorMargin;
	protected $percentageBreakdownType = xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points_PercentageBreakdown::class;
	protected $percentageBreakdownDataType = 'object';
	public $goal;

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function setValue($value)
	{
		$this->value = $value;
		return $this;
	}
	public function getErrorMargin()
	{
		return $this->errorMargin;
	}
	public function setErrorMargin($errorMargin)
	{
		$this->errorMargin = $errorMargin;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points_PercentageBreakdown
	*/
	public function getPercentageBreakdown()
	{
		return $this->percentageBreakdown;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points_PercentageBreakdown
	*/
	public function setPercentageBreakdown($percentageBreakdown)
	{
		$this->percentageBreakdown = $percentageBreakdown;
		return $this;
	}
	public function getGoal()
	{
		return $this->goal;
	}
	public function setGoal($goal)
	{
		$this->goal = $goal;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets extends \Cantie\AppStoreConnect\Model
{
	protected $filterCriteriaType = xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_FilterCriteria::class;
	protected $filterCriteriaDataType = 'object';
	protected $pointsType = xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points::class;
	protected $pointsDataType = 'array';

	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_FilterCriteria
	*/
	public function getFilterCriteria()
	{
		return $this->filterCriteria;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_FilterCriteria
	*/
	public function setFilterCriteria($filterCriteria)
	{
		$this->filterCriteria = $filterCriteria;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points[]
	*/
	public function getPoints()
	{
		return $this->points;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets_Points[]
	*/
	public function setPoints($points)
	{
		$this->points = $points;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories_Metrics extends \Cantie\AppStoreConnect\Model
{
	public $identifier;
	protected $goalKeysType = xcodeMetrics_ProductData_MetricCategories_Metrics_GoalKeys::class;
	protected $goalKeysDataType = 'array';
	protected $unitType = xcodeMetrics_ProductData_MetricCategories_Metrics_Unit::class;
	protected $unitDataType = 'object';
	protected $datasetsType = xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets::class;
	protected $datasetsDataType = 'array';

	public function getIdentifier()
	{
		return $this->identifier;
	}
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_GoalKeys[]
	*/
	public function getGoalKeys()
	{
		return $this->goalKeys;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_GoalKeys[]
	*/
	public function setGoalKeys($goalKeys)
	{
		$this->goalKeys = $goalKeys;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_Unit
	*/
	public function getUnit()
	{
		return $this->unit;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_Unit
	*/
	public function setUnit($unit)
	{
		$this->unit = $unit;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets[]
	*/
	public function getDatasets()
	{
		return $this->datasets;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics_Datasets[]
	*/
	public function setDatasets($datasets)
	{
		$this->datasets = $datasets;
		return $this;
	}

}

class xcodeMetrics_ProductData_MetricCategories extends \Cantie\AppStoreConnect\Model
{
	public $identifier; // 
	protected $metricsType = xcodeMetrics_ProductData_MetricCategories_Metrics::class;
	protected $metricsDataType = 'array';

	/**
	* @return  string
	*/
	public function getIdentifier()
	{
		return $this->identifier;
	}
	/**
	* @param  string
	*/
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories_Metrics[]
	*/
	public function getMetrics()
	{
		return $this->metrics;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories_Metrics[]
	*/
	public function setMetrics($metrics)
	{
		$this->metrics = $metrics;
		return $this;
	}

}

class xcodeMetrics_ProductData extends \Cantie\AppStoreConnect\Model
{
	public $platform;
	protected $metricCategoriesType = xcodeMetrics_ProductData_MetricCategories::class;
	protected $metricCategoriesDataType = 'array';

	public function getPlatform()
	{
		return $this->platform;
	}
	public function setPlatform($platform)
	{
		$this->platform = $platform;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData_MetricCategories[]
	*/
	public function getMetricCategories()
	{
		return $this->metricCategories;
	}
	/**
	* @param  xcodeMetrics_ProductData_MetricCategories[]
	*/
	public function setMetricCategories($metricCategories)
	{
		$this->metricCategories = $metricCategories;
		return $this;
	}

}

class xcodeMetrics extends \Cantie\AppStoreConnect\Model
{
	public $version;
	protected $insightsType = xcodeMetrics_Insights::class;
	protected $insightsDataType = 'object';
	protected $productDataType = xcodeMetrics_ProductData::class;
	protected $productDataDataType = 'array';

	public function getVersion()
	{
		return $this->version;
	}
	public function setVersion($version)
	{
		$this->version = $version;
		return $this;
	}
	/**
	* @return  xcodeMetrics_Insights
	*/
	public function getInsights()
	{
		return $this->insights;
	}
	/**
	* @param  xcodeMetrics_Insights
	*/
	public function setInsights($insights)
	{
		$this->insights = $insights;
		return $this;
	}
	/**
	* @return  xcodeMetrics_ProductData[]
	*/
	public function getProductData()
	{
		return $this->productData;
	}
	/**
	* @param  xcodeMetrics_ProductData[]
	*/
	public function setProductData($productData)
	{
		$this->productData = $productData;
		return $this;
	}

}

