
# Denied Capability

## Structure

`DeniedCapability`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Default**: `'DIRECT_DEBIT'` | getType(): string | setType(string type): void |
| `reasons` | `?(string[])` | Optional | - | getReasons(): ?array | setReasons(?array reasons): void |
| `requiredActions` | `?(array[])` | Optional | - | getRequiredActions(): ?array | setRequiredActions(?array requiredActions): void |

## Example (as JSON)

```json
{
  "type": "DIRECT_DEBIT"
}
```

