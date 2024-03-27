<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

interface PermittedOrderStatusProviderInterface
{
    /**
     * @param int $storeId
     * @return string[]
     */
    public function getForStore(int $storeId): array;
}
