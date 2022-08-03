
# Entity Status

## Structure

`EntityStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | [`?string (EntityStateEnum)`](../../doc/models/entity-state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `disabledReasons` | `?(string[])` | Optional | - | getDisabledReasons(): ?array | setDisabledReasons(?array disabledReasons): void |
| `history` | [`?(EntityStatusHistory[])`](../../doc/models/entity-status-history.md) | Optional | - | getHistory(): ?array | setHistory(?array history): void |
| `validation` | [`?ValidationStatus`](../../doc/models/validation-status.md) | Optional | - | getValidation(): ?ValidationStatus | setValidation(?ValidationStatus validation): void |

## Example (as JSON)

```json
{
  "state": null,
  "disabledReasons": null,
  "history": null,
  "validation": null
}
```

