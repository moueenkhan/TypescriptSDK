<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class MerchantPreferences implements \JsonSerializable
{
    /**
     * @var NetworkPreferences|null
     */
    private $network;

    /**
     * Returns Network.
     */
    public function getNetwork(): ?NetworkPreferences
    {
        return $this->network;
    }

    /**
     * Sets Network.
     *
     * @maps network
     */
    public function setNetwork(?NetworkPreferences $network): void
    {
        $this->network = $network;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->network)) {
            $json['network'] = $this->network;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
