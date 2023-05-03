<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Label implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Label';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'custom_text_for_label' => 'string',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelDimensions',
        'file_contents' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\FileContents',
        'label_format' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat',
        'standard_id_for_label' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\StandardIdForLabel',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'custom_text_for_label' => null,
        'dimensions' => null,
        'file_contents' => null,
        'label_format' => null,
        'standard_id_for_label' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'custom_text_for_label' => 'CustomTextForLabel',
        'dimensions' => 'Dimensions',
        'file_contents' => 'FileContents',
        'label_format' => 'LabelFormat',
        'standard_id_for_label' => 'StandardIdForLabel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'custom_text_for_label' => 'setCustomTextForLabel',
        'dimensions' => 'setDimensions',
        'file_contents' => 'setFileContents',
        'label_format' => 'setLabelFormat',
        'standard_id_for_label' => 'setStandardIdForLabel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'custom_text_for_label' => 'getCustomTextForLabel',
        'dimensions' => 'getDimensions',
        'file_contents' => 'getFileContents',
        'label_format' => 'getLabelFormat',
        'standard_id_for_label' => 'getStandardIdForLabel',
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
        $this->container['custom_text_for_label'] = $data['custom_text_for_label'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['file_contents'] = $data['file_contents'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['standard_id_for_label'] = $data['standard_id_for_label'] ?? null;
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
        if (null !== $this->container['custom_text_for_label'] && (\mb_strlen($this->container['custom_text_for_label']) > 14)) {
            throw new AssertionException("invalid value for 'custom_text_for_label', the character length must be smaller than or equal to 14.");
        }

        if ($this->container['dimensions'] === null) {
            throw new AssertionException("'dimensions' can't be null");
        }

        $this->container['dimensions']->validate();

        if ($this->container['file_contents'] === null) {
            throw new AssertionException("'file_contents' can't be null");
        }

        $this->container['file_contents']->validate();
    }

    /**
     * Gets custom_text_for_label.
     */
    public function getCustomTextForLabel() : ?string
    {
        return $this->container['custom_text_for_label'];
    }

    /**
     * Sets custom_text_for_label.
     *
     * @param null|string $custom_text_for_label Custom text to print on the label.  Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     */
    public function setCustomTextForLabel(?string $custom_text_for_label) : self
    {
        $this->container['custom_text_for_label'] = $custom_text_for_label;

        return $this;
    }

    /**
     * Gets dimensions.
     */
    public function getDimensions() : LabelDimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelDimensions $dimensions dimensions
     */
    public function setDimensions(LabelDimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets file_contents.
     */
    public function getFileContents() : FileContents
    {
        return $this->container['file_contents'];
    }

    /**
     * Sets file_contents.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\FileContents $file_contents file_contents
     */
    public function setFileContents(FileContents $file_contents) : self
    {
        $this->container['file_contents'] = $file_contents;

        return $this;
    }

    /**
     * Gets label_format.
     */
    public function getLabelFormat() : ?LabelFormat
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat $label_format label_format
     */
    public function setLabelFormat(?LabelFormat $label_format) : self
    {
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets standard_id_for_label.
     */
    public function getStandardIdForLabel() : ?StandardIdForLabel
    {
        return $this->container['standard_id_for_label'];
    }

    /**
     * Sets standard_id_for_label.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\StandardIdForLabel $standard_id_for_label standard_id_for_label
     */
    public function setStandardIdForLabel(?StandardIdForLabel $standard_id_for_label) : self
    {
        $this->container['standard_id_for_label'] = $standard_id_for_label;

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
    public function offsetGet($offset)
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
