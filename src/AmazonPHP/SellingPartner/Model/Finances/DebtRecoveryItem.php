<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DebtRecoveryItem implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'DebtRecoveryItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'recovery_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'original_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'group_begin_date' => '\DateTimeInterface',
        'group_end_date' => '\DateTimeInterface',
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
        'recovery_amount' => null,
        'original_amount' => null,
        'group_begin_date' => 'date-time',
        'group_end_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'recovery_amount' => 'RecoveryAmount',
        'original_amount' => 'OriginalAmount',
        'group_begin_date' => 'GroupBeginDate',
        'group_end_date' => 'GroupEndDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'recovery_amount' => 'setRecoveryAmount',
        'original_amount' => 'setOriginalAmount',
        'group_begin_date' => 'setGroupBeginDate',
        'group_end_date' => 'setGroupEndDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'recovery_amount' => 'getRecoveryAmount',
        'original_amount' => 'getOriginalAmount',
        'group_begin_date' => 'getGroupBeginDate',
        'group_end_date' => 'getGroupEndDate',
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
        $this->container['recovery_amount'] = $data['recovery_amount'] ?? null;
        $this->container['original_amount'] = $data['original_amount'] ?? null;
        $this->container['group_begin_date'] = $data['group_begin_date'] ?? null;
        $this->container['group_end_date'] = $data['group_end_date'] ?? null;
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
        if ($this->container['recovery_amount'] !== null) {
            $this->container['recovery_amount']->validate();
        }

        if ($this->container['original_amount'] !== null) {
            $this->container['original_amount']->validate();
        }
    }

    /**
     * Gets recovery_amount.
     */
    public function getRecoveryAmount() : ?Currency
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $recovery_amount recovery_amount
     */
    public function setRecoveryAmount(?Currency $recovery_amount) : self
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets original_amount.
     */
    public function getOriginalAmount() : ?Currency
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $original_amount original_amount
     */
    public function setOriginalAmount(?Currency $original_amount) : self
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets group_begin_date.
     */
    public function getGroupBeginDate() : ?\DateTimeInterface
    {
        return $this->container['group_begin_date'];
    }

    /**
     * Sets group_begin_date.
     *
     * @param null|\DateTimeInterface $group_begin_date group_begin_date
     */
    public function setGroupBeginDate(?\DateTimeInterface $group_begin_date) : self
    {
        $this->container['group_begin_date'] = $group_begin_date;

        return $this;
    }

    /**
     * Gets group_end_date.
     */
    public function getGroupEndDate() : ?\DateTimeInterface
    {
        return $this->container['group_end_date'];
    }

    /**
     * Sets group_end_date.
     *
     * @param null|\DateTimeInterface $group_end_date group_end_date
     */
    public function setGroupEndDate(?\DateTimeInterface $group_end_date) : self
    {
        $this->container['group_end_date'] = $group_end_date;

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
