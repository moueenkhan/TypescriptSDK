<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class CreateInstrumentRequest implements \JsonSerializable
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
     * @var InstrumentOptions|null
     */
    private $options;

    /**
     * @var Parent|null
     */
    private $parent;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string|null
     */
    private $displayName;

    /**
     * @var NameOnAccount[]
     */
    private $namesOnAccount;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var array<string,string>
     */
    private $details;

    /**
     * @param string $type
     * @param string $currency
     * @param string $country
     * @param NameOnAccount[] $namesOnAccount
     * @param array<string,string> $details
     */
    public function __construct(string $type, string $currency, string $country, array $namesOnAccount, array $details)
    {
        $this->type = $type;
        $this->currency = $currency;
        $this->country = $country;
        $this->namesOnAccount = $namesOnAccount;
        $this->details = $details;
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
     * Returns Options.
     */
    public function getOptions(): ?InstrumentOptions
    {
        return $this->options;
    }

    /**
     * Sets Options.
     *
     * @maps options
     */
    public function setOptions(?InstrumentOptions $options): void
    {
        $this->options = $options;
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
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Country.
     * ISO 3166-1 alpha-2 or alpha-3 country code.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * ISO 3166-1 alpha-2 or alpha-3 country code.
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
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
     * Returns Names on Account.
     *
     * @return NameOnAccount[]
     */
    public function getNamesOnAccount(): array
    {
        return $this->namesOnAccount;
    }

    /**
     * Sets Names on Account.
     *
     * @required
     * @maps namesOnAccount
     *
     * @param NameOnAccount[] $namesOnAccount
     */
    public function setNamesOnAccount(array $namesOnAccount): void
    {
        $this->namesOnAccount = $namesOnAccount;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Details.
     *
     * @return array<string,string>
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @required
     * @maps details
     *
     * @param array<string,string> $details
     */
    public function setDetails(array $details): void
    {
        $this->details = $details;
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
        if (isset($this->options)) {
            $json['options']         = $this->options;
        }
        if (isset($this->parent)) {
            $json['parent']          = $this->parent;
        }
        $json['type']                = $this->type;
        $json['currency']            = $this->currency;
        $json['country']             = $this->country;
        if (isset($this->displayName)) {
            $json['displayName']     = $this->displayName;
        }
        $json['namesOnAccount']      = $this->namesOnAccount;
        if (isset($this->address)) {
            $json['address']         = $this->address;
        }
        $json['details']             = $this->details;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
