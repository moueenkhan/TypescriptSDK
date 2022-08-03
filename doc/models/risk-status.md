
# Risk Status

## Structure

`RiskStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `decision` | [`?string (RiskDecisionEnum)`](../../doc/models/risk-decision-enum.md) | Optional | - | getDecision(): ?string | setDecision(?string decision): void |
| `declinedReasons` | `?(string[])` | Optional | - | getDeclinedReasons(): ?array | setDeclinedReasons(?array declinedReasons): void |
| `requiredActions` | [`?(RiskRequiredAction[])`](../../doc/models/risk-required-action.md) | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |
| `history` | [`?(RiskStatusHistory[])`](../../doc/models/risk-status-history.md) | Optional | - | getHistory(): ?array | setHistory(?array history): void |

## Example (as JSON)

```json
{
  "decision": null,
  "declinedReasons": null,
  "requiredActions": null,
  "history": null
}
```

