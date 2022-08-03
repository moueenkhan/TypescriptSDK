
# Payee

## Structure

`Payee`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `created` | `?\DateTime` | Optional | - | getCreated(): ?\DateTime | setCreated(?\DateTime created): void |
| `updated` | `?\DateTime` | Optional | - | getUpdated(): ?\DateTime | setUpdated(?\DateTime updated): void |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `parent` | [`?Parent`](../../doc/models/parent.md) | Optional | - | getParent(): ?Parent | setParent(?Parent parent): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `timezone` | `?string` | Optional | - | getTimezone(): ?string | setTimezone(?string timezone): void |
| `defaultCurrency` | `?string` | Optional | - | getDefaultCurrency(): ?string | setDefaultCurrency(?string defaultCurrency): void |
| `defaultLanguage` | `?string` | Optional | - | getDefaultLanguage(): ?string | setDefaultLanguage(?string defaultLanguage): void |
| `legalEntity` | [`?LegalEntity`](../../doc/models/legal-entity.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntity` model is extended with either [`IndividualLegalEntity`](../../doc/models/individual-legal-entity.md) or [`BusinessLegalEntity`](../../doc/models/business-legal-entity.md) | getLegalEntity(): ?LegalEntity | setLegalEntity(?LegalEntity legalEntity): void |
| `preferences` | `?array` | Optional | - | getPreferences(): ?array | setPreferences(?array preferences): void |
| `status` | [`?EntityStatus`](../../doc/models/entity-status.md) | Optional | - | getStatus(): ?EntityStatus | setStatus(?EntityStatus status): void |

## Example (as JSON)

```json
{
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "displayName": null,
  "country": null,
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": null,
  "preferences": null,
  "status": null
}
```

