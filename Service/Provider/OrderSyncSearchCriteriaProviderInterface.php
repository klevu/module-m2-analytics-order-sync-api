<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Magento\Framework\Api\SearchCriteriaInterface;

interface OrderSyncSearchCriteriaProviderInterface
{
    /**
     * @param int[]|null $orderIds
     * @param string[]|null $syncStatuses
     * @param int[]|null $storeIds
     * @param int $currentPage
     * @param int $pageSize
     * @return SearchCriteriaInterface
     */
    public function getSearchCriteria(
        ?array $orderIds = null,
        ?array $syncStatuses = null,
        ?array $storeIds = null,
        int $currentPage = 1,
        int $pageSize = 250,
    ): SearchCriteriaInterface;
}
