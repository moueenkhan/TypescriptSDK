/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { object, optional, Schema, string } from '../schema';
import { TypeEnum, typeEnumSchema } from './typeEnum';

export interface SocialNetwork {
  type?: TypeEnum;
  handle?: string;
}

export const socialNetworkSchema: Schema<SocialNetwork> = object({
  type: ['type', optional(typeEnumSchema)],
  handle: ['handle', optional(string())],
});
