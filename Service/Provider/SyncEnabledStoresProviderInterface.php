<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Magento\Store\Api\Data\StoreInterface;

interface SyncEnabledStoresProviderInterface
{
    /**
     * @return StoreInterface[]
     */
    public function get(): array;

    /**
     * @return void
     */
    public function clearCache(): void;
}
