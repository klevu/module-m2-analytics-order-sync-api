<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Magento\Framework\Api\SearchCriteriaInterface;

interface MagentoOrderIdsProviderInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return int[]
     */
    public function getByCriteria(SearchCriteriaInterface $searchCriteria): array;
}
