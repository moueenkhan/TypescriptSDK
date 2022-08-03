<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;
use YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper;

class BusinessRegistration implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $formationDate;

    /**
     * @var string|null
     */
    private $formationCountry;

    /**
     * @var string|null
     */
    private $formationState;

    /**
     * Returns Formation Date.
     * Date of the company was created.
     */
    public function getFormationDate(): ?\DateTime
    {
        return $this->formationDate;
    }

    /**
     * Sets Formation Date.
     * Date of the company was created.
     *
     * @maps formationDate
     * @factory \YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setFormationDate(?\DateTime $formationDate): void
    {
        $this->formationDate = $formationDate;
    }

    /**
     * Returns Formation Country.
     * The country where the business was created.
     */
    public function getFormationCountry(): ?string
    {
        return $this->formationCountry;
    }

    /**
     * Sets Formation Country.
     * The country where the business was created.
     *
     * @maps formationCountry
     */
    public function setFormationCountry(?string $formationCountry): void
    {
        $this->formationCountry = $formationCountry;
    }

    /**
     * Returns Formation State.
     * The state or province where the business was created
     */
    public function getFormationState(): ?string
    {
        return $this->formationState;
    }

    /**
     * Sets Formation State.
     * The state or province where the business was created
     *
     * @maps formationState
     */
    public function setFormationState(?string $formationState): void
    {
        $this->formationState = $formationState;
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
        if (isset($this->formationDate)) {
            $json['formationDate']    = DateTimeHelper::toSimpleDate($this->formationDate);
        }
        if (isset($this->formationCountry)) {
            $json['formationCountry'] = $this->formationCountry;
        }
        if (isset($this->formationState)) {
            $json['formationState']   = $this->formationState;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
