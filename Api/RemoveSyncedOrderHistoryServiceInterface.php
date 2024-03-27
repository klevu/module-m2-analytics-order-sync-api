<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

use Klevu\AnalyticsOrderSyncApi\Api\Data\RemoveSyncedOrderHistoryResultInterface;

interface RemoveSyncedOrderHistoryServiceInterface
{
    /**
     * @param string $syncStatus
     * @param int[]|null $storeIds
     * @param int|null $thresholdInDays
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\RemoveSyncedOrderHistoryResultInterface
     */
    public function execute(
        string $syncStatus,
        ?array $storeIds = null,
        ?int $thresholdInDays = null,
    ): RemoveSyncedOrderHistoryResultInterface;
}
