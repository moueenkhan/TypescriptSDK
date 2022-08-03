
# Identity Document Specification

## Structure

`IdentityDocumentSpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `types` | [`?(string[]) (LegalEntityTypeEnum)`](../../doc/models/legal-entity-type-enum.md) | Optional | - | getTypes(): ?array | setTypes(?array types): void |
| `supportedCountries` | `?(string[])` | Optional | - | getSupportedCountries(): ?array | setSupportedCountries(?array supportedCountries): void |
| `details` | [`?(FieldSpecification[])`](../../doc/models/field-specification.md) | Optional | - | getDetails(): ?array | setDetails(?array details): void |
| `fingerprints` | [`?(FingerprintSpecification[])`](../../doc/models/fingerprint-specification.md) | Optional | - | getFingerprints(): ?array | setFingerprints(?array fingerprints): void |

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

