
# Create Customer Request

## Structure

`CreateCustomerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `parent` | [`?Parent`](../../doc/models/parent.md) | Optional | - | getParent(): ?Parent | setParent(?Parent parent): void |
| `displayName` | `?string` | Optional | If not supplied, derived from the legal entity name. | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `country` | `string` | Required | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` | getCountry(): string | setCountry(string country): void |
| `timezone` | `?string` | Optional | Time Zone ID. If not supplied will be derived from the `country` usually the capital city. | getTimezone(): ?string | setTimezone(?string timezone): void |
| `defaultCurrency` | `?string` | Optional | Default currency for this customer, if not supplied derived from the `country`.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getDefaultCurrency(): ?string | setDefaultCurrency(?string defaultCurrency): void |
| `defaultLanguage` | `?string` | Optional | Default language for this customer, if not supplied derived from the `country`. | getDefaultLanguage(): ?string | setDefaultLanguage(?string defaultLanguage): void |
| `legalEntity` | [`LegalEntityRequest`](../../doc/models/legal-entity-request.md) | Required | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) | getLegalEntity(): LegalEntityRequest | setLegalEntity(LegalEntityRequest legalEntity): void |
| `options` | [`?CustomerOptions`](../../doc/models/customer-options.md) | Optional | - | getOptions(): ?CustomerOptions | setOptions(?CustomerOptions options): void |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "displayName": null,
  "country": "country4",
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": {
    "type": "INDIVIDUAL",
    "address": null,
    "phone": null,
    "email": null,
    "website": null,
    "socialNetworks": null,
    "digitalCurrencyAddresses": null,
    "additional": null
  },
  "options": null
}
```

