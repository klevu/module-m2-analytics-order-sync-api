<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\AnalyticsOrderSyncApi\Api\Data;

use Klevu\AnalyticsOrderSync\Model\Source\SyncOrderHistory\Actions;
use Klevu\AnalyticsOrderSync\Model\Source\SyncOrderHistory\Results;
use Magento\Framework\ObjectManagerInterface;

class SyncOrderHistoryInterfaceFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private readonly ObjectManagerInterface $objectManager;
    /**
     * @var string
     */
    private readonly string $instanceName;

    /**
     * @param ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        string $instanceName = SyncOrderHistoryInterface::class,
    ) {
        $this->objectManager = $objectManager;
        $this->instanceName = $instanceName;
    }

    /**
     * @param mixed[] $data
     * @return SyncOrderHistoryInterface
     */
    public function create(array $data = []): SyncOrderHistoryInterface
    {
        return $this->objectManager->create(
            type: $this->instanceName,
            arguments: $data,
        );
    }

    /**
     * @param SyncOrderInterface $syncOrder
     * @param mixed[] $data
     * @param string|Actions|null $action
     * @param string|null $via
     * @param string|Results|null $result
     * @param mixed[]|null $additionalInformation
     * @return SyncOrderHistoryInterface
     * @throws \ValueError
     */
    public function createFromSyncOrder(
        SyncOrderInterface $syncOrder,
        array $data = [],
        string|Actions|null $action = null,
        ?string $via = null,
        string|Results|null $result = null,
        ?array $additionalInformation = null,
    ): SyncOrderHistoryInterface {
        $syncOrderHistory = $this->create($data);

        if ($syncOrder->getEntityId()) {
            $syncOrderHistory->setSyncOrderId($syncOrder->getEntityId());
        }

        if (is_string($action)) {
            $action = Actions::from($action);
        }
        if (null !== $action) {
            $syncOrderHistory->setAction($action->value);
        }

        if (null !== $via) {
            $syncOrderHistory->setVia($via);
        }

        if (is_string($result)) {
            $result = Results::from($result);
        }
        if (null !== $result) {
            $syncOrderHistory->setResult($result->value);
        }

        $additionalInformation ??= [];
        $additionalInformation['order_id'] = $syncOrder->getOrderId();
        $additionalInformation['store_id'] = $syncOrder->getStoreId();
        $syncOrderHistory->setAdditionalInformation($additionalInformation);

        return $syncOrderHistory;
    }
}
