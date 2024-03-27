<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

use Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

interface SyncOrderRepositoryInterface
{
    /**
     * @param int $syncOrderId
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $syncOrderId): SyncOrderInterface;

    /**
     * @param int $orderId
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByOrderId(int $orderId): SyncOrderInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface;

    /**
     * @param \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface $syncOrder
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(SyncOrderInterface $syncOrder): SyncOrderInterface;

    /**
     * @param \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderInterface $syncOrder
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SyncOrderInterface $syncOrder): void;

    /**
     * @param int $syncOrderId
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $syncOrderId): void;

    /**
     * @return void
     */
    public function clearCache(): void;
}
