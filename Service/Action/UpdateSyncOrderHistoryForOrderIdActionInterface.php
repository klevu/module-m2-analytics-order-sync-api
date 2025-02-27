<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Action;

use Klevu\AnalyticsOrderSync\Model\Source\SyncOrderHistory\Actions;

interface UpdateSyncOrderHistoryForOrderIdActionInterface
{
    /**
     * @param int $orderId
     * @param Actions|null $action
     * @param string|null $via
     * @param string|null $result
     * @param string[]|null $additionalInformation
     *
     * @return void
     */
    public function execute(
        int $orderId,
        ?Actions $action = null,
        ?string $via = null,
        ?string $result = null,
        ?array $additionalInformation = null,
    ): void;
}
