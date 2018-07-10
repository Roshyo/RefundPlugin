<?php

declare(strict_types=1);

namespace Sylius\RefundPlugin\Factory;

use Sylius\RefundPlugin\Entity\Refund;
use Sylius\RefundPlugin\Entity\RefundInterface;

final class RefundFactory implements RefundFactoryInterface
{
    public function createWithData(string $orderNumber, int $unitId, int $amount): RefundInterface
    {
        $refund = new Refund();
        $refund->setOrderNumber($orderNumber);
        $refund->setRefundedUnitId($unitId);
        $refund->setAmount($amount);

        return $refund;
    }
}