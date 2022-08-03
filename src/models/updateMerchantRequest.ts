/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { array, dict, lazy, object, optional, Schema, string } from '../schema';
import { Consent, consentSchema } from './consent';
import { CorrelationRef, correlationRefSchema } from './correlationRef';
import {
  LegalEntityRequest,
  legalEntityRequestSchema,
} from './legalEntityRequest';
import {
  MerchantPreferences,
  merchantPreferencesSchema,
} from './merchantPreferences';

export interface UpdateMerchantRequest {
  correlationRefs?: CorrelationRef[];
  metadata?: Record<string, string>;
  displayName?: string;
  country?: string;
  timezone?: string;
  defaultCurrency?: string;
  defaultLanguage?: string;
  /** **Important !** Depending on the value of the `type` parameter, the `LegalEntityRequest` model is extended with either [`IndividualLegalEntityRequest`]($m/IndividualLegalEntityRequest) or [`BusinessLegalEntityRequest`]($m/BusinessLegalEntityRequest) */
  legalEntity?: LegalEntityRequest;
  consents?: Consent[];
  preferences?: MerchantPreferences;
}

export const updateMerchantRequestSchema: Schema<UpdateMerchantRequest> = object(
  {
    correlationRefs: [
      'correlationRefs',
      optional(array(lazy(() => correlationRefSchema))),
    ],
    metadata: ['metadata', optional(dict(string()))],
    displayName: ['displayName', optional(string())],
    country: ['country', optional(string())],
    timezone: ['timezone', optional(string())],
    defaultCurrency: ['defaultCurrency', optional(string())],
    defaultLanguage: ['defaultLanguage', optional(string())],
    legalEntity: [
      'legalEntity',
      optional(lazy(() => legalEntityRequestSchema)),
    ],
    consents: ['consents', optional(array(lazy(() => consentSchema)))],
    preferences: [
      'preferences',
      optional(lazy(() => merchantPreferencesSchema)),
    ],
  }
);
