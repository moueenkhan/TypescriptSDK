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

class IndividualLegalEntity implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var Phone|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var SocialNetwork[]|null
     */
    private $socialNetworks;

    /**
     * @var string[]|null
     */
    private $digitalCurrencyAddresses;

    /**
     * @var array<string,string>|null
     */
    private $additional;

    /**
     * @var IndividualName|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var \DateTime|null
     */
    private $dateOfBirth;

    /**
     * @var string|null
     */
    private $countryOfBirth;

    /**
     * @var string|null
     */
    private $nationality;

    /**
     * @var IdentityDocument[]|null
     */
    private $identificationDocuments;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Id.
     * The Party ID of the Customer, for internal use only. Should not appear in user facing documentation.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Party ID of the Customer, for internal use only. Should not appear in user facing documentation.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Type.
     * the second description of type parameter
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * the second description of type parameter
     *
     * @required
     * @maps type
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\LegalEntityTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     * Returns Phone.
     */
    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     *
     * @maps phone
     */
    public function setPhone(?Phone $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Email.
     * The email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Website.
     * The website hostname.
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * Sets Website.
     * The website hostname.
     *
     * @maps website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * Returns Social Networks.
     *
     * @return SocialNetwork[]|null
     */
    public function getSocialNetworks(): ?array
    {
        return $this->socialNetworks;
    }

    /**
     * Sets Social Networks.
     *
     * @maps socialNetworks
     *
     * @param SocialNetwork[]|null $socialNetworks
     */
    public function setSocialNetworks(?array $socialNetworks): void
    {
        $this->socialNetworks = $socialNetworks;
    }

    /**
     * Returns Digital Currency Addresses.
     *
     * @return string[]|null
     */
    public function getDigitalCurrencyAddresses(): ?array
    {
        return $this->digitalCurrencyAddresses;
    }

    /**
     * Sets Digital Currency Addresses.
     *
     * @maps digitalCurrencyAddresses
     *
     * @param string[]|null $digitalCurrencyAddresses
     */
    public function setDigitalCurrencyAddresses(?array $digitalCurrencyAddresses): void
    {
        $this->digitalCurrencyAddresses = $digitalCurrencyAddresses;
    }

    /**
     * Returns Additional.
     *
     * @return array<string,string>|null
     */
    public function getAdditional(): ?array
    {
        return $this->additional;
    }

    /**
     * Sets Additional.
     *
     * @maps additional
     *
     * @param array<string,string>|null $additional
     */
    public function setAdditional(?array $additional): void
    {
        $this->additional = $additional;
    }

    /**
     * Returns Name.
     * The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and
     * honorificSuffix.
     */
    public function getName(): ?IndividualName
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and
     * honorificSuffix.
     *
     * @maps name
     */
    public function setName(?IndividualName $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @maps gender
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\GenderEnum::checkValue
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Date of Birth.
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets Date of Birth.
     *
     * @maps dateOfBirth
     * @factory \YapstoneStagedOnBoardingServicesLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Returns Country of Birth.
     * The country of birth for the person.
     */
    public function getCountryOfBirth(): ?string
    {
        return $this->countryOfBirth;
    }

    /**
     * Sets Country of Birth.
     * The country of birth for the person.
     *
     * @maps countryOfBirth
     */
    public function setCountryOfBirth(?string $countryOfBirth): void
    {
        $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * Returns Nationality.
     * The nationality of the person.
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * Sets Nationality.
     * The nationality of the person.
     *
     * @maps nationality
     */
    public function setNationality(?string $nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * Returns Identification Documents.
     *
     * @return IdentityDocument[]|null
     */
    public function getIdentificationDocuments(): ?array
    {
        return $this->identificationDocuments;
    }

    /**
     * Sets Identification Documents.
     *
     * @maps identificationDocuments
     *
     * @param IdentityDocument[]|null $identificationDocuments
     */
    public function setIdentificationDocuments(?array $identificationDocuments): void
    {
        $this->identificationDocuments = $identificationDocuments;
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
            $json['id']                       = $this->id;
        }
        $json['type']                         = LegalEntityTypeEnum::checkValue($this->type);
        if (isset($this->address)) {
            $json['address']                  = $this->address;
        }
        if (isset($this->phone)) {
            $json['phone']                    = $this->phone;
        }
        if (isset($this->email)) {
            $json['email']                    = $this->email;
        }
        if (isset($this->website)) {
            $json['website']                  = $this->website;
        }
        if (isset($this->socialNetworks)) {
            $json['socialNetworks']           = $this->socialNetworks;
        }
        if (isset($this->digitalCurrencyAddresses)) {
            $json['digitalCurrencyAddresses'] = $this->digitalCurrencyAddresses;
        }
        if (isset($this->additional)) {
            $json['additional']               = $this->additional;
        }
        if (isset($this->name)) {
            $json['name']                     = $this->name;
        }
        if (isset($this->gender)) {
            $json['gender']                   = GenderEnum::checkValue($this->gender);
        }
        if (isset($this->dateOfBirth)) {
            $json['dateOfBirth']              = DateTimeHelper::toSimpleDate($this->dateOfBirth);
        }
        if (isset($this->countryOfBirth)) {
            $json['countryOfBirth']           = $this->countryOfBirth;
        }
        if (isset($this->nationality)) {
            $json['nationality']              = $this->nationality;
        }
        if (isset($this->identificationDocuments)) {
            $json['identificationDocuments']  = $this->identificationDocuments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
