
# Verification Status History

## Structure

`VerificationStatusHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timestamp` | `?\DateTime` | Optional | - | getTimestamp(): ?\DateTime | setTimestamp(?\DateTime timestamp): void |
| `state` | [`?string (VerificationStateEnum)`](../../doc/models/verification-state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `requiredActions` | [`?(VerificationAction[])`](../../doc/models/verification-action.md) | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |

## Example (as JSON)

```json
{
  "timestamp": null,
  "state": null,
  "description": null,
  "requiredActions": null
}
```

