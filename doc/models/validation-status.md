
# Validation Status

## Structure

`ValidationStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | [`?string (StateEnum)`](../../doc/models/state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `requiredActions` | [`?(ValidationAction[])`](../../doc/models/validation-action.md) | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |

## Example (as JSON)

```json
{
  "state": null,
  "requiredActions": null
}
```

