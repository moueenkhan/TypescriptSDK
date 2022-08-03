
# Individual Legal Entity

## Structure

`IndividualLegalEntity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The Party ID of the Customer, for internal use only. Should not appear in user facing documentation. | getId(): ?string | setId(?string id): void |
| `type` | [`string (LegalEntityTypeEnum)`](../../doc/models/legal-entity-type-enum.md) | Required | the second description of type parameter | getType(): string | setType(string type): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | - | getAddress(): ?Address | setAddress(?Address address): void |
| `phone` | [`?Phone`](../../doc/models/phone.md) | Optional | - | getPhone(): ?Phone | setPhone(?Phone phone): void |
| `email` | `?string` | Optional | The email address. | getEmail(): ?string | setEmail(?string email): void |
| `website` | `?string` | Optional | The website hostname. | getWebsite(): ?string | setWebsite(?string website): void |
| `socialNetworks` | [`?(SocialNetwork[])`](../../doc/models/social-network.md) | Optional | - | getSocialNetworks(): ?array | setSocialNetworks(?array socialNetworks): void |
| `digitalCurrencyAddresses` | `?(string[])` | Optional | - | getDigitalCurrencyAddresses(): ?array | setDigitalCurrencyAddresses(?array digitalCurrencyAddresses): void |
| `additional` | `?array<string,string>` | Optional | - | getAdditional(): ?array | setAdditional(?array additional): void |
| `name` | [`?IndividualName`](../../doc/models/individual-name.md) | Optional | The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix. | getName(): ?IndividualName | setName(?IndividualName name): void |
| `gender` | [`?string (GenderEnum)`](../../doc/models/gender-enum.md) | Optional | - | getGender(): ?string | setGender(?string gender): void |
| `dateOfBirth` | `?\DateTime` | Optional | - | getDateOfBirth(): ?\DateTime | setDateOfBirth(?\DateTime dateOfBirth): void |
| `countryOfBirth` | `?string` | Optional | The country of birth for the person. | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `nationality` | `?string` | Optional | The nationality of the person. | getNationality(): ?string | setNationality(?string nationality): void |
| `identificationDocuments` | [`?(IdentityDocument[])`](../../doc/models/identity-document.md) | Optional | - | getIdentificationDocuments(): ?array | setIdentificationDocuments(?array identificationDocuments): void |

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

