
# Marketplace

## Structure

`Marketplace`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string \| undefined` | Optional | - |
| `created` | `string \| undefined` | Optional | - |
| `updated` | `string \| undefined` | Optional | - |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `parent` | [`Parent \| undefined`](../../doc/models/parent.md) | Optional | - |
| `displayName` | `string \| undefined` | Optional | - |
| `country` | `string \| undefined` | Optional | - |
| `timezone` | `string \| undefined` | Optional | - |
| `defaultCurrency` | `string \| undefined` | Optional | - |
| `defaultLanguage` | `string \| undefined` | Optional | - |
| `legalEntity` | [`LegalEntity \| undefined`](../../doc/models/legal-entity.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md) |
| `preferences` | [`MarketplacePreferences \| undefined`](../../doc/models/marketplace-preferences.md) | Optional | - |
| `capabilities` | [`Capabilities \| undefined`](../../doc/models/capabilities.md) | Optional | - |

## Example (as JSON)

```json
{
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "displayName": null,
  "country": null,
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": null,
  "preferences": null,
  "capabilities": null
}
```

