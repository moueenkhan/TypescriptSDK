
# Entity

## Structure

`Entity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `created` | `?\DateTime` | Optional | - | getCreated(): ?\DateTime | setCreated(?\DateTime created): void |
| `updated` | `?\DateTime` | Optional | - | getUpdated(): ?\DateTime | setUpdated(?\DateTime updated): void |
| `correlationRefs` | [`?(CorrelationRef[])`](../../doc/models/correlation-ref.md) | Optional | - | getCorrelationRefs(): ?array | setCorrelationRefs(?array correlationRefs): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "id": null,
  "created": null,
  "updated": null,
  "correlationRefs": null,
  "metadata": null
}
```

