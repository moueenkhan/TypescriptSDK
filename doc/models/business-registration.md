
# Business Registration

## Structure

`BusinessRegistration`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `formationDate` | `string \| undefined` | Optional | Date of the company was created. |
| `formationCountry` | `string \| undefined` | Optional | The country where the business was created.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` |
| `formationState` | `string \| undefined` | Optional | The state or province where the business was created |

## Example (as JSON)

```json
{
  "formationDate": null,
  "formationCountry": null,
  "formationState": null
}
```

