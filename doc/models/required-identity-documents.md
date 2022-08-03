
# Required Identity Documents

When both `allOf` and `oneOf` are specified they should be considered as expressions in an AND condition. Eg. allOf[X, Y] AND oneOf[A, B].

## Structure

`RequiredIdentityDocuments`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `allOf` | `string[] \| undefined` | Optional | A list of acceptable identity documents, of which all specified are required. |
| `oneOf` | `string[] \| undefined` | Optional | A list of acceptable identity documents, from which one is required to be chosen. |

## Example (as JSON)

```json
{
  "allOf": null,
  "oneOf": null
}
```

