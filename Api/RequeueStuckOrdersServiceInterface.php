<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

use Klevu\AnalyticsOrderSyncApi\Api\Data\RequeueStuckOrdersResultInterface;

interface RequeueStuckOrdersServiceInterface
{
    /**
     * @param int[]|null $storeIds
     * @param int|null $thresholdInMinutes
     * @param string $via
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\RequeueStuckOrdersResultInterface
     * @throws \InvalidArgumentException
     */
    public function execute(
        ?array $storeIds = null,
        ?int $thresholdInMinutes = null,
        string $via = '',
    ): RequeueStuckOrdersResultInterface;
}
