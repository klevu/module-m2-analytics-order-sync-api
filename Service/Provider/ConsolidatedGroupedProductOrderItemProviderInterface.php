<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Provider;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\Data\OrderItemInterface;

interface ConsolidatedGroupedProductOrderItemProviderInterface
{
    /**
     * @param OrderInterface $order
     * @return OrderItemInterface[]
     */
    public function getForOrder(OrderInterface $order): array;
}
