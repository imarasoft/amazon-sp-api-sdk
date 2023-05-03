<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\APlus;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PublishRecord implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PublishRecord';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'locale' => 'string',
        'asin' => 'string',
        'content_type' => '\AmazonPHP\SellingPartner\Model\APlus\ContentType',
        'content_sub_type' => 'string',
        'content_reference_key' => 'string',
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
        'marketplace_id' => null,
        'locale' => null,
        'asin' => null,
        'content_type' => null,
        'content_sub_type' => null,
        'content_reference_key' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'locale' => 'locale',
        'asin' => 'asin',
        'content_type' => 'contentType',
        'content_sub_type' => 'contentSubType',
        'content_reference_key' => 'contentReferenceKey',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'locale' => 'setLocale',
        'asin' => 'setAsin',
        'content_type' => 'setContentType',
        'content_sub_type' => 'setContentSubType',
        'content_reference_key' => 'setContentReferenceKey',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'locale' => 'getLocale',
        'asin' => 'getAsin',
        'content_type' => 'getContentType',
        'content_sub_type' => 'getContentSubType',
        'content_reference_key' => 'getContentReferenceKey',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['content_sub_type'] = $data['content_sub_type'] ?? null;
        $this->container['content_reference_key'] = $data['content_reference_key'] ?? null;
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
        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['marketplace_id']) < 1)) {
            throw new AssertionException("invalid value for 'marketplace_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['locale'] === null) {
            throw new AssertionException("'locale' can't be null");
        }

        if ((\mb_strlen((string) $this->container['locale']) < 5)) {
            throw new AssertionException("invalid value for 'locale', the character length must be bigger than or equal to 5.");
        }

        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }

        if ((\mb_strlen((string) $this->container['asin']) < 10)) {
            throw new AssertionException("invalid value for 'asin', the character length must be bigger than or equal to 10.");
        }

        if ($this->container['content_type'] === null) {
            throw new AssertionException("'content_type' can't be null");
        }

        if (null !== $this->container['content_sub_type'] && (\mb_strlen((string) $this->container['content_sub_type']) < 1)) {
            throw new AssertionException("invalid value for 'content_sub_type', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['content_reference_key'] === null) {
            throw new AssertionException("'content_reference_key' can't be null");
        }

        if ((\mb_strlen((string) $this->container['content_reference_key']) < 1)) {
            throw new AssertionException("invalid value for 'content_reference_key', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace where the A+ Content is published
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets locale.
     */
    public function getLocale() : string
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string $locale The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags. **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     */
    public function setLocale(string $locale) : self
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN)
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets content_type.
     */
    public function getContentType() : ContentType
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentType $content_type content_type
     */
    public function setContentType(ContentType $content_type) : self
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_sub_type.
     */
    public function getContentSubType() : ?string
    {
        return $this->container['content_sub_type'];
    }

    /**
     * Sets content_sub_type.
     *
     * @param null|string $content_sub_type The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     */
    public function setContentSubType(?string $content_sub_type) : self
    {
        $this->container['content_sub_type'] = $content_sub_type;

        return $this;
    }

    /**
     * Gets content_reference_key.
     */
    public function getContentReferenceKey() : string
    {
        return $this->container['content_reference_key'];
    }

    /**
     * Sets content_reference_key.
     *
     * @param string $content_reference_key A unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     */
    public function setContentReferenceKey(string $content_reference_key) : self
    {
        $this->container['content_reference_key'] = $content_reference_key;

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
