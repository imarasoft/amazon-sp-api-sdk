<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class RemovalShipmentAdjustmentEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RemovalShipmentAdjustmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTimeInterface',
        'adjustment_event_id' => 'string',
        'merchant_order_id' => 'string',
        'order_id' => 'string',
        'transaction_type' => 'string',
        'removal_shipment_item_adjustment_list' => '\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItemAdjustment[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'posted_date' => 'date-time',
        'adjustment_event_id' => null,
        'merchant_order_id' => null,
        'order_id' => null,
        'transaction_type' => null,
        'removal_shipment_item_adjustment_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'PostedDate',
        'adjustment_event_id' => 'AdjustmentEventId',
        'merchant_order_id' => 'MerchantOrderId',
        'order_id' => 'OrderId',
        'transaction_type' => 'TransactionType',
        'removal_shipment_item_adjustment_list' => 'RemovalShipmentItemAdjustmentList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'adjustment_event_id' => 'setAdjustmentEventId',
        'merchant_order_id' => 'setMerchantOrderId',
        'order_id' => 'setOrderId',
        'transaction_type' => 'setTransactionType',
        'removal_shipment_item_adjustment_list' => 'setRemovalShipmentItemAdjustmentList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'adjustment_event_id' => 'getAdjustmentEventId',
        'merchant_order_id' => 'getMerchantOrderId',
        'order_id' => 'getOrderId',
        'transaction_type' => 'getTransactionType',
        'removal_shipment_item_adjustment_list' => 'getRemovalShipmentItemAdjustmentList',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['adjustment_event_id'] = $data['adjustment_event_id'] ?? null;
        $this->container['merchant_order_id'] = $data['merchant_order_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['removal_shipment_item_adjustment_list'] = $data['removal_shipment_item_adjustment_list'] ?? null;
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
    }

    /**
     * Gets posted_date.
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date posted_date
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets adjustment_event_id.
     */
    public function getAdjustmentEventId() : ?string
    {
        return $this->container['adjustment_event_id'];
    }

    /**
     * Sets adjustment_event_id.
     *
     * @param null|string $adjustment_event_id the unique identifier for the adjustment event
     */
    public function setAdjustmentEventId(?string $adjustment_event_id) : self
    {
        $this->container['adjustment_event_id'] = $adjustment_event_id;

        return $this;
    }

    /**
     * Gets merchant_order_id.
     */
    public function getMerchantOrderId() : ?string
    {
        return $this->container['merchant_order_id'];
    }

    /**
     * Sets merchant_order_id.
     *
     * @param null|string $merchant_order_id the merchant removal orderId
     */
    public function setMerchantOrderId(?string $merchant_order_id) : self
    {
        $this->container['merchant_order_id'] = $merchant_order_id;

        return $this;
    }

    /**
     * Gets order_id.
     */
    public function getOrderId() : ?string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param null|string $order_id the orderId for shipping inventory
     */
    public function setOrderId(?string $order_id) : self
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets transaction_type.
     */
    public function getTransactionType() : ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type The type of removal order.  Possible values:  * WHOLESALE_LIQUIDATION.
     */
    public function setTransactionType(?string $transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets removal_shipment_item_adjustment_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItemAdjustment[]
     */
    public function getRemovalShipmentItemAdjustmentList() : ?array
    {
        return $this->container['removal_shipment_item_adjustment_list'];
    }

    /**
     * Sets removal_shipment_item_adjustment_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItemAdjustment[] $removal_shipment_item_adjustment_list a comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory
     */
    public function setRemovalShipmentItemAdjustmentList(?array $removal_shipment_item_adjustment_list) : self
    {
        $this->container['removal_shipment_item_adjustment_list'] = $removal_shipment_item_adjustment_list;

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
