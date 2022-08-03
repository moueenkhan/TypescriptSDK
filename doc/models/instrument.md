
# Instrument

## Structure

`Instrument`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `created` | `?\DateTime` | Optional | - | getCreated(): ?\DateTime | setCreated(?\DateTime created): void |
| `updated` | `?\DateTime` | Optional | - | getUpdated(): ?\DateTime | setUpdated(?\DateTime updated): void |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `parent` | [`?Parent`](../../doc/models/parent.md) | Optional | - | getParent(): ?Parent | setParent(?Parent parent): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `country` | `?string` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. | getCountry(): ?string | setCountry(?string country): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `namesOnAccount` | [`?(NameOnAccount[])`](../../doc/models/name-on-account.md) | Optional | - | getNamesOnAccount(): ?array | setNamesOnAccount(?array namesOnAccount): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | - | getAddress(): ?Address | setAddress(?Address address): void |
| `details` | `?array<string,string>` | Optional | - | getDetails(): ?array | setDetails(?array details): void |
| `fingerprints` | [`?(Fingerprint[])`](../../doc/models/fingerprint.md) | Optional | - | getFingerprints(): ?array | setFingerprints(?array fingerprints): void |
| `status` | [`?InstrumentStatus`](../../doc/models/instrument-status.md) | Optional | - | getStatus(): ?InstrumentStatus | setStatus(?InstrumentStatus status): void |
| `capabilities` | [`?Capabilities`](../../doc/models/capabilities.md) | Optional | - | getCapabilities(): ?Capabilities | setCapabilities(?Capabilities capabilities): void |

## Example (as JSON)

```json
{
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "type": null,
  "currency": null,
  "country": null,
  "displayName": null,
  "namesOnAccount": null,
  "address": null,
  "details": null,
  "fingerprints": null,
  "status": null,
  "capabilities": null
}
```

