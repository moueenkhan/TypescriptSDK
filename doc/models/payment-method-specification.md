
# Payment Method Specification

## Structure

`PaymentMethodSpecification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `supportedCountries` | `?(string[])` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. | getSupportedCountries(): ?array | setSupportedCountries(?array supportedCountries): void |
| `supportedCurrencies` | `?(string[])` | Optional | ISO 4217 currency code. | getSupportedCurrencies(): ?array | setSupportedCurrencies(?array supportedCurrencies): void |
| `requiredFields` | `?(string[])` | Optional | - | getRequiredFields(): ?array | setRequiredFields(?array requiredFields): void |
| `details` | [`?(FieldSpecification[])`](../../doc/models/field-specification.md) | Optional | Describes payment method specific details, accepted in the payment request. | getDetails(): ?array | setDetails(?array details): void |
| `actions` | [`?(FieldSpecification[])`](../../doc/models/field-specification.md) | Optional | Describes action fields returned in the payment response. | getActions(): ?array | setActions(?array actions): void |
| `supportedInstrumentTypes` | `?(string[])` | Optional | Describes the supported instrument type that can be used with this payment method. | getSupportedInstrumentTypes(): ?array | setSupportedInstrumentTypes(?array supportedInstrumentTypes): void |
| `requiresInstrument` | `?bool` | Optional | Indicates if this payment method requires one of the supported instrument types to be supplied. | getRequiresInstrument(): ?bool | setRequiresInstrument(?bool requiresInstrument): void |

## Example (as JSON)

```json
{
  "name": null,
  "displayName": null,
  "supportedCountries": null,
  "supportedCurrencies": null,
  "requiredFields": null,
  "details": null,
  "actions": null,
  "supportedInstrumentTypes": null,
  "requiresInstrument": null
}
```

