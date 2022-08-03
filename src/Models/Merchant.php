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

class Merchant implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $updated;

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
    private $type;

    /**
     * @var Parent|null
     */
    private $parent;

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
     * @var MerchantVolumeProjection|null
     */
    private $volumeProjection;

    /**
     * @var Consent[]|null
     */
    private $consents;

    /**
     * @var Capabilities|null
     */
    private $capabilities;

    /**
     * @var MerchantPreferences|null
     */
    private $preferences;

    /**
     * @var EntityStatus|null
     */
    private $status;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created.
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * Sets Created.
     *
     * @maps created
     * @factory \YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreated(?\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * Returns Updated.
     */
    public function getUpdated(): ?\DateTime
    {
        return $this->updated;
    }

    /**
     * Sets Updated.
     *
     * @maps updated
     * @factory \YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdated(?\DateTime $updated): void
    {
        $this->updated = $updated;
    }

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
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\MerchantTypeEnum::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Parent.
     */
    public function getParent(): ?Parent
    {
        return $this->parent;
    }

    /**
     * Sets Parent.
     *
     * @maps parent
     */
    public function setParent(?Parent $parent): void
    {
        $this->parent = $parent;
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
     * Returns Volume Projection.
     */
    public function getVolumeProjection(): ?MerchantVolumeProjection
    {
        return $this->volumeProjection;
    }

    /**
     * Sets Volume Projection.
     *
     * @maps volumeProjection
     */
    public function setVolumeProjection(?MerchantVolumeProjection $volumeProjection): void
    {
        $this->volumeProjection = $volumeProjection;
    }

    /**
     * Returns Consents.
     *
     * @return Consent[]|null
     */
    public function getConsents(): ?array
    {
        return $this->consents;
    }

    /**
     * Sets Consents.
     *
     * @maps consents
     *
     * @param Consent[]|null $consents
     */
    public function setConsents(?array $consents): void
    {
        $this->consents = $consents;
    }

    /**
     * Returns Capabilities.
     */
    public function getCapabilities(): ?Capabilities
    {
        return $this->capabilities;
    }

    /**
     * Sets Capabilities.
     *
     * @maps capabilities
     */
    public function setCapabilities(?Capabilities $capabilities): void
    {
        $this->capabilities = $capabilities;
    }

    /**
     * Returns Preferences.
     */
    public function getPreferences(): ?MerchantPreferences
    {
        return $this->preferences;
    }

    /**
     * Sets Preferences.
     *
     * @maps preferences
     */
    public function setPreferences(?MerchantPreferences $preferences): void
    {
        $this->preferences = $preferences;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?EntityStatus
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?EntityStatus $status): void
    {
        $this->status = $status;
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
        if (isset($this->id)) {
            $json['id']               = $this->id;
        }
        if (isset($this->created)) {
            $json['created']          = DateTimeHelper::toRfc3339DateTime($this->created);
        }
        if (isset($this->updated)) {
            $json['updated']          = DateTimeHelper::toRfc3339DateTime($this->updated);
        }
        if (isset($this->correlationRefs)) {
            $json['correlationRefs']  = $this->correlationRefs;
        }
        if (isset($this->metadata)) {
            $json['metadata']         = $this->metadata;
        }
        if (isset($this->type)) {
            $json['type']             = MerchantTypeEnum::checkValue($this->type);
        }
        if (isset($this->parent)) {
            $json['parent']           = $this->parent;
        }
        if (isset($this->displayName)) {
            $json['displayName']      = $this->displayName;
        }
        if (isset($this->country)) {
            $json['country']          = $this->country;
        }
        if (isset($this->timezone)) {
            $json['timezone']         = $this->timezone;
        }
        if (isset($this->defaultCurrency)) {
            $json['defaultCurrency']  = $this->defaultCurrency;
        }
        if (isset($this->defaultLanguage)) {
            $json['defaultLanguage']  = $this->defaultLanguage;
        }
        if (isset($this->legalEntity)) {
            $json['legalEntity']      = $this->legalEntity;
        }
        if (isset($this->volumeProjection)) {
            $json['volumeProjection'] = $this->volumeProjection;
        }
        if (isset($this->consents)) {
            $json['consents']         = $this->consents;
        }
        if (isset($this->capabilities)) {
            $json['capabilities']     = $this->capabilities;
        }
        if (isset($this->preferences)) {
            $json['preferences']      = $this->preferences;
        }
        if (isset($this->status)) {
            $json['status']           = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
