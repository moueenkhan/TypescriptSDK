
# Individual Legal Entity

## Structure

`IndividualLegalEntity`

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
| `name` | [`IndividualName \| undefined`](../../doc/models/individual-name.md) | Optional | The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix. |
| `gender` | [`GenderEnum \| undefined`](../../doc/models/gender-enum.md) | Optional | - |
| `dateOfBirth` | `string \| undefined` | Optional | - |
| `countryOfBirth` | `string \| undefined` | Optional | The country of birth for the person. |
| `nationality` | `string \| undefined` | Optional | The nationality of the person. |
| `identificationDocuments` | [`IdentityDocument[] \| undefined`](../../doc/models/identity-document.md) | Optional | - |

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
  "gender": null,
  "dateOfBirth": null,
  "countryOfBirth": null,
  "nationality": null,
  "identificationDocuments": null
}
```

