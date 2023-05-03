<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
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
class RegulatedInformationField implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const FIELD_TYPE_TEXT = 'Text';

    final public const FIELD_TYPE_FILE_ATTACHMENT = 'FileAttachment';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RegulatedInformationField';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'field_id' => 'string',
        'field_label' => 'string',
        'field_type' => 'string',
        'field_value' => 'string',
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
        'field_id' => null,
        'field_label' => null,
        'field_type' => null,
        'field_value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'field_id' => 'FieldId',
        'field_label' => 'FieldLabel',
        'field_type' => 'FieldType',
        'field_value' => 'FieldValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'field_id' => 'setFieldId',
        'field_label' => 'setFieldLabel',
        'field_type' => 'setFieldType',
        'field_value' => 'setFieldValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'field_id' => 'getFieldId',
        'field_label' => 'getFieldLabel',
        'field_type' => 'getFieldType',
        'field_value' => 'getFieldValue',
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
        $this->container['field_id'] = $data['field_id'] ?? null;
        $this->container['field_label'] = $data['field_label'] ?? null;
        $this->container['field_type'] = $data['field_type'] ?? null;
        $this->container['field_value'] = $data['field_value'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues() : array
    {
        return [
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_FILE_ATTACHMENT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['field_id'] === null) {
            throw new AssertionException("'field_id' can't be null");
        }

        if ($this->container['field_label'] === null) {
            throw new AssertionException("'field_label' can't be null");
        }

        if ($this->container['field_type'] === null) {
            throw new AssertionException("'field_type' can't be null");
        }

        $allowedValues = $this->getFieldTypeAllowableValues();

        if (null !== $this->container['field_type'] && !\in_array($this->container['field_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'field_type', must be one of '%s'",
                    $this->container['field_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['field_value'] === null) {
            throw new AssertionException("'field_value' can't be null");
        }
    }

    /**
     * Gets field_id.
     */
    public function getFieldId() : string
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id.
     *
     * @param string $field_id the unique identifier for the field
     */
    public function setFieldId(string $field_id) : self
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_label.
     */
    public function getFieldLabel() : string
    {
        return $this->container['field_label'];
    }

    /**
     * Sets field_label.
     *
     * @param string $field_label the name for the field
     */
    public function setFieldLabel(string $field_label) : self
    {
        $this->container['field_label'] = $field_label;

        return $this;
    }

    /**
     * Gets field_type.
     */
    public function getFieldType() : string
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type.
     *
     * @param string $field_type the type of field
     */
    public function setFieldType(string $field_type) : self
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_value.
     */
    public function getFieldValue() : string
    {
        return $this->container['field_value'];
    }

    /**
     * Sets field_value.
     *
     * @param string $field_value The content of the field as collected in regulatory form. Note that FileAttachment type fields will contain a URL to download the attachment here.
     */
    public function setFieldValue(string $field_value) : self
    {
        $this->container['field_value'] = $field_value;

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
