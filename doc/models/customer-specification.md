
# Customer Specification

## Structure

`CustomerSpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`LegalEntityTypeEnum \| undefined`](../../doc/models/legal-entity-type-enum.md) | Optional | the second description of type parameter |
| `country` | `string \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. |
| `commerceType` | `string \| undefined` | Optional | - |
| `requiredFields` | `string[] \| undefined` | Optional | - |
| `additional` | [`FieldSpecification[] \| undefined`](../../doc/models/field-specification.md) | Optional | - |
| `identityDocuments` | [`RequiredIdentityDocuments[] \| undefined`](../../doc/models/required-identity-documents.md) | Optional | A list of required identity documents, each entity in the list should be considered as an OR condition. Only a single entry need be satisfied. |

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

