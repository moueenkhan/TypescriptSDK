
# Property Reservation Policy

## Structure

`PropertyReservationPolicy`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `checkIn` | `?\DateTime` | Optional | - | getCheckIn(): ?\DateTime | setCheckIn(?\DateTime checkIn): void |
| `checkOut` | `?\DateTime` | Optional | - | getCheckOut(): ?\DateTime | setCheckOut(?\DateTime checkOut): void |
| `minStayDays` | `?int` | Optional | - | getMinStayDays(): ?int | setMinStayDays(?int minStayDays): void |
| `maxStayDays` | `?int` | Optional | - | getMaxStayDays(): ?int | setMaxStayDays(?int maxStayDays): void |
| `cancellationPolicy` | `?string` | Optional | - | getCancellationPolicy(): ?string | setCancellationPolicy(?string cancellationPolicy): void |

## Example (as JSON)

```json
{
  "checkIn": null,
  "checkOut": null,
  "minStayDays": null,
  "maxStayDays": null,
  "cancellationPolicy": null
}
```

