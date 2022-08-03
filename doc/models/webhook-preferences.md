
# Webhook Preferences

## Structure

`WebhookPreferences`

## Fields

| Name | Type | Tags | Description |
|  --- | --- | --- | --- |
| `onboardingWebhook` | `string \| undefined` | Optional | Client supplied URL that will be notified for all onboarding events. |
| `onboardingWebhookAuthentication` | [`WebhookAuthenticationPreference \| undefined`](../../doc/models/webhook-authentication-preference.md) | Optional | - |

## Example (as JSON)

```json
{
  "onboardingWebhook": null,
  "onboardingWebhookAuthentication": null
}
```

