
# Denied Capability

## Structure

`DeniedCapability`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Default**: `'DIRECT_DEBIT'` |
| `reasons` | `string[] \| undefined` | Optional | - |
| `requiredActions` | `unknown[] \| undefined` | Optional | - |

## Example (as JSON)

```json
{
  "type": "DIRECT_DEBIT"
}
```

