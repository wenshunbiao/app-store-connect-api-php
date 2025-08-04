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

use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2Response;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2CreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseV2UpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAppStoreReviewScreenshotResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseContentResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchasePriceScheduleResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseAvailabilityResponse;
use Cantie\AppStoreConnect\Services\AppStore\InAppPurchaseLocalizationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\csv;
use Cantie\AppStoreConnect\Services\AppStore\PromotedPurchaseResponse;

/**
 * The "inAppPurchases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $inAppPurchases = $appStoreService->inAppPurchases;
 *  </code>
 */
class InAppPurchases extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseResponse
     */
    public function getInAppPurchasesV1($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesV1', [$params], InAppPurchaseResponse::class);
    }
    /**
	 * @param InAppPurchaseV2CreateRequest $postBody
     * @return InAppPurchaseV2Response
     */
    public function createInAppPurchases(InAppPurchaseV2CreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createInAppPurchases', [$params], InAppPurchaseV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseV2Response
     */
    public function getInAppPurchasesV2($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesV2', [$params], InAppPurchaseV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param InAppPurchaseV2UpdateRequest $postBody
     * @return InAppPurchaseV2Response
     */
    public function updateInAppPurchases($id, InAppPurchaseV2UpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateInAppPurchases', [$params], InAppPurchaseV2Response::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteInAppPurchases($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteInAppPurchases', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseAppStoreReviewScreenshotResponse
     */
    public function getInAppPurchasesAppStoreReviewScreenshot($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesAppStoreReviewScreenshot', [$params], InAppPurchaseAppStoreReviewScreenshotResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseContentResponse
     */
    public function getInAppPurchasesContent($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesContent', [$params], InAppPurchaseContentResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchasePriceScheduleResponse
     */
    public function getInAppPurchasesIapPriceSchedule($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesIapPriceSchedule', [$params], InAppPurchasePriceScheduleResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseAvailabilityResponse
     */
    public function getInAppPurchasesInAppPurchaseAvailability($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesInAppPurchaseAvailability', [$params], InAppPurchaseAvailabilityResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return InAppPurchaseLocalizationsResponse
     */
    public function listInAppPurchasesInAppPurchaseLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listInAppPurchasesInAppPurchaseLocalizations', [$params], InAppPurchaseLocalizationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return csv
     */
    public function listInAppPurchasesPricePoints($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listInAppPurchasesPricePoints', [$params], csv::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return PromotedPurchaseResponse
     */
    public function getInAppPurchasesPromotedPurchase($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getInAppPurchasesPromotedPurchase', [$params], PromotedPurchaseResponse::class);
    }
}

