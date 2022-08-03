
# Merchant

## Structure

`Merchant`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string \| undefined` | Optional | - |
| `created` | `string \| undefined` | Optional | - |
| `updated` | `string \| undefined` | Optional | - |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `type` | [`MerchantTypeEnum \| undefined`](../../doc/models/merchant-type-enum.md) | Optional | - |
| `parent` | [`Parent \| undefined`](../../doc/models/parent.md) | Optional | - |
| `displayName` | `string \| undefined` | Optional | - |
| `country` | `string \| undefined` | Optional | - |
| `timezone` | `string \| undefined` | Optional | - |
| `defaultCurrency` | `string \| undefined` | Optional | - |
| `defaultLanguage` | `string \| undefined` | Optional | - |
| `legalEntity` | [`LegalEntity \| undefined`](../../doc/models/legal-entity.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md) |
| `volumeProjection` | [`MerchantVolumeProjection \| undefined`](../../doc/models/merchant-volume-projection.md) | Optional | - |
| `consents` | [`Consent[] \| undefined`](../../doc/models/consent.md) | Optional | - |
| `capabilities` | [`Capabilities \| undefined`](../../doc/models/capabilities.md) | Optional | - |
| `preferences` | [`MerchantPreferences \| undefined`](../../doc/models/merchant-preferences.md) | Optional | - |
| `status` | [`EntityStatus \| undefined`](../../doc/models/entity-status.md) | Optional | - |

## Example (as JSON)

```json
{
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null,
  "type": null,
  "parent": null,
  "displayName": null,
  "country": null,
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": null,
  "volumeProjection": null,
  "consents": null,
  "capabilities": null,
  "preferences": null,
  "status": null
}
```

