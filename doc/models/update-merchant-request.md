
# Update Merchant Request

## Structure

`UpdateMerchantRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `timezone` | `?string` | Optional | - | getTimezone(): ?string | setTimezone(?string timezone): void |
| `defaultCurrency` | `?string` | Optional | - | getDefaultCurrency(): ?string | setDefaultCurrency(?string defaultCurrency): void |
| `defaultLanguage` | `?string` | Optional | - | getDefaultLanguage(): ?string | setDefaultLanguage(?string defaultLanguage): void |
| `legalEntity` | [`?LegalEntityRequest`](../../doc/models/legal-entity-request.md) | Optional | **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`](../../doc/models/individual-legal-entity-request.md) or [`BusinessLegalEntityRequest`](../../doc/models/business-legal-entity-request.md) | getLegalEntity(): ?LegalEntityRequest | setLegalEntity(?LegalEntityRequest legalEntity): void |
| `consents` | [`?(Consent[])`](../../doc/models/consent.md) | Optional | - | getConsents(): ?array | setConsents(?array consents): void |
| `preferences` | [`?MerchantPreferences`](../../doc/models/merchant-preferences.md) | Optional | - | getPreferences(): ?MerchantPreferences | setPreferences(?MerchantPreferences preferences): void |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "displayName": null,
  "country": null,
  "timezone": null,
  "defaultCurrency": null,
  "defaultLanguage": null,
  "legalEntity": null,
  "consents": null,
  "preferences": null
}
```

