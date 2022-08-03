
# Direct Debit Consent

## Structure

`DirectDebitConsent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (Type1Enum)`](../../doc/models/type-1-enum.md) | Required | - | getType(): string | setType(string type): void |
| `timeOfConsent` | `\DateTime` | Required | - | getTimeOfConsent(): \DateTime | setTimeOfConsent(\DateTime timeOfConsent): void |
| `version` | `int` | Required | - | getVersion(): int | setVersion(int version): void |
| `frequency` | [`?string (FrequencyEnum)`](../../doc/models/frequency-enum.md) | Optional | - | getFrequency(): ?string | setFrequency(?string frequency): void |

## Example (as JSON)

```json
{
  "type": "TERMS_OF_SERVICE",
  "timeOfConsent": "2016-03-13T12:52:32.123Z",
  "version": 172,
  "frequency": null
}
```

