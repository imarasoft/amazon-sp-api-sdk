<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class IntendedBoxContentsSource
{
    /**
     * Possible values of this enum.
     */
    public const NONE = 'NONE';

    public const FEED = 'FEED';

    public const _2_D_BARCODE = '2D_BARCODE';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::NONE,
            self::FEED,
            self::_2_D_BARCODE,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
