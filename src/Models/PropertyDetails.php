<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class PropertyDetails implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $capacity;

    /**
     * @var int|null
     */
    private $bedroomCount;

    /**
     * @var int|null
     */
    private $bathroomCount;

    /**
     * @var string[]|null
     */
    private $amenities;

    /**
     * Returns Capacity.
     */
    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    /**
     * Sets Capacity.
     *
     * @maps capacity
     */
    public function setCapacity(?int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * Returns Bedroom Count.
     */
    public function getBedroomCount(): ?int
    {
        return $this->bedroomCount;
    }

    /**
     * Sets Bedroom Count.
     *
     * @maps bedroomCount
     */
    public function setBedroomCount(?int $bedroomCount): void
    {
        $this->bedroomCount = $bedroomCount;
    }

    /**
     * Returns Bathroom Count.
     */
    public function getBathroomCount(): ?int
    {
        return $this->bathroomCount;
    }

    /**
     * Sets Bathroom Count.
     *
     * @maps bathroomCount
     */
    public function setBathroomCount(?int $bathroomCount): void
    {
        $this->bathroomCount = $bathroomCount;
    }

    /**
     * Returns Amenities.
     *
     * @return string[]|null
     */
    public function getAmenities(): ?array
    {
        return $this->amenities;
    }

    /**
     * Sets Amenities.
     *
     * @maps amenities
     *
     * @param string[]|null $amenities
     */
    public function setAmenities(?array $amenities): void
    {
        $this->amenities = $amenities;
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
        if (isset($this->capacity)) {
            $json['capacity']      = $this->capacity;
        }
        if (isset($this->bedroomCount)) {
            $json['bedroomCount']  = $this->bedroomCount;
        }
        if (isset($this->bathroomCount)) {
            $json['bathroomCount'] = $this->bathroomCount;
        }
        if (isset($this->amenities)) {
            $json['amenities']     = $this->amenities;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
