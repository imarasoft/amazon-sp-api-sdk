<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorDirectFulfillmentShippingSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentShipping';

    public const OPERATION_GETPACKINGSLIP = 'getPackingSlip';

    public const OPERATION_GETPACKINGSLIP_PATH = '/vendor/directFulfillment/shipping/2021-12-28/packingSlips/{purchaseOrderNumber}';

    public const OPERATION_GETPACKINGSLIPS = 'getPackingSlips';

    public const OPERATION_GETPACKINGSLIPS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/packingSlips';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS = 'submitShipmentConfirmations';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shipmentConfirmations';

    public const OPERATION_SUBMITSHIPMENTSTATUSUPDATES = 'submitShipmentStatusUpdates';

    public const OPERATION_SUBMITSHIPMENTSTATUSUPDATES_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shipmentStatusUpdates';

    /**
     * Operation getPackingSlip.
     *
     * @param string $purchase_order_number The purchaseOrderNumber for the packing slip you want. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackingSlip
     */
    public function getPackingSlip(AccessToken $accessToken, string $region, string $purchase_order_number) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackingSlip;

    /**
     * Operation getPackingSlips.
     *
     * @param \DateTimeInterface $created_after Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTimeInterface $created_before Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param null|string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses. (optional)
     * @param null|int $limit The limit to the number of records returned (optional)
     * @param string $sort_order Sort ASC or DESC by packing slip creation date. (optional, default to 'ASC')
     * @param null|string $next_token Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackingSlipList
     */
    public function getPackingSlips(AccessToken $accessToken, string $region, \DateTimeInterface $created_after, \DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?int $limit = null, string $sort_order = 'ASC', ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\PackingSlipList;

    /**
     * Operation submitShipmentConfirmations.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference
     */
    public function submitShipmentConfirmations(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShipmentConfirmationsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference;

    /**
     * Operation submitShipmentStatusUpdates.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference
     */
    public function submitShipmentStatusUpdates(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShipmentStatusUpdatesRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference;
}
