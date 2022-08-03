/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import {
  array,
  boolean,
  lazy,
  object,
  optional,
  Schema,
  string,
} from '../schema';
import {
  FieldSpecification,
  fieldSpecificationSchema,
} from './fieldSpecification';

export interface PaymentMethodSpecification {
  name?: string;
  displayName?: string;
  /** ISO 3166-1 alpha-2 or alpha-3 country code. */
  supportedCountries?: string[];
  /** ISO 4217 currency code. */
  supportedCurrencies?: string[];
  requiredFields?: string[];
  /** Describes payment method specific details, accepted in the payment request. */
  details?: FieldSpecification[];
  /** Describes action fields returned in the payment response. */
  actions?: FieldSpecification[];
  /** Describes the supported instrument type that can be used with this payment method. */
  supportedInstrumentTypes?: string[];
  /** Indicates if this payment method requires one of the supported instrument types to be supplied. */
  requiresInstrument?: boolean;
}

export const paymentMethodSpecificationSchema: Schema<PaymentMethodSpecification> = object(
  {
    name: ['name', optional(string())],
    displayName: ['displayName', optional(string())],
    supportedCountries: ['supportedCountries', optional(array(string()))],
    supportedCurrencies: ['supportedCurrencies', optional(array(string()))],
    requiredFields: ['requiredFields', optional(array(string()))],
    details: ['details', optional(array(lazy(() => fieldSpecificationSchema)))],
    actions: ['actions', optional(array(lazy(() => fieldSpecificationSchema)))],
    supportedInstrumentTypes: [
      'supportedInstrumentTypes',
      optional(array(string())),
    ],
    requiresInstrument: ['requiresInstrument', optional(boolean())],
  }
);
