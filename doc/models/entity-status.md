
# Entity Status

## Structure

`EntityStatus`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `state` | [`EntityStateEnum \| undefined`](../../doc/models/entity-state-enum.md) | Optional | - |
| `disabledReasons` | `string[] \| undefined` | Optional | - |
| `history` | [`EntityStatusHistory[] \| undefined`](../../doc/models/entity-status-history.md) | Optional | - |
| `validation` | [`ValidationStatus \| undefined`](../../doc/models/validation-status.md) | Optional | - |

## Example (as JSON)

```json
{
  "state": null,
  "disabledReasons": null,
  "history": null,
  "validation": null
}
```

