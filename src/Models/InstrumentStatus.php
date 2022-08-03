<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class InstrumentStatus implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string[]|null
     */
    private $disabledReasons;

    /**
     * @var EntityStatusHistory[]|null
     */
    private $history;

    /**
     * @var ValidationStatus|null
     */
    private $validation;

    /**
     * @var VerificationStatus|null
     */
    private $verification;

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @maps state
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\EntityStateEnum::checkValue
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Disabled Reasons.
     *
     * @return string[]|null
     */
    public function getDisabledReasons(): ?array
    {
        return $this->disabledReasons;
    }

    /**
     * Sets Disabled Reasons.
     *
     * @maps disabledReasons
     *
     * @param string[]|null $disabledReasons
     */
    public function setDisabledReasons(?array $disabledReasons): void
    {
        $this->disabledReasons = $disabledReasons;
    }

    /**
     * Returns History.
     *
     * @return EntityStatusHistory[]|null
     */
    public function getHistory(): ?array
    {
        return $this->history;
    }

    /**
     * Sets History.
     *
     * @maps history
     *
     * @param EntityStatusHistory[]|null $history
     */
    public function setHistory(?array $history): void
    {
        $this->history = $history;
    }

    /**
     * Returns Validation.
     */
    public function getValidation(): ?ValidationStatus
    {
        return $this->validation;
    }

    /**
     * Sets Validation.
     *
     * @maps validation
     */
    public function setValidation(?ValidationStatus $validation): void
    {
        $this->validation = $validation;
    }

    /**
     * Returns Verification.
     */
    public function getVerification(): ?VerificationStatus
    {
        return $this->verification;
    }

    /**
     * Sets Verification.
     *
     * @maps verification
     */
    public function setVerification(?VerificationStatus $verification): void
    {
        $this->verification = $verification;
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
        if (isset($this->state)) {
            $json['state']           = EntityStateEnum::checkValue($this->state);
        }
        if (isset($this->disabledReasons)) {
            $json['disabledReasons'] = $this->disabledReasons;
        }
        if (isset($this->history)) {
            $json['history']         = $this->history;
        }
        if (isset($this->validation)) {
            $json['validation']      = $this->validation;
        }
        if (isset($this->verification)) {
            $json['verification']    = $this->verification;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
