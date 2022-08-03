
# Address

## Structure

`Address`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `line1` | `string \| undefined` | Optional | Address line 1 (Street address/PO Box/Company name).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` |
| `line2` | `string \| undefined` | Optional | Address line 2 (Apartment/Suite/Unit/Building).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` |
| `line3` | `string \| undefined` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` |
| `line4` | `string \| undefined` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` |
| `city` | `string \| undefined` | Optional | City/District/Suburb/Town/Village.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` |
| `state` | `string \| undefined` | Optional | State/County/Province/Region.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` |
| `postalCode` | `string \| undefined` | Optional | ZIP or postal code<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` |
| `country` | `string \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. |

## Example (as JSON)

```json
{
  "line1": null,
  "line2": null,
  "line3": null,
  "line4": null,
  "city": null,
  "state": null,
  "postalCode": null,
  "country": null
}
```

