
# Address

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `line1` | `?string` | Optional | Address line 1 (Street address/PO Box/Company name).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Address line 2 (Apartment/Suite/Unit/Building).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` | getLine2(): ?string | setLine2(?string line2): void |
| `line3` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` | getLine3(): ?string | setLine3(?string line3): void |
| `line4` | `?string` | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048` | getLine4(): ?string | setLine4(?string line4): void |
| `city` | `?string` | Optional | City/District/Suburb/Town/Village.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State/County/Province/Region.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255` | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | ZIP or postal code<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `country` | `?string` | Optional | ISO 3166-1 alpha-2 or alpha-3 country code. | getCountry(): ?string | setCountry(?string country): void |

## Example (as JSON)

```json
{
  "line1": null,
  "line2": null,
  "line3": null,
  "line4": null,
  "city": null,
  "state": null,
  "postalCode": null,
  "country": null
}
```

