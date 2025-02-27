<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

interface LegacyDataProviderInterface
{
    /**
     * @param int $storeId
     *
     * @return \Generator<array<string, int>>
     */
    public function getForStoreId(int $storeId): \Generator;
}
