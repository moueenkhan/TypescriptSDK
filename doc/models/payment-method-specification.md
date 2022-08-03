
# Payment Method Specification

## Structure

`PaymentMethodSpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string \| undefined` | Optional | - |
| `displayName` | `string \| undefined` | Optional | - |
| `supportedCountries` | `string[] \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. |
| `supportedCurrencies` | `string[] \| undefined` | Optional | ISO 4217 currency code. |
| `requiredFields` | `string[] \| undefined` | Optional | - |
| `details` | [`FieldSpecification[] \| undefined`](../../doc/models/field-specification.md) | Optional | Describes payment method specific details, accepted in the payment request. |
| `actions` | [`FieldSpecification[] \| undefined`](../../doc/models/field-specification.md) | Optional | Describes action fields returned in the payment response. |
| `supportedInstrumentTypes` | `string[] \| undefined` | Optional | Describes the supported instrument type that can be used with this payment method. |
| `requiresInstrument` | `boolean \| undefined` | Optional | Indicates if this payment method requires one of the supported instrument types to be supplied. |

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

