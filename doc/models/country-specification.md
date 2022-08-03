
# Country Specification

## Structure

`CountrySpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string \| undefined` | Optional | - |
| `defaultCurrency` | `string \| undefined` | Optional | - |
| `supportedInstrumentTypes` | `string[] \| undefined` | Optional | - |
| `supportedInstrumentCurrencies` | `string[] \| undefined` | Optional | - |
| `supportedCapabilities` | [`CapabilityTypeEnum[] \| undefined`](../../doc/models/capability-type-enum.md) | Optional | - |
| `requiredFields` | [`RequiredFields \| undefined`](../../doc/models/required-fields.md) | Optional | - |

## Example (as JSON)

```json
{
  "id": null,
  "defaultCurrency": null,
  "supportedInstrumentTypes": null,
  "supportedInstrumentCurrencies": null,
  "supportedCapabilities": null,
  "requiredFields": null
}
```

