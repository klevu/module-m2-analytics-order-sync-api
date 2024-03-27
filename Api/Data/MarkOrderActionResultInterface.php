<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api\Data;

interface MarkOrderActionResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface|null
     */
    public function getSyncOrderRecord(): ?SyncOrderInterface;

    /**
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface|null
     */
    public function getSyncOrderHistoryRecord(): ?SyncOrderHistoryInterface;

    /**
     * @return string[]
     */
    public function getMessages(): array;
}
