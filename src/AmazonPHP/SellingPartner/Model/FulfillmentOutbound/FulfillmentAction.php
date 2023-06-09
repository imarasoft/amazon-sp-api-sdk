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
class FulfillmentAction
{
    /**
     * Possible values of this enum.
     */
    final public const SHIP = 'Ship';

    final public const HOLD = 'Hold';

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
            self::SHIP,
            self::HOLD,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
