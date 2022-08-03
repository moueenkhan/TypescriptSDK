
# Legal Entity

**Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md)

## Structure

`LegalEntity`

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

