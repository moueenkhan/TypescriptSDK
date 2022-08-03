
# Field Specification

## Structure

`FieldSpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `field` | `?string` | Optional | The field name within the `details` section of an `Instrument` or `IdentityDocument`. | getField(): ?string | setField(?string field): void |
| `type` | [`?string (FieldTypeEnum)`](../../doc/models/field-type-enum.md) | Optional | The type of the field. | getType(): ?string | setType(?string type): void |
| `description` | `?string` | Optional | Detailed description of the field. | getDescription(): ?string | setDescription(?string description): void |
| `displayName` | `?string` | Optional | Human friendly name for the field, for display purposes in UIs. | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `required` | `?bool` | Optional | Indicates if the specified field is required or optional. | getRequired(): ?bool | setRequired(?bool required): void |
| `minimumLength` | `?int` | Optional | If present then the value may not be less than the specified minimum length. Only applicable for the 'STRING' type. | getMinimumLength(): ?int | setMinimumLength(?int minimumLength): void |
| `maximumLength` | `?int` | Optional | If present then the value may not exceed the specified maximum length. Only applicable for the 'STRING' type. | getMaximumLength(): ?int | setMaximumLength(?int maximumLength): void |
| `masked` | `?bool` | Optional | If true, then the field will not be available to the caller in the clear, instead as masked version will be returned. | getMasked(): ?bool | setMasked(?bool masked): void |
| `readOnly` | `?bool` | Optional | If true, then the detail cannot be populated by the caller, but instead will be generated internally. | getReadOnly(): ?bool | setReadOnly(?bool readOnly): void |
| `enumValues` | `?(string[])` | Optional | If the specification type is 'ENUMERATION' then the input will be validated against these accepted values. | getEnumValues(): ?array | setEnumValues(?array enumValues): void |

## Example (as JSON)

```json
{
  "field": null,
  "type": null,
  "description": null,
  "displayName": null,
  "required": null,
  "minimumLength": null,
  "maximumLength": null,
  "masked": null,
  "readOnly": null,
  "enumValues": null
}
```

