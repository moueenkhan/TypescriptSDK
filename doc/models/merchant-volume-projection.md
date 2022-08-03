
# Merchant Volume Projection

## Structure

`MerchantVolumeProjection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `period` | [`string (PeriodEnum)`](../../doc/models/period-enum.md) | Required | - | getPeriod(): string | setPeriod(string period): void |
| `amount` | [`Money`](../../doc/models/money.md) | Required | - | getAmount(): Money | setAmount(Money amount): void |

## Example (as JSON)

```json
{
  "period": "DAILY",
  "amount": {
    "currency": null,
    "value": null
  }
}
```

