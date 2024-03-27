<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

use Klevu\AnalyticsOrderSyncApi\Api\Data\MarkOrderActionResultInterface;

interface MarkOrderAsProcessingActionInterface
{
    /**
     * @param int $orderId
     * @param string $via
     * @param mixed[] $additionalInformation
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\MarkOrderActionResultInterface
     */
    public function execute(
        int $orderId,
        string $via = '',
        array $additionalInformation = [],
    ): MarkOrderActionResultInterface;
}
