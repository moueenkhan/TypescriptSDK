
# Create Instrument Request

## Structure

`CreateInstrumentRequest`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `correlationRefs` | [`CorrelationRef[] \| undefined`](../../doc/models/correlation-ref.md) | Optional | - |
| `metadata` | `Record<string, string> \| undefined` | Optional | - |
| `options` | [`InstrumentOptions \| undefined`](../../doc/models/instrument-options.md) | Optional | - |
| `parent` | [`Parent \| undefined`](../../doc/models/parent.md) | Optional | - |
| `type` | `string` | Required | - |
| `currency` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` |
| `country` | `string` | Required | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` |
| `displayName` | `string \| undefined` | Optional | - |
| `namesOnAccount` | [`NameOnAccount[]`](../../doc/models/name-on-account.md) | Required | **Constraints**: *Minimum Items*: `1` |
| `address` | [`Address \| undefined`](../../doc/models/address.md) | Optional | - |
| `details` | `Record<string, string>` | Required | - |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "options": null,
  "parent": null,
  "type": "type0",
  "currency": "currency0",
  "country": "country4",
  "displayName": null,
  "namesOnAccount": [
    {
      "type": "INDIVIDUAL",
      "name": "name6"
    },
    {
      "type": "BUSINESS",
      "name": "name7"
    }
  ],
  "address": null,
  "details": {
    "key0": "details5",
    "key1": "details6",
    "key2": "details7"
  }
}
```

