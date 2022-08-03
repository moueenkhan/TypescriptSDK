
# Verification Status

## Structure

`VerificationStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | [`?string (VerificationStateEnum)`](../../doc/models/verification-state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `requiredActions` | [`?(VerificationAction[])`](../../doc/models/verification-action.md) | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |
| `history` | [`?(VerificationStatusHistory[])`](../../doc/models/verification-status-history.md) | Optional | - | getHistory(): ?array | setHistory(?array history): void |

## Example (as JSON)

```json
{
  "state": null,
  "description": null,
  "requiredActions": null,
  "history": null
}
```

