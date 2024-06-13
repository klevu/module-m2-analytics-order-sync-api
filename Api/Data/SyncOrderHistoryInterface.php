<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api\Data;

interface SyncOrderHistoryInterface
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
    public function getSyncOrderId(): ?int;

    /**
     * @param int|null $syncOrderId
     * @return void
     */
    public function setSyncOrderId(?int $syncOrderId): void;

    /**
     * @return string|null
     */
    public function getTimestamp(): ?string;

    /**
     * @param string $timestamp
     * @return void
     */
    public function setTimestamp(string $timestamp): void;

    /**
     * @return string|null
     */
    public function getAction(): ?string;

    /**
     * @param string $action
     * @return void
     */
    public function setAction(string $action): void;

    /**
     * @return string|null
     */
    public function getVia(): ?string;

    /**
     * @param string $via
     * @return void
     */
    public function setVia(string $via): void;

    /**
     * @return string|null
     */
    public function getResult(): ?string;

    /**
     * @param string $result
     * @return void
     */
    public function setResult(string $result): void;

    /**
     * @return mixed[]|null
     */
    public function getAdditionalInformation(): ?array;

    /**
     * @param mixed[] $additionalInformation
     * @return void
     */
    public function setAdditionalInformation(array $additionalInformation): void;
}
