
# Individual Name

The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix.

## Structure

`IndividualName`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `honorificPrefix` | `string \| undefined` | Optional | The persons title.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `first` | `string` | Required | The persons first name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `middle` | `string \| undefined` | Optional | The persons middle name or initial.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `last` | `string` | Required | The persons last name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `additionalLast` | `string \| undefined` | Optional | The 2nd last name of the person.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |
| `honorificSuffix` | `string \| undefined` | Optional | The persons title.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` |

## Example (as JSON)

```json
{
  "honorificPrefix": null,
  "first": "first6",
  "middle": null,
  "last": "last0",
  "additionalLast": null,
  "honorificSuffix": null
}
```

