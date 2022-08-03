
# Business Legal Entity

## Structure

`BusinessLegalEntity`

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
| `name` | `string \| undefined` | Optional | The business's legal name. |
| `businessType` | [`BusinessTypeEnum \| undefined`](../../doc/models/business-type-enum.md) | Optional | - |
| `dba` | `string[] \| undefined` | Optional | Doing Busines As |
| `primaryContact` | [`IndividualLegalEntity \| undefined`](../../doc/models/individual-legal-entity.md) | Optional | - |
| `principalOwner` | [`LegalEntity \| undefined`](../../doc/models/legal-entity.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md) |
| `additionalOwners` | [`LegalEntity[] \| undefined`](../../doc/models/legal-entity.md) | Optional | An array of any owners with at least 25% ownership of the company, excluding the principal owner responsible for the account. |
| `identityDocuments` | [`IdentityDocument[] \| undefined`](../../doc/models/identity-document.md) | Optional | - |
| `registration` | [`BusinessRegistration \| undefined`](../../doc/models/business-registration.md) | Optional | - |

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
  "additional": null,
  "name": null,
  "businessType": null,
  "dba": null,
  "primaryContact": null,
  "principalOwner": null,
  "additionalOwners": null,
  "identityDocuments": null,
  "registration": null
}
```

