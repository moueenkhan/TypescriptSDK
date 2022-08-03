
# Instrument

## Structure

`Instrument`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string \| undefined` | Optional | - |
| `created` | `string \| undefined` | Optional | - |
| `updated` | `string \| undefined` | Optional | - |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `parent` | [`Parent \| undefined`](../../doc/models/parent.md) | Optional | - |
| `type` | `string \| undefined` | Optional | - |
| `currency` | `string \| undefined` | Optional | - |
| `country` | `string \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. |
| `displayName` | `string \| undefined` | Optional | - |
| `namesOnAccount` | [`NameOnAccount[] \| undefined`](../../doc/models/name-on-account.md) | Optional | - |
| `address` | [`Address \| undefined`](../../doc/models/address.md) | Optional | - |
| `details` | `Record<string, string> \| undefined` | Optional | - |
| `fingerprints` | [`Fingerprint[] \| undefined`](../../doc/models/fingerprint.md) | Optional | - |
| `status` | [`InstrumentStatus \| undefined`](../../doc/models/instrument-status.md) | Optional | - |
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
  "type": null,
  "currency": null,
  "country": null,
  "displayName": null,
  "namesOnAccount": null,
  "address": null,
  "details": null,
  "fingerprints": null,
  "status": null,
  "capabilities": null
}
```

