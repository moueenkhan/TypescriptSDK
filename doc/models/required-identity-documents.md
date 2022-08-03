
# Required Identity Documents

When both `allOf` and `oneOf` are specified they should be considered as expressions in an AND condition. Eg. allOf[X, Y] AND oneOf[A, B].

## Structure

`RequiredIdentityDocuments`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allOf` | `?(string[])` | Optional | A list of acceptable identity documents, of which all specified are required. | getAllOf(): ?array | setAllOf(?array allOf): void |
| `oneOf` | `?(string[])` | Optional | A list of acceptable identity documents, from which one is required to be chosen. | getOneOf(): ?array | setOneOf(?array oneOf): void |

## Example (as JSON)

```json
{
  "allOf": null,
  "oneOf": null
}
```

