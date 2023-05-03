<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorPaymentsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorInvoicesSDKInterface
{
    public const API_NAME = 'VendorInvoices';

    public const OPERATION_SUBMITINVOICES = 'submitInvoices';

    public const OPERATION_SUBMITINVOICES_PATH = '/vendor/payments/v1/invoices';

    /**
     * Operation submitInvoices.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesResponse
     */
    public function submitInvoices(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body) : \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesResponse;
}
