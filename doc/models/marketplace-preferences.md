
# Marketplace Preferences

## Structure

`MarketplacePreferences`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `network` | [`?NetworkPreferences`](../../doc/models/network-preferences.md) | Optional | - | getNetwork(): ?NetworkPreferences | setNetwork(?NetworkPreferences network): void |
| `webhook` | [`?WebhookPreferences`](../../doc/models/webhook-preferences.md) | Optional | - | getWebhook(): ?WebhookPreferences | setWebhook(?WebhookPreferences webhook): void |
| `cors` | [`?MarketplaceCORSPreferences`](../../doc/models/marketplace-cors-preferences.md) | Optional | - | getCors(): ?MarketplaceCORSPreferences | setCors(?MarketplaceCORSPreferences cors): void |

## Example (as JSON)

```json
{
  "network": null,
  "webhook": null,
  "cors": null
}
```

