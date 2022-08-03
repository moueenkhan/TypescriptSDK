
# Create Instrument Request

## Structure

`CreateInstrumentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `options` | [`?InstrumentOptions`](../../doc/models/instrument-options.md) | Optional | - | getOptions(): ?InstrumentOptions | setOptions(?InstrumentOptions options): void |
| `parent` | [`?Parent`](../../doc/models/parent.md) | Optional | - | getParent(): ?Parent | setParent(?Parent parent): void |
| `type` | `string` | Required | - | getType(): string | setType(string type): void |
| `currency` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getCurrency(): string | setCurrency(string currency): void |
| `country` | `string` | Required | ISO 3166-1 alpha-2 or alpha-3 country code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` | getCountry(): string | setCountry(string country): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `namesOnAccount` | [`NameOnAccount[]`](../../doc/models/name-on-account.md) | Required | **Constraints**: *Minimum Items*: `1` | getNamesOnAccount(): array | setNamesOnAccount(array namesOnAccount): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | - | getAddress(): ?Address | setAddress(?Address address): void |
| `details` | `array<string,string>` | Required | - | getDetails(): array | setDetails(array details): void |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "options": null,
  "parent": null,
  "type": "type0",
  "currency": "currency0",
  "country": "country4",
  "displayName": null,
  "namesOnAccount": [
    {
      "type": "INDIVIDUAL",
      "name": "name6"
    },
    {
      "type": "BUSINESS",
      "name": "name7"
    }
  ],
  "address": null,
  "details": {
    "key0": "details5",
    "key1": "details6",
    "key2": "details7"
  }
}
```

