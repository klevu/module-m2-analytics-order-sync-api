<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Klevu\AnalyticsOrderSync\Exception\OrderNotFoundException;
use Klevu\AnalyticsOrderSync\Exception\OrderNotValidException;
use Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface;
use Magento\Sales\Api\Data\OrderInterface;

interface SyncOrderForOrderProviderInterface
{
    /**
     * @param OrderInterface $order
     * @return SyncOrderInterface
     * @throws OrderNotFoundException
     * @throws OrderNotValidException
     */
    public function getForOrder(OrderInterface $order): SyncOrderInterface;

    /**
     * @param int $orderId
     * @return SyncOrderInterface
     * @throws OrderNotFoundException
     */
    public function getForOrderId(int $orderId): SyncOrderInterface;
}
