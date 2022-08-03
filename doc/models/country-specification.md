
# Country Specification

## Structure

`CountrySpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `defaultCurrency` | `?string` | Optional | - | getDefaultCurrency(): ?string | setDefaultCurrency(?string defaultCurrency): void |
| `supportedInstrumentTypes` | `?(string[])` | Optional | - | getSupportedInstrumentTypes(): ?array | setSupportedInstrumentTypes(?array supportedInstrumentTypes): void |
| `supportedInstrumentCurrencies` | `?(string[])` | Optional | - | getSupportedInstrumentCurrencies(): ?array | setSupportedInstrumentCurrencies(?array supportedInstrumentCurrencies): void |
| `supportedCapabilities` | [`?(string[]) (CapabilityTypeEnum)`](../../doc/models/capability-type-enum.md) | Optional | - | getSupportedCapabilities(): ?array | setSupportedCapabilities(?array supportedCapabilities): void |
| `requiredFields` | [`?RequiredFields`](../../doc/models/required-fields.md) | Optional | - | getRequiredFields(): ?RequiredFields | setRequiredFields(?RequiredFields requiredFields): void |

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

