<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentShipmentPackage implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FulfillmentShipmentPackage';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'package_number' => 'int',
        'carrier_code' => 'string',
        'tracking_number' => 'string',
        'estimated_arrival_date' => '\DateTimeInterface',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'package_number' => 'int32',
        'carrier_code' => null,
        'tracking_number' => null,
        'estimated_arrival_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'package_number' => 'packageNumber',
        'carrier_code' => 'carrierCode',
        'tracking_number' => 'trackingNumber',
        'estimated_arrival_date' => 'estimatedArrivalDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_number' => 'setPackageNumber',
        'carrier_code' => 'setCarrierCode',
        'tracking_number' => 'setTrackingNumber',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_number' => 'getPackageNumber',
        'carrier_code' => 'getCarrierCode',
        'tracking_number' => 'getTrackingNumber',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['package_number'] === null) {
            throw new AssertionException("'package_number' can't be null");
        }

        if ($this->container['carrier_code'] === null) {
            throw new AssertionException("'carrier_code' can't be null");
        }
    }

    /**
     * Gets package_number.
     */
    public function getPackageNumber() : int
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number.
     *
     * @param int $package_number identifies a package in a shipment
     */
    public function setPackageNumber(int $package_number) : self
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets carrier_code.
     */
    public function getCarrierCode() : string
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param string $carrier_code identifies the carrier who will deliver the shipment to the recipient
     */
    public function setCarrierCode(string $carrier_code) : self
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets tracking_number.
     */
    public function getTrackingNumber() : ?string
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param null|string $tracking_number the tracking number, if provided, can be used to obtain tracking and delivery information
     */
    public function setTrackingNumber(?string $tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     */
    public function getEstimatedArrivalDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param null|\DateTimeInterface $estimated_arrival_date estimated_arrival_date
     */
    public function setEstimatedArrivalDate(?\DateTimeInterface $estimated_arrival_date) : self
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
