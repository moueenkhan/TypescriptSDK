
# Property Asset

## Structure

`PropertyAsset`

## Inherits From

[`Asset`](../../doc/models/asset.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | - | getAddress(): ?Address | setAddress(?Address address): void |
| `details` | [`?PropertyDetails`](../../doc/models/property-details.md) | Optional | - | getDetails(): ?PropertyDetails | setDetails(?PropertyDetails details): void |
| `rating` | [`?PropertyRating`](../../doc/models/property-rating.md) | Optional | - | getRating(): ?PropertyRating | setRating(?PropertyRating rating): void |
| `reservationPolicy` | [`?PropertyReservationPolicy`](../../doc/models/property-reservation-policy.md) | Optional | - | getReservationPolicy(): ?PropertyReservationPolicy | setReservationPolicy(?PropertyReservationPolicy reservationPolicy): void |
| `rateDetails` | [`?PropertyRateDetails`](../../doc/models/property-rate-details.md) | Optional | - | getRateDetails(): ?PropertyRateDetails | setRateDetails(?PropertyRateDetails rateDetails): void |
| `bookingHistory` | [`?PropertyBookingHistory`](../../doc/models/property-booking-history.md) | Optional | - | getBookingHistory(): ?PropertyBookingHistory | setBookingHistory(?PropertyBookingHistory bookingHistory): void |
| `status` | [`?EntityStatus`](../../doc/models/entity-status.md) | Optional | - | getStatus(): ?EntityStatus | setStatus(?EntityStatus status): void |

## Example (as JSON)

```json
{
  "name": null,
  "address": null,
  "details": null,
  "rating": null,
  "reservationPolicy": null,
  "rateDetails": null,
  "bookingHistory": null,
  "status": null,
  "type": "PropertyAsset",
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null,
  "parent": null,
  "displayName": null,
  "capabilities": null,
  "preferences": null
}
```

