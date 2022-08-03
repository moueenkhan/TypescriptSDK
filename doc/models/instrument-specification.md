
# Instrument Specification

## Structure

`InstrumentSpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `supportedCountries` | `?(string[])` | Optional | ISO 3166-1 alpha-2 or alpha-3 country codes. | getSupportedCountries(): ?array | setSupportedCountries(?array supportedCountries): void |
| `supportedCurrencies` | `?(string[])` | Optional | - | getSupportedCurrencies(): ?array | setSupportedCurrencies(?array supportedCurrencies): void |
| `requiredFields` | `?(string[])` | Optional | - | getRequiredFields(): ?array | setRequiredFields(?array requiredFields): void |
| `details` | [`?(FieldSpecification[])`](../../doc/models/field-specification.md) | Optional | - | getDetails(): ?array | setDetails(?array details): void |
| `fingerprints` | [`?(FingerprintSpecification[])`](../../doc/models/fingerprint-specification.md) | Optional | - | getFingerprints(): ?array | setFingerprints(?array fingerprints): void |

## Example (as JSON)

```json
{
  "name": null,
  "displayName": null,
  "supportedCountries": null,
  "supportedCurrencies": null,
  "requiredFields": null,
  "details": null,
  "fingerprints": null
}
```

