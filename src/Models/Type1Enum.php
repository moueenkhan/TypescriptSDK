<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use Exception;
use stdClass;
use YapstoneStagedOnBoardingServicesLib\ApiHelper;

class Type1Enum
{
    public const TERMS_OF_SERVICE = 'TERMS_OF_SERVICE';

    public const DIRECT_DEBIT = 'DIRECT_DEBIT';

    private const _ALL_VALUES = [self::TERMS_OF_SERVICE, self::DIRECT_DEBIT];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        ApiHelper::checkValueInEnum($value, self::class, self::_ALL_VALUES);
        return $value;
    }
}
