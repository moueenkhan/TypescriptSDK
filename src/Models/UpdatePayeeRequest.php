<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class UpdatePayeeRequest implements \JsonSerializable
{
    /**
     * @var CorrelationRef[]|null
     */
    private $correlationRefs;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $displayName;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $timezone;

    /**
     * @var string|null
     */
    private $defaultCurrency;

    /**
     * @var string|null
     */
    private $defaultLanguage;

    /**
     * @var LegalEntity|null
     */
    private $legalEntity;

    /**
     * @var array|null
     */
    private $preferences;

    /**
     * Returns Correlation Refs.
     *
     * @return CorrelationRef[]|null
     */
    public function getCorrelationRefs(): ?array
    {
        return $this->correlationRefs;
    }

    /**
     * Sets Correlation Refs.
     *
     * @maps correlationRefs
     *
     * @param CorrelationRef[]|null $correlationRefs
     */
    public function setCorrelationRefs(?array $correlationRefs): void
    {
        $this->correlationRefs = $correlationRefs;
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Display Name.
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * Sets Display Name.
     *
     * @maps displayName
     */
    public function setDisplayName(?string $displayName): void
    {
        $this->displayName = $displayName;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Timezone.
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Sets Timezone.
     *
     * @maps timezone
     */
    public function setTimezone(?string $timezone): void
    {
        $this->timezone = $timezone;
    }

    /**
     * Returns Default Currency.
     */
    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    /**
     * Sets Default Currency.
     *
     * @maps defaultCurrency
     */
    public function setDefaultCurrency(?string $defaultCurrency): void
    {
        $this->defaultCurrency = $defaultCurrency;
    }

    /**
     * Returns Default Language.
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets Default Language.
     *
     * @maps defaultLanguage
     */
    public function setDefaultLanguage(?string $defaultLanguage): void
    {
        $this->defaultLanguage = $defaultLanguage;
    }

    /**
     * Returns Legal Entity.
     * **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended
     * with either [`IndividualLegalEntity`]($m/IndividualLegalEntity) or
     * [`BusinessLegalEntity`]($m/BusinessLegalEntity)
     */
    public function getLegalEntity(): ?LegalEntity
    {
        return $this->legalEntity;
    }

    /**
     * Sets Legal Entity.
     * **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended
     * with either [`IndividualLegalEntity`]($m/IndividualLegalEntity) or
     * [`BusinessLegalEntity`]($m/BusinessLegalEntity)
     *
     * @maps legalEntity
     */
    public function setLegalEntity(?LegalEntity $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * Returns Preferences.
     */
    public function getPreferences(): ?array
    {
        return $this->preferences;
    }

    /**
     * Sets Preferences.
     *
     * @maps preferences
     */
    public function setPreferences(?array $preferences): void
    {
        $this->preferences = $preferences;
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
        if (isset($this->correlationRefs)) {
            $json['correlationRefs'] = $this->correlationRefs;
        }
        if (isset($this->metadata)) {
            $json['metadata']        = $this->metadata;
        }
        if (isset($this->displayName)) {
            $json['displayName']     = $this->displayName;
        }
        if (isset($this->country)) {
            $json['country']         = $this->country;
        }
        if (isset($this->timezone)) {
            $json['timezone']        = $this->timezone;
        }
        if (isset($this->defaultCurrency)) {
            $json['defaultCurrency'] = $this->defaultCurrency;
        }
        if (isset($this->defaultLanguage)) {
            $json['defaultLanguage'] = $this->defaultLanguage;
        }
        if (isset($this->legalEntity)) {
            $json['legalEntity']     = $this->legalEntity;
        }
        if (isset($this->preferences)) {
            $json['preferences']     = $this->preferences;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
