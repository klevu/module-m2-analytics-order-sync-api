<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api;

use Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

interface SyncOrderHistoryRepositoryInterface
{
    /**
     * @param int $syncOrderHistoryId
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $syncOrderHistoryId): SyncOrderHistoryInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface;

    /**
     * @param \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface $syncOrderHistory
     * @return \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function save(SyncOrderHistoryInterface $syncOrderHistory): SyncOrderHistoryInterface;

    /**
     * @param \Klevu\AnalyticsOrderSyncApi\Api\Data\SyncOrderHistoryInterface $syncOrderHistory
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SyncOrderHistoryInterface $syncOrderHistory): void;

    /**
     * @param int $syncOrderHistoryId
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById(int $syncOrderHistoryId): void;

    /**
     * @return void
     */
    public function clearCache(): void;
}
