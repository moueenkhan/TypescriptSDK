
# Legal Entity

**Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md)

## Structure

`LegalEntity`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string \| undefined` | Optional | The Party ID of the Customer, for internal use only. Should not appear in user facing documentation. |
| `type` | [`LegalEntityTypeEnum`](../../doc/models/legal-entity-type-enum.md) | Required | the second description of type parameter |
| `address` | [`Address \| undefined`](../../doc/models/address.md) | Optional | - |
| `phone` | [`Phone \| undefined`](../../doc/models/phone.md) | Optional | - |
| `email` | `string \| undefined` | Optional | The email address. |
| `website` | `string \| undefined` | Optional | The website hostname. |
| `socialNetworks` | [`SocialNetwork[] \| undefined`](../../doc/models/social-network.md) | Optional | - |
| `digitalCurrencyAddresses` | `string[] \| undefined` | Optional | - |
| `additional` | `Record<string, string> \| undefined` | Optional | - |

## Example (as JSON)

```json
{
  "id": null,
  "type": "INDIVIDUAL",
  "address": null,
  "phone": null,
  "email": null,
  "website": null,
  "socialNetworks": null,
  "digitalCurrencyAddresses": null,
  "additional": null
}
```

