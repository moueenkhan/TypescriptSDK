/**
 * Yapstone Staged On-Boarding ServicesLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

import { Schema, stringEnum } from '../schema';

/**
 * Enum for EntityStateEnum
 */
export enum EntityStateEnum {
  ENABLED = 'ENABLED',
  DISABLED = 'DISABLED',
  USERDISABLED = 'USER_DISABLED',
}

/**
 * Schema for EntityStateEnum
 */
export const entityStateEnumSchema: Schema<EntityStateEnum> = stringEnum(EntityStateEnum);
