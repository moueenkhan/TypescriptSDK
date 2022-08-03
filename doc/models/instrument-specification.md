
# Instrument Specification

## Structure

`InstrumentSpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string \| undefined` | Optional | - |
| `displayName` | `string \| undefined` | Optional | - |
| `supportedCountries` | `string[] \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country codes. |
| `supportedCurrencies` | `string[] \| undefined` | Optional | - |
| `requiredFields` | `string[] \| undefined` | Optional | - |
| `details` | [`FieldSpecification[] \| undefined`](../../doc/models/field-specification.md) | Optional | - |
| `fingerprints` | [`FingerprintSpecification[] \| undefined`](../../doc/models/fingerprint-specification.md) | Optional | - |

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

