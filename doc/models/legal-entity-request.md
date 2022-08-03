
# Legal Entity Request

**Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md)

## Structure

`LegalEntityRequest`

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

