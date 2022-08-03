
# Individual Legal Entity Request

## Structure

`IndividualLegalEntityRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (LegalEntityTypeEnum)`](../../doc/models/legal-entity-type-enum.md) | Required | the second description of type parameter | getType(): string | setType(string type): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | - | getAddress(): ?Address | setAddress(?Address address): void |
| `phone` | [`?Phone`](../../doc/models/phone.md) | Optional | - | getPhone(): ?Phone | setPhone(?Phone phone): void |
| `email` | `?string` | Optional | The email address.<br>**Constraints**: *Maximum Length*: `512` | getEmail(): ?string | setEmail(?string email): void |
| `website` | `?string` | Optional | **Constraints**: *Maximum Length*: `2048` | getWebsite(): ?string | setWebsite(?string website): void |
| `socialNetworks` | [`?(SocialNetwork[])`](../../doc/models/social-network.md) | Optional | - | getSocialNetworks(): ?array | setSocialNetworks(?array socialNetworks): void |
| `digitalCurrencyAddresses` | `?(string[])` | Optional | - | getDigitalCurrencyAddresses(): ?array | setDigitalCurrencyAddresses(?array digitalCurrencyAddresses): void |
| `additional` | `?array<string,string>` | Optional | - | getAdditional(): ?array | setAdditional(?array additional): void |
| `name` | [`IndividualName`](../../doc/models/individual-name.md) | Required | The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix. | getName(): IndividualName | setName(IndividualName name): void |
| `gender` | [`?string (GenderEnum)`](../../doc/models/gender-enum.md) | Optional | - | getGender(): ?string | setGender(?string gender): void |
| `dateOfBirth` | `?\DateTime` | Optional | The date of birth for the person, format should be (yyyy-mm-dd) | getDateOfBirth(): ?\DateTime | setDateOfBirth(?\DateTime dateOfBirth): void |
| `countryOfBirth` | `?string` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `nationality` | `?string` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` | getNationality(): ?string | setNationality(?string nationality): void |
| `identificationDocuments` | [`?(IdentityDocument[])`](../../doc/models/identity-document.md) | Optional | - | getIdentificationDocuments(): ?array | setIdentificationDocuments(?array identificationDocuments): void |

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

