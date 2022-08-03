
# Phone

## Structure

`Phone`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `number` | `string` | Required | The phone number of the customer.<br>**Constraints**: *Maximum Length*: `20` | getNumber(): string | setNumber(string number): void |
| `extension` | `?string` | Optional | The phone extension.<br>**Constraints**: *Maximum Length*: `10` | getExtension(): ?string | setExtension(?string extension): void |

## Example (as JSON)

```json
{
  "number": "number2",
  "extension": null
}
```

