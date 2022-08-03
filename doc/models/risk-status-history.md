
# Risk Status History

## Structure

`RiskStatusHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timestamp` | `?\DateTime` | Optional | - | getTimestamp(): ?\DateTime | setTimestamp(?\DateTime timestamp): void |
| `decision` | [`?string (RiskDecisionEnum)`](../../doc/models/risk-decision-enum.md) | Optional | - | getDecision(): ?string | setDecision(?string decision): void |
| `declinedReasons` | `?(string[])` | Optional | - | getDeclinedReasons(): ?array | setDeclinedReasons(?array declinedReasons): void |
| `requiredActions` | [`?(RiskRequiredAction[])`](../../doc/models/risk-required-action.md) | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |

## Example (as JSON)

```json
{
  "timestamp": null,
  "decision": null,
  "declinedReasons": null,
  "requiredActions": null
}
```

