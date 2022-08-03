
# Name on Account

## Structure

`NameOnAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (LegalEntityTypeEnum)`](../../doc/models/legal-entity-type-enum.md) | Required | the second description of type parameter | getType(): string | setType(string type): void |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getName(): string | setName(string name): void |

## Example (as JSON)

```json
{
  "type": "INDIVIDUAL",
  "name": "name0"
}
```

