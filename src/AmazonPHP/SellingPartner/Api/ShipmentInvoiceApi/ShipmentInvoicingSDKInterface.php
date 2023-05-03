<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Shipment Invoicing.
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ShipmentInvoicingSDKInterface
{
    public const API_NAME = 'ShipmentInvoicing';

    public const OPERATION_GETINVOICESTATUS = 'getInvoiceStatus';

    public const OPERATION_GETINVOICESTATUS_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status';

    public const OPERATION_GETSHIPMENTDETAILS = 'getShipmentDetails';

    public const OPERATION_GETSHIPMENTDETAILS_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}';

    public const OPERATION_SUBMITINVOICE = 'submitInvoice';

    public const OPERATION_SUBMITINVOICE_PATH = '/fba/outbound/brazil/v0/shipments/{shipmentId}/invoice';

    /**
     * Operation getInvoiceStatus.
     *
     * @param string $shipment_id The shipment identifier for the shipment. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetInvoiceStatusResponse
     */
    public function getInvoiceStatus(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetInvoiceStatusResponse;

    /**
     * Operation getShipmentDetails.
     *
     * @param string $shipment_id The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetShipmentDetailsResponse
     */
    public function getShipmentDetails(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\GetShipmentDetailsResponse;

    /**
     * Operation submitInvoice.
     *
     * @param string $shipment_id The identifier for the shipment. (required)
     * @param \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceResponse
     */
    public function submitInvoice(AccessToken $accessToken, string $region, string $shipment_id, \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceRequest $body) : \AmazonPHP\SellingPartner\Model\ShipmentInvoicing\SubmitInvoiceResponse;
}
