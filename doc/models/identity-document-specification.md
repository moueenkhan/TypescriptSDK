
# Identity Document Specification

## Structure

`IdentityDocumentSpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string \| undefined` | Optional | - |
| `displayName` | `string \| undefined` | Optional | - |
| `types` | [`LegalEntityTypeEnum[] \| undefined`](../../doc/models/legal-entity-type-enum.md) | Optional | - |
| `supportedCountries` | `string[] \| undefined` | Optional | - |
| `details` | [`FieldSpecification[] \| undefined`](../../doc/models/field-specification.md) | Optional | - |
| `fingerprints` | [`FingerprintSpecification[] \| undefined`](../../doc/models/fingerprint-specification.md) | Optional | - |

## Example (as JSON)

```json
{
  "name": null,
  "displayName": null,
  "types": null,
  "supportedCountries": null,
  "details": null,
  "fingerprints": null
}
```

