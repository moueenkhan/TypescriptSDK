/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { object, optional, Schema, string } from '../schema';

export interface ValidationAction {
  field?: string;
  errorCode?: string;
  message?: string;
}

export const validationActionSchema: Schema<ValidationAction> = object({
  field: ['field', optional(string())],
  errorCode: ['errorCode', optional(string())],
  message: ['message', optional(string())],
});
