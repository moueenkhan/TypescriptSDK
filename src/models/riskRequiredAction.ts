/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { object, optional, Schema, string } from '../schema';

export interface RiskRequiredAction {
  actionCode?: string;
  message?: string;
}

export const riskRequiredActionSchema: Schema<RiskRequiredAction> = object({
  actionCode: ['actionCode', optional(string())],
  message: ['message', optional(string())],
});
