<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ReturnItemDisposition
{
    /**
     * Possible values of this enum.
     */
    final public const SELLABLE = 'Sellable';

    final public const DEFECTIVE = 'Defective';

    final public const CUSTOMER_DAMAGED = 'CustomerDamaged';

    final public const CARRIER_DAMAGED = 'CarrierDamaged';

    final public const FULFILLER_DAMAGED = 'FulfillerDamaged';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::SELLABLE,
            self::DEFECTIVE,
            self::CUSTOMER_DAMAGED,
            self::CARRIER_DAMAGED,
            self::FULFILLER_DAMAGED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
