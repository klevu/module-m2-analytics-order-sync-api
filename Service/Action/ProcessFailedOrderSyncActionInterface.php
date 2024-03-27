<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Action;

use Klevu\AnalyticsOrderSync\Exception\OrderNotValidException;
use Magento\Sales\Api\Data\OrderInterface;

interface ProcessFailedOrderSyncActionInterface
{
    /**
     * @param OrderInterface $order
     * @param string $via
     * @param mixed[] $additionalInformation
     * @return void
     * @throws OrderNotValidException
     */
    public function execute(
        OrderInterface $order,
        string $via = '',
        array $additionalInformation = [],
    ): void;
}
