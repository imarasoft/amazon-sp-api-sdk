<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\APlus;

/**
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ContentType
{
    /**
     * Possible values of this enum.
     */
    final public const EBC = 'EBC';

    final public const EMC = 'EMC';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::EBC,
            self::EMC,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
