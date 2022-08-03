<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class CustomerSpecificationPage implements \JsonSerializable
{
    /**
     * @var Meta|null
     */
    private $meta;

    /**
     * @var CustomerSpecification[]|null
     */
    private $results;

    /**
     * Returns Meta.
     */
    public function getMeta(): ?Meta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?Meta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Returns Results.
     *
     * @return CustomerSpecification[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * Sets Results.
     *
     * @maps results
     *
     * @param CustomerSpecification[]|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
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
        if (isset($this->meta)) {
            $json['meta']    = $this->meta;
        }
        if (isset($this->results)) {
            $json['results'] = $this->results;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
