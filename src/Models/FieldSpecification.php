<?php

declare(strict_types=1);

/*
 * YapstoneStagedOnBoardingServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace YapstoneStagedOnBoardingServicesLib\Models;

use stdClass;

class FieldSpecification implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $field;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $displayName;

    /**
     * @var bool|null
     */
    private $required;

    /**
     * @var int|null
     */
    private $minimumLength;

    /**
     * @var int|null
     */
    private $maximumLength;

    /**
     * @var bool|null
     */
    private $masked;

    /**
     * @var bool|null
     */
    private $readOnly;

    /**
     * @var string[]|null
     */
    private $enumValues;

    /**
     * Returns Field.
     * The field name within the `details` section of an `Instrument` or `IdentityDocument`.
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * Sets Field.
     * The field name within the `details` section of an `Instrument` or `IdentityDocument`.
     *
     * @maps field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * Returns Type.
     * The type of the field.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of the field.
     *
     * @maps type
     * @factory \YapstoneStagedOnBoardingServicesLib\Models\FieldTypeEnum::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Description.
     * Detailed description of the field.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Detailed description of the field.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Display Name.
     * Human friendly name for the field, for display purposes in UIs.
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * Sets Display Name.
     * Human friendly name for the field, for display purposes in UIs.
     *
     * @maps displayName
     */
    public function setDisplayName(?string $displayName): void
    {
        $this->displayName = $displayName;
    }

    /**
     * Returns Required.
     * Indicates if the specified field is required or optional.
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Sets Required.
     * Indicates if the specified field is required or optional.
     *
     * @maps required
     */
    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    /**
     * Returns Minimum Length.
     * If present then the value may not be less than the specified minimum length. Only applicable for the
     * 'STRING' type.
     */
    public function getMinimumLength(): ?int
    {
        return $this->minimumLength;
    }

    /**
     * Sets Minimum Length.
     * If present then the value may not be less than the specified minimum length. Only applicable for the
     * 'STRING' type.
     *
     * @maps minimumLength
     */
    public function setMinimumLength(?int $minimumLength): void
    {
        $this->minimumLength = $minimumLength;
    }

    /**
     * Returns Maximum Length.
     * If present then the value may not exceed the specified maximum length. Only applicable for the
     * 'STRING' type.
     */
    public function getMaximumLength(): ?int
    {
        return $this->maximumLength;
    }

    /**
     * Sets Maximum Length.
     * If present then the value may not exceed the specified maximum length. Only applicable for the
     * 'STRING' type.
     *
     * @maps maximumLength
     */
    public function setMaximumLength(?int $maximumLength): void
    {
        $this->maximumLength = $maximumLength;
    }

    /**
     * Returns Masked.
     * If true, then the field will not be available to the caller in the clear, instead as masked version
     * will be returned.
     */
    public function getMasked(): ?bool
    {
        return $this->masked;
    }

    /**
     * Sets Masked.
     * If true, then the field will not be available to the caller in the clear, instead as masked version
     * will be returned.
     *
     * @maps masked
     */
    public function setMasked(?bool $masked): void
    {
        $this->masked = $masked;
    }

    /**
     * Returns Read Only.
     * If true, then the detail cannot be populated by the caller, but instead will be generated internally.
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Sets Read Only.
     * If true, then the detail cannot be populated by the caller, but instead will be generated internally.
     *
     * @maps readOnly
     */
    public function setReadOnly(?bool $readOnly): void
    {
        $this->readOnly = $readOnly;
    }

    /**
     * Returns Enum Values.
     * If the specification type is 'ENUMERATION' then the input will be validated against these accepted
     * values.
     *
     * @return string[]|null
     */
    public function getEnumValues(): ?array
    {
        return $this->enumValues;
    }

    /**
     * Sets Enum Values.
     * If the specification type is 'ENUMERATION' then the input will be validated against these accepted
     * values.
     *
     * @maps enumValues
     *
     * @param string[]|null $enumValues
     */
    public function setEnumValues(?array $enumValues): void
    {
        $this->enumValues = $enumValues;
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
        if (isset($this->field)) {
            $json['field']         = $this->field;
        }
        if (isset($this->type)) {
            $json['type']          = FieldTypeEnum::checkValue($this->type);
        }
        if (isset($this->description)) {
            $json['description']   = $this->description;
        }
        if (isset($this->displayName)) {
            $json['displayName']   = $this->displayName;
        }
        if (isset($this->required)) {
            $json['required']      = $this->required;
        }
        if (isset($this->minimumLength)) {
            $json['minimumLength'] = $this->minimumLength;
        }
        if (isset($this->maximumLength)) {
            $json['maximumLength'] = $this->maximumLength;
        }
        if (isset($this->masked)) {
            $json['masked']        = $this->masked;
        }
        if (isset($this->readOnly)) {
            $json['readOnly']      = $this->readOnly;
        }
        if (isset($this->enumValues)) {
            $json['enumValues']    = $this->enumValues;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
