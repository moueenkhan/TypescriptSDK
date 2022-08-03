
# Field Specification

## Structure

`FieldSpecification`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `field` | `string \| undefined` | Optional | The field name within the `details` section of an `Instrument` or `IdentityDocument`. |
| `type` | [`FieldTypeEnum \| undefined`](../../doc/models/field-type-enum.md) | Optional | The type of the field. |
| `description` | `string \| undefined` | Optional | Detailed description of the field. |
| `displayName` | `string \| undefined` | Optional | Human friendly name for the field, for display purposes in UIs. |
| `required` | `boolean \| undefined` | Optional | Indicates if the specified field is required or optional. |
| `minimumLength` | `bigint \| undefined` | Optional | If present then the value may not be less than the specified minimum length. Only applicable for the 'STRING' type. |
| `maximumLength` | `bigint \| undefined` | Optional | If present then the value may not exceed the specified maximum length. Only applicable for the 'STRING' type. |
| `masked` | `boolean \| undefined` | Optional | If true, then the field will not be available to the caller in the clear, instead as masked version will be returned. |
| `readOnly` | `boolean \| undefined` | Optional | If true, then the detail cannot be populated by the caller, but instead will be generated internally. |
| `enumValues` | `string[] \| undefined` | Optional | If the specification type is 'ENUMERATION' then the input will be validated against these accepted values. |

## Example (as JSON)

```json
{
  "field": null,
  "type": null,
  "description": null,
  "displayName": null,
  "required": null,
  "minimumLength": null,
  "maximumLength": null,
  "masked": null,
  "readOnly": null,
  "enumValues": null
}
```

