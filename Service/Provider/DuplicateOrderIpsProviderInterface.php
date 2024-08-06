<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

interface DuplicateOrderIpsProviderInterface
{
    /**
     * @param int|null $storeId
     * @param string $ipField
     * @param int $periodDays
     * @param float $threshold
     *
     * @return array<string, int>
     */
    public function get(
        ?int $storeId,
        string $ipField,
        int $periodDays,
        float $threshold,
    ): array;
}
