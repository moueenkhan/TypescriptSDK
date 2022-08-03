
# Legal Entity Request

**Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md)

## Structure

`LegalEntityRequest`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | [`LegalEntityTypeEnum`](../../doc/models/legal-entity-type-enum.md) | Required | the second description of type parameter |
| `address` | [`Address \| undefined`](../../doc/models/address.md) | Optional | - |
| `phone` | [`Phone \| undefined`](../../doc/models/phone.md) | Optional | - |
| `email` | `string \| undefined` | Optional | The email address.<br>**Constraints**: *Maximum Length*: `512` |
| `website` | `string \| undefined` | Optional | **Constraints**: *Maximum Length*: `2048` |
| `socialNetworks` | [`SocialNetwork[] \| undefined`](../../doc/models/social-network.md) | Optional | - |
| `digitalCurrencyAddresses` | `string[] \| undefined` | Optional | - |
| `additional` | `Record<string, string> \| undefined` | Optional | - |

## Example (as JSON)

```json
{
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

