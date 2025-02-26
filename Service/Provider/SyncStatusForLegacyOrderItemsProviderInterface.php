<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Klevu\AnalyticsOrderSync\Model\Source\SyncOrder\Statuses;

interface SyncStatusForLegacyOrderItemsProviderInterface
{
    /**
     * @param array<string, int|numeric-string> $orderItems
     *
     * @return Statuses
     */
    public function get(array $orderItems): Statuses;
}
