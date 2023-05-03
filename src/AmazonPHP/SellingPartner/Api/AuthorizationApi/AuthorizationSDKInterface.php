<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\AuthorizationApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Authorization.
 *
 * The Selling Partner API for Authorization helps developers manage authorizations and check the specific permissions associated with a given authorization.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface AuthorizationSDKInterface
{
    public const API_NAME = 'Authorization';

    public const OPERATION_GETAUTHORIZATIONCODE = 'getAuthorizationCode';

    public const OPERATION_GETAUTHORIZATIONCODE_PATH = '/authorization/v1/authorizationCode';

    /**
     * Operation getAuthorizationCode.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Authorization\GetAuthorizationCodeResponse
     */
    public function getAuthorizationCode(AccessToken $accessToken, string $region, string $selling_partner_id, string $developer_id, string $mws_auth_token) : \AmazonPHP\SellingPartner\Model\Authorization\GetAuthorizationCodeResponse;
}
