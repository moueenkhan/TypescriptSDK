
# Entity Status History

## Structure

`EntityStatusHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timestamp` | `?\DateTime` | Optional | - | getTimestamp(): ?\DateTime | setTimestamp(?\DateTime timestamp): void |
| `state` | [`?string (EntityStateEnum)`](../../doc/models/entity-state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `disabledReasons` | `?(string[])` | Optional | - | getDisabledReasons(): ?array | setDisabledReasons(?array disabledReasons): void |

## Example (as JSON)

```json
{
  "timestamp": null,
  "state": null,
  "disabledReasons": null
}
```

