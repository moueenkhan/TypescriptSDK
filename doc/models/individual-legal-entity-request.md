
# Individual Legal Entity Request

## Structure

`IndividualLegalEntityRequest`

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
| `name` | [`IndividualName`](../../doc/models/individual-name.md) | Required | The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix. |
| `gender` | [`GenderEnum \| undefined`](../../doc/models/gender-enum.md) | Optional | - |
| `dateOfBirth` | `string \| undefined` | Optional | The date of birth for the person, format should be (yyyy-mm-dd) |
| `countryOfBirth` | `string \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` |
| `nationality` | `string \| undefined` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` |
| `identificationDocuments` | [`IdentityDocument[] \| undefined`](../../doc/models/identity-document.md) | Optional | - |

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
  "name": {
    "honorificPrefix": null,
    "first": "first6",
    "middle": null,
    "last": "last0",
    "additionalLast": null,
    "honorificSuffix": null
  },
  "gender": null,
  "dateOfBirth": null,
  "countryOfBirth": null,
  "nationality": null,
  "identificationDocuments": null
}
```

