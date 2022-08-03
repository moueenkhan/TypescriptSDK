
# Create Merchant Request

## Structure

`CreateMerchantRequest`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `type` | [`MerchantTypeEnum`](../../doc/models/merchant-type-enum.md) | Required | - |
| `displayName` | `string \| undefined` | Optional | - |
| `country` | `string \| undefined` | Optional | - |
| `timezone` | `string \| undefined` | Optional | - |
| `defaultCurrency` | `string \| undefined` | Optional | - |
| `defaultLanguage` | `string \| undefined` | Optional | - |
| `legalEntity` | [`LegalEntityRequest \| undefined`](../../doc/models/legal-entity-request.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) |
| `consents` | [`Consent[] \| undefined`](../../doc/models/consent.md) | Optional | - |
| `preferences` | [`MerchantPreferences \| undefined`](../../doc/models/merchant-preferences.md) | Optional | - |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "type": "MERCHANT",
  "displayName": null,
  "country": null,
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": null,
  "consents": null,
  "preferences": null
}
```

