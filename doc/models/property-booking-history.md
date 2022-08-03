
# Property Booking History

## Structure

`PropertyBookingHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `activeSince` | `?\DateTime` | Optional | - | getActiveSince(): ?\DateTime | setActiveSince(?\DateTime activeSince): void |
| `chargeCount` | `?int` | Optional | - | getChargeCount(): ?int | setChargeCount(?int chargeCount): void |
| `chargebackCount` | `?int` | Optional | - | getChargebackCount(): ?int | setChargebackCount(?int chargebackCount): void |
| `chargeVolume` | [`?Money`](../../doc/models/money.md) | Optional | - | getChargeVolume(): ?Money | setChargeVolume(?Money chargeVolume): void |
| `chargebackVolume` | [`?Money`](../../doc/models/money.md) | Optional | - | getChargebackVolume(): ?Money | setChargebackVolume(?Money chargebackVolume): void |

## Example (as JSON)

```json
{
  "activeSince": null,
  "chargeCount": null,
  "chargebackCount": null,
  "chargeVolume": null,
  "chargebackVolume": null
}
```

