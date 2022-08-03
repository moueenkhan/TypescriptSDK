
# Business Legal Entity Request

## Structure

`BusinessLegalEntityRequest`

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
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getName(): ?string | setName(?string name): void |
| `businessType` | [`?string (BusinessTypeEnum)`](../../doc/models/business-type-enum.md) | Optional | - | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `dba` | `?(string[])` | Optional | Doing Business As | getDba(): ?array | setDba(?array dba): void |
| `primaryContact` | [`?IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) | Optional | - | getPrimaryContact(): ?IndividualLegalEntityRequest | setPrimaryContact(?IndividualLegalEntityRequest primaryContact): void |
| `principalOwner` | [`?LegalEntityRequest`](../../doc/models/legal-entity-request.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) | getPrincipalOwner(): ?LegalEntityRequest | setPrincipalOwner(?LegalEntityRequest principalOwner): void |
| `additionalOwners` | [`?(LegalEntityRequest[])`](../../doc/models/legal-entity-request.md) | Optional | An array of any owners with at least 25% ownership of the company, excluding the principal owner responsible for the account. | getAdditionalOwners(): ?array | setAdditionalOwners(?array additionalOwners): void |
| `identityDocuments` | [`?(IdentityDocument[])`](../../doc/models/identity-document.md) | Optional | - | getIdentityDocuments(): ?array | setIdentityDocuments(?array identityDocuments): void |
| `registration` | [`?BusinessRegistration`](../../doc/models/business-registration.md) | Optional | - | getRegistration(): ?BusinessRegistration | setRegistration(?BusinessRegistration registration): void |

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

