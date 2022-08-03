
# Create Customer Request

## Structure

`CreateCustomerRequest`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `parent` | [`Parent \| undefined`](../../doc/models/parent.md) | Optional | - |
| `displayName` | `string \| undefined` | Optional | If not supplied, derived from the legal entity name. |
| `country` | `string` | Required | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` |
| `timezone` | `string \| undefined` | Optional | Time Zone ID. If not supplied will be derived from the `country` usually the capital city. |
| `defaultCurrency` | `string \| undefined` | Optional | Default currency for this customer, if not supplied derived from the `country`.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` |
| `defaultLanguage` | `string \| undefined` | Optional | Default language for this customer, if not supplied derived from the `country`. |
| `legalEntity` | [`LegalEntityRequest`](../../doc/models/legal-entity-request.md) | Required | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) |
| `options` | [`CustomerOptions \| undefined`](../../doc/models/customer-options.md) | Optional | - |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "displayName": null,
  "country": "country4",
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": {
    "type": "INDIVIDUAL",
    "address": null,
    "phone": null,
    "email": null,
    "website": null,
    "socialNetworks": null,
    "digitalCurrencyAddresses": null,
    "additional": null
  },
  "options": null
}
```

