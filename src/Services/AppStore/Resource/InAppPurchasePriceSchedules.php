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

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceScheduleResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceScheduleCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePricesResponse;
use Cantie\AppStoreConnect\Services\AppStore\TerritoryResponse;

/**
 * The "inAppPurchasePriceSchedules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $inAppPurchasePriceSchedules = $appStoreService->inAppPurchasePriceSchedules;
 *  </code>
 */
class InAppPurchasePriceSchedules extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param InAppPurchasePriceScheduleCreateRequest $postBody
     * @return InAppPurchasePriceScheduleResponse
     */
    public function createInAppPurchasePriceSchedules(InAppPurchasePriceScheduleCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createInAppPurchasePriceSchedules', [$params], InAppPurchasePriceScheduleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasePriceScheduleResponse
     */
    public function getInAppPurchasePriceSchedules($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasePriceSchedules', [$params], InAppPurchasePriceScheduleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasePricesResponse
     */
    public function listInAppPurchasePriceSchedulesAutomaticPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listInAppPurchasePriceSchedulesAutomaticPrices', [$params], InAppPurchasePricesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return TerritoryResponse
     */
    public function getInAppPurchasePriceSchedulesBaseTerritory($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasePriceSchedulesBaseTerritory', [$params], TerritoryResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasePricesResponse
     */
    public function listInAppPurchasePriceSchedulesManualPrices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listInAppPurchasePriceSchedulesManualPrices', [$params], InAppPurchasePricesResponse::class);
    }
}

