<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api\Data;

interface RequeueStuckOrdersResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @param bool $isSuccess
     * @return void
     */
    public function setIsSuccess(bool $isSuccess): void;

    /**
     * @return string[]
     */
    public function getMessages(): array;

    /**
     * @param string $message
     * @return void
     */
    public function addMessage(string $message): void;

    /**
     * @return int
     */
    public function getSuccessCount(): int;

    /**
     * @param int $successCount
     * @return void
     */
    public function setSuccessCount(int $successCount): void;

    /**
     * @return int
     */
    public function getErrorCount(): int;

    /**
     * @param int $errorCount
     * @return void
     */
    public function setErrorCount(int $errorCount): void;
}
