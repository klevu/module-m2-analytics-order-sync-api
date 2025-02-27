<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\AnalyticsOrderSyncApi\Service\Action;

interface ScheduleMigrateLegacyOrderSyncRecordsCronActionInterface
{
    /**
     * @param \DateTimeInterface|null $scheduleAt
     *
     * @return bool
     */
    public function execute(?\DateTimeInterface $scheduleAt = null): bool;
}
