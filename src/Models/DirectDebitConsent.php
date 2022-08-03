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

class DirectDebitConsent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $timeOfConsent;

    /**
     * @var int
     */
    private $version;

    /**
     * @var string|null
     */
    private $frequency;

    /**
     * @param string $type
     * @param \DateTime $timeOfConsent
     * @param int $version
     */
    public function __construct(string $type, \DateTime $timeOfConsent, int $version)
    {
        $this->type = $type;
        $this->timeOfConsent = $timeOfConsent;
        $this->version = $version;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\Type1Enum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Time of Consent.
     */
    public function getTimeOfConsent(): \DateTime
    {
        return $this->timeOfConsent;
    }

    /**
     * Sets Time of Consent.
     *
     * @required
     * @maps timeOfConsent
     * @factory \YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTimeOfConsent(\DateTime $timeOfConsent): void
    {
        $this->timeOfConsent = $timeOfConsent;
    }

    /**
     * Returns Version.
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     *
     * @required
     * @maps version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * Returns Frequency.
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    /**
     * Sets Frequency.
     *
     * @maps frequency
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\FrequencyEnum::checkValue
     */
    public function setFrequency(?string $frequency): void
    {
        $this->frequency = $frequency;
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
        $json['type']          = Type1Enum::checkValue($this->type);
        $json['timeOfConsent'] = DateTimeHelper::toRfc3339DateTime($this->timeOfConsent);
        $json['version']       = $this->version;
        if (isset($this->frequency)) {
            $json['frequency'] = FrequencyEnum::checkValue($this->frequency);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
