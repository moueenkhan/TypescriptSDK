<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class Capabilities implements \JsonSerializable
{
    /**
     * @var Capability[]|null
     */
    private $granted;

    /**
     * Returns Granted.
     *
     * @return Capability[]|null
     */
    public function getGranted(): ?array
    {
        return $this->granted;
    }

    /**
     * Sets Granted.
     *
     * @maps granted
     *
     * @param Capability[]|null $granted
     */
    public function setGranted(?array $granted): void
    {
        $this->granted = $granted;
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
        if (isset($this->granted)) {
            $json['granted'] = $this->granted;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
