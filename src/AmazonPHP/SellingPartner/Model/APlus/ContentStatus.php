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
class ContentStatus
{
    /**
     * Possible values of this enum.
     */
    final public const APPROVED = 'APPROVED';

    final public const DRAFT = 'DRAFT';

    final public const REJECTED = 'REJECTED';

    final public const SUBMITTED = 'SUBMITTED';

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
            self::APPROVED,
            self::DRAFT,
            self::REJECTED,
            self::SUBMITTED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
