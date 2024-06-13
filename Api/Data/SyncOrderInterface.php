<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api\Data;

interface SyncOrderInterface
{
    /**
     * @return int|null
     */
    public function getEntityId(): ?int;

    // phpcs:disable SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
    /**
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId($entityId): self;
    // phpcs:enable SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint

    /**
     * @return int|null
     */
    public function getOrderId(): ?int;

    /**
     * @param int $orderId
     * @return void
     */
    public function setOrderId(int $orderId): void;

    /**
     * @return int|null
     */
    public function getStoreId(): ?int;

    /**
     * @param int $storeId
     * @return void
     */
    public function setStoreId(int $storeId): void;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return void
     */
    public function setStatus(string $status): void;

    /**
     * @return int
     */
    public function getAttempts(): int;

    /**
     * @param int $attempts
     * @return void
     */
    public function setAttempts(int $attempts): void;

    /**
     * @return bool
     */
    public function canInitiateSync(): bool;
}
