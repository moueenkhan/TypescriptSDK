
# Create Asset Request

## Structure

`CreateAssetRequest`

## Inherits From

[`BaseType`](../../doc/models/base-type.md)

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "correlationRefs": null,
  "metadata": null,
  "type": "CreateAssetRequest",
  "parent": null,
  "displayName": null,
  "preferences": null
}
```

