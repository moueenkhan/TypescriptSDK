
# Business Legal Entity

## Structure

`BusinessLegalEntity`

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
| `name` | `?string` | Optional | The business's legal name. | getName(): ?string | setName(?string name): void |
| `businessType` | [`?string (BusinessTypeEnum)`](../../doc/models/business-type-enum.md) | Optional | - | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `dba` | `?(string[])` | Optional | Doing Busines As | getDba(): ?array | setDba(?array dba): void |
| `primaryContact` | [`?IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) | Optional | - | getPrimaryContact(): ?IndividualLegalEntity | setPrimaryContact(?IndividualLegalEntity primaryContact): void |
| `principalOwner` | [`?LegalEntity`](../../doc/models/legal-entity.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md) | getPrincipalOwner(): ?LegalEntity | setPrincipalOwner(?LegalEntity principalOwner): void |
| `additionalOwners` | [`?(LegalEntity[])`](../../doc/models/legal-entity.md) | Optional | An array of any owners with at least 25% ownership of the company, excluding the principal owner responsible for the account. | getAdditionalOwners(): ?array | setAdditionalOwners(?array additionalOwners): void |
| `identityDocuments` | [`?(IdentityDocument[])`](../../doc/models/identity-document.md) | Optional | - | getIdentityDocuments(): ?array | setIdentityDocuments(?array identityDocuments): void |
| `registration` | [`?BusinessRegistration`](../../doc/models/business-registration.md) | Optional | - | getRegistration(): ?BusinessRegistration | setRegistration(?BusinessRegistration registration): void |

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

