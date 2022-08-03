/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { Schema, stringEnum } from '../schema';

/**
 * Enum for BusinessTypeEnum
 */
export enum BusinessTypeEnum {
  SOLEPROPRIETOR = 'SOLE_PROPRIETOR',
  PARTNERSHIP = 'PARTNERSHIP',
  SCORP = 'S_CORP',
  LLC = 'LLC',
  CORPORATION = 'CORPORATION',
}

/**
 * Schema for BusinessTypeEnum
 */
export const businessTypeEnumSchema: Schema<BusinessTypeEnum> = stringEnum(BusinessTypeEnum);
