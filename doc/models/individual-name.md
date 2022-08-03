
# Individual Name

The name of the person. It will consist of first, middle, last, additionalLast, honorificPrefix, and honorificSuffix.

## Structure

`IndividualName`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `honorificPrefix` | `?string` | Optional | The persons title.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getHonorificPrefix(): ?string | setHonorificPrefix(?string honorificPrefix): void |
| `first` | `string` | Required | The persons first name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getFirst(): string | setFirst(string first): void |
| `middle` | `?string` | Optional | The persons middle name or initial.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getMiddle(): ?string | setMiddle(?string middle): void |
| `last` | `string` | Required | The persons last name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getLast(): string | setLast(string last): void |
| `additionalLast` | `?string` | Optional | The 2nd last name of the person.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getAdditionalLast(): ?string | setAdditionalLast(?string additionalLast): void |
| `honorificSuffix` | `?string` | Optional | The persons title.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `512` | getHonorificSuffix(): ?string | setHonorificSuffix(?string honorificSuffix): void |

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

