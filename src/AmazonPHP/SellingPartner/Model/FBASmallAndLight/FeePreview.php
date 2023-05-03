<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBASmallAndLight;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeePreview implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeePreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'price' => '\AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType',
        'fee_breakdown' => '\AmazonPHP\SellingPartner\Model\FBASmallAndLight\FeeLineItem[]',
        'total_fees' => '\AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType',
        'errors' => '\AmazonPHP\SellingPartner\Model\FBASmallAndLight\Error[]',
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
        'asin' => null,
        'price' => null,
        'fee_breakdown' => null,
        'total_fees' => null,
        'errors' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'asin',
        'price' => 'price',
        'fee_breakdown' => 'feeBreakdown',
        'total_fees' => 'totalFees',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'price' => 'setPrice',
        'fee_breakdown' => 'setFeeBreakdown',
        'total_fees' => 'setTotalFees',
        'errors' => 'setErrors',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'price' => 'getPrice',
        'fee_breakdown' => 'getFeeBreakdown',
        'total_fees' => 'getTotalFees',
        'errors' => 'getErrors',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['fee_breakdown'] = $data['fee_breakdown'] ?? null;
        $this->container['total_fees'] = $data['total_fees'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
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
        if ($this->container['price'] !== null) {
            $this->container['price']->validate();
        }

        if ($this->container['total_fees'] !== null) {
            $this->container['total_fees']->validate();
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) value used to identify the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets price.
     */
    public function getPrice() : ?MoneyType
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType $price price
     */
    public function setPrice(?MoneyType $price) : self
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets fee_breakdown.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\FeeLineItem[]
     */
    public function getFeeBreakdown() : ?array
    {
        return $this->container['fee_breakdown'];
    }

    /**
     * Sets fee_breakdown.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\FeeLineItem[] $fee_breakdown a list of the Small and Light fees for the item
     */
    public function setFeeBreakdown(?array $fee_breakdown) : self
    {
        $this->container['fee_breakdown'] = $fee_breakdown;

        return $this;
    }

    /**
     * Gets total_fees.
     */
    public function getTotalFees() : ?MoneyType
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\MoneyType $total_fees total_fees
     */
    public function setTotalFees(?MoneyType $total_fees) : self
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\Error[]
     */
    public function getErrors() : ?array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FBASmallAndLight\Error[] $errors one or more unexpected errors occurred during the getSmallAndLightFeePreview operation
     */
    public function setErrors(?array $errors) : self
    {
        $this->container['errors'] = $errors;

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
