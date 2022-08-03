
# Business Legal Entity Request

## Structure

`BusinessLegalEntityRequest`

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
| `name` | `string \| undefined` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `businessType` | [`BusinessTypeEnum \| undefined`](../../doc/models/business-type-enum.md) | Optional | - |
| `dba` | `string[] \| undefined` | Optional | Doing Business As |
| `primaryContact` | [`IndividualLegalEntityRequest \| undefined`](../../doc/models/individual-legal-entity-request.md) | Optional | - |
| `principalOwner` | [`LegalEntityRequest \| undefined`](../../doc/models/legal-entity-request.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) |
| `additionalOwners` | [`LegalEntityRequest[] \| undefined`](../../doc/models/legal-entity-request.md) | Optional | An array of any owners with at least 25% ownership of the company, excluding the principal owner responsible for the account. |
| `identityDocuments` | [`IdentityDocument[] \| undefined`](../../doc/models/identity-document.md) | Optional | - |
| `registration` | [`BusinessRegistration \| undefined`](../../doc/models/business-registration.md) | Optional | - |

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

