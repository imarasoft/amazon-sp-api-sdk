<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class HazmatType
{
    /**
     * Possible values of this enum.
     */
    public const NONE = 'None';

    public const LQ_HAZMAT = 'LQHazmat';

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
            self::LQ_HAZMAT,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
