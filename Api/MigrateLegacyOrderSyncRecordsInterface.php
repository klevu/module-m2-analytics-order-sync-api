<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

interface MigrateLegacyOrderSyncRecordsInterface
{
    /**
     * @param int $storeId
     *
     * @return void
     */
    public function executeForStoreId(int $storeId): void;

    /**
     * @return void
     */
    public function executeForAllStores(): void;
}
