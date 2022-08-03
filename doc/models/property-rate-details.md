
# Property Rate Details

## Structure

`PropertyRateDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `min` | [`?Money`](../../doc/models/money.md) | Optional | - | getMin(): ?Money | setMin(?Money min): void |
| `max` | [`?Money`](../../doc/models/money.md) | Optional | - | getMax(): ?Money | setMax(?Money max): void |
| `cleaningFee` | [`?Money`](../../doc/models/money.md) | Optional | - | getCleaningFee(): ?Money | setCleaningFee(?Money cleaningFee): void |
| `sameDayChargeAllowed` | `?bool` | Optional | - | getSameDayChargeAllowed(): ?bool | setSameDayChargeAllowed(?bool sameDayChargeAllowed): void |
| `autoPricing` | `?bool` | Optional | - | getAutoPricing(): ?bool | setAutoPricing(?bool autoPricing): void |
| `rentingFrequency` | [`?string (RentingFrequencyEnum)`](../../doc/models/renting-frequency-enum.md) | Optional | - | getRentingFrequency(): ?string | setRentingFrequency(?string rentingFrequency): void |
| `paymentTerms` | [`?string (PaymentTermsEnum)`](../../doc/models/payment-terms-enum.md) | Optional | - | getPaymentTerms(): ?string | setPaymentTerms(?string paymentTerms): void |

## Example (as JSON)

```json
{
  "min": null,
  "max": null,
  "cleaningFee": null,
  "sameDayChargeAllowed": null,
  "autoPricing": null,
  "rentingFrequency": null,
  "paymentTerms": null
}
```

