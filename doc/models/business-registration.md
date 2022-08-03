
# Business Registration

## Structure

`BusinessRegistration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `formationDate` | `?\DateTime` | Optional | Date of the company was created. | getFormationDate(): ?\DateTime | setFormationDate(?\DateTime formationDate): void |
| `formationCountry` | `?string` | Optional | The country where the business was created.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3` | getFormationCountry(): ?string | setFormationCountry(?string formationCountry): void |
| `formationState` | `?string` | Optional | The state or province where the business was created | getFormationState(): ?string | setFormationState(?string formationState): void |

## Example (as JSON)

```json
{
  "formationDate": null,
  "formationCountry": null,
  "formationState": null
}
```

