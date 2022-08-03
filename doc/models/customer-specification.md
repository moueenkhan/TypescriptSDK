
# Customer Specification

## Structure

`CustomerSpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string (LegalEntityTypeEnum)`](../../doc/models/legal-entity-type-enum.md) | Optional | the second description of type parameter | getType(): ?string | setType(?string type): void |
| `country` | `?string` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. | getCountry(): ?string | setCountry(?string country): void |
| `commerceType` | `?string` | Optional | - | getCommerceType(): ?string | setCommerceType(?string commerceType): void |
| `requiredFields` | `?(string[])` | Optional | - | getRequiredFields(): ?array | setRequiredFields(?array requiredFields): void |
| `additional` | [`?(FieldSpecification[])`](../../doc/models/field-specification.md) | Optional | - | getAdditional(): ?array | setAdditional(?array additional): void |
| `identityDocuments` | [`?(RequiredIdentityDocuments[])`](../../doc/models/required-identity-documents.md) | Optional | A list of required identity documents, each entity in the list should be considered as an OR condition. Only a single entry need be satisfied. | getIdentityDocuments(): ?array | setIdentityDocuments(?array identityDocuments): void |

## Example (as JSON)

```json
{
  "type": null,
  "country": null,
  "commerceType": null,
  "requiredFields": null,
  "additional": null,
  "identityDocuments": null
}
```

