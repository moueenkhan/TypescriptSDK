
# Identity Document

## Structure

`IdentityDocument`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `displayText` | `?string` | Optional | - | getDisplayText(): ?string | setDisplayText(?string displayText): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `details` | `?array<string,string>` | Optional | - | getDetails(): ?array | setDetails(?array details): void |
| `fingerprints` | [`?(Fingerprint[])`](../../doc/models/fingerprint.md) | Optional | - | getFingerprints(): ?array | setFingerprints(?array fingerprints): void |

## Example (as JSON)

```json
{
  "displayText": null,
  "type": null,
  "details": null,
  "fingerprints": null
}
```

