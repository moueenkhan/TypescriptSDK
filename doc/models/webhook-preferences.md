
# Webhook Preferences

## Structure

`WebhookPreferences`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `onboardingWebhook` | `?string` | Optional | Client supplied URL that will be notified for all onboarding events. | getOnboardingWebhook(): ?string | setOnboardingWebhook(?string onboardingWebhook): void |
| `onboardingWebhookAuthentication` | [`?WebhookAuthenticationPreference`](../../doc/models/webhook-authentication-preference.md) | Optional | - | getOnboardingWebhookAuthentication(): ?WebhookAuthenticationPreference | setOnboardingWebhookAuthentication(?WebhookAuthenticationPreference onboardingWebhookAuthentication): void |

## Example (as JSON)

```json
{
  "onboardingWebhook": null,
  "onboardingWebhookAuthentication": null
}
```

