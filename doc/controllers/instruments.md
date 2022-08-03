# Instruments

```ts
const instrumentsController = new InstrumentsController(client);
```

## Class Name

`InstrumentsController`

## Methods

* [Get Instruments](../../doc/controllers/instruments.md#get-instruments)
* [Create Instrument](../../doc/controllers/instruments.md#create-instrument)
* [Get Instrument](../../doc/controllers/instruments.md#get-instrument)
* [Update Instrument](../../doc/controllers/instruments.md#update-instrument)
* [Delete Instrument](../../doc/controllers/instruments.md#delete-instrument)
* [Verify Instrument](../../doc/controllers/instruments.md#verify-instrument)


# Get Instruments

Retrieve all Instruments.

```ts
async getInstruments(
  offset?: number,
  limit?: number,
  marketplaceId?: string,
  merchantId?: string,
  customerId?: string,
  correlationRefLabel?: string,
  correlationRefValue?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<InstrumentPage>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `offset` | `number \| undefined` | Query, Optional | Offset the list of returned results by this amount. Default is `0`.<br>**Default**: `0` |
| `limit` | `number \| undefined` | Query, Optional | Number of items to retrieve.<br>**Default**: `20` |
| `marketplaceId` | `string \| undefined` | Query, Optional | Filter by `marketplaceId`. |
| `merchantId` | `string \| undefined` | Query, Optional | Filter by `merchantId`. |
| `customerId` | `string \| undefined` | Query, Optional | Filter by `customerId`. |
| `correlationRefLabel` | `string \| undefined` | Query, Optional | Filter by `correlationRef.label`. |
| `correlationRefValue` | `string \| undefined` | Query, Optional | Filter by `correlationRef.value`. |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`InstrumentPage`](../../doc/models/instrument-page.md)

## Example Usage

```ts
const offset = 0;
const limit = 20;
const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await instrumentsController.getInstruments(offset, limit, None, None, None, None, None, internalUseOnly);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ErrorsError`](../../doc/models/errors-error.md) |


# Create Instrument

Create an Instrument.

```ts
async createInstrument(
  request: CreateInstrumentRequest,
  xYapStoneIdempotentKey?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Instrument>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateInstrumentRequest`](../../doc/models/create-instrument-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `string \| undefined` | Header, Optional | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```ts
const requestNamesOnAccount: NameOnAccount[] = [];

const requestnamesOnAccount0: NameOnAccount = {
  type: 'INDIVIDUAL',
  name: 'name2',
};

requestNamesOnAccount[0] = requestnamesOnAccount0;

const requestDetails: Record<string, string> = {'key0' : 'details1', 'key1' : 'details2' } const request: CreateInstrumentRequest = {
  type: 'type4',
  currency: 'currency6',
  country: 'country0',
  namesOnAccount: requestNamesOnAccount,
  details: requestDetails,
};

const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await instrumentsController.createInstrument(request, None, internalUseOnly);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Conflict | [`ErrorsError`](../../doc/models/errors-error.md) |
| 422 | Unprocessable Entity | [`ErrorsError`](../../doc/models/errors-error.md) |


# Get Instrument

Retrieve an Instrument by id.

```ts
async getInstrument(
  id: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Instrument>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```ts
const id = 'id0';
const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await instrumentsController.getInstrument(id, internalUseOnly);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsError`](../../doc/models/errors-error.md) |


# Update Instrument

Update an Instrument by id.

```ts
async updateInstrument(
  id: string,
  request: UpdateInstrumentRequest,
  xYapStoneIdempotentKey?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Instrument>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`UpdateInstrumentRequest`](../../doc/models/update-instrument-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `string \| undefined` | Header, Optional | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```ts
const id = 'id0';
const requestNamesOnAccount: NameOnAccount[] = [];

const requestnamesOnAccount0: NameOnAccount = {
  type: 'INDIVIDUAL',
  name: 'name2',
};

requestNamesOnAccount[0] = requestnamesOnAccount0;

const requestDetails: Record<string, string> = {'key0' : 'details1', 'key1' : 'details2' } const request: UpdateInstrumentRequest = {
  type: 'type4',
  currency: 'currency6',
  country: 'country0',
  namesOnAccount: requestNamesOnAccount,
  details: requestDetails,
};

const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await instrumentsController.updateInstrument(id, request, None, internalUseOnly);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsError`](../../doc/models/errors-error.md) |
| 409 | Conflict | [`ErrorsError`](../../doc/models/errors-error.md) |
| 422 | Unprocessable Entity | [`ErrorsError`](../../doc/models/errors-error.md) |


# Delete Instrument

Delete an Instrument by id.

```ts
async deleteInstrument(
  id: string,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Instrument>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```ts
const id = 'id0';
try {
  const { result, ...httpResponse } = await instrumentsController.deleteInstrument(id);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsError`](../../doc/models/errors-error.md) |


# Verify Instrument

Request verification of an Instrument by id.

```ts
async verifyInstrument(
  id: string,
  request: VerifyInstrumentRequest,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Instrument>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`VerifyInstrumentRequest`](../../doc/models/verify-instrument-request.md) | Body, Required | - |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```ts
const id = 'id0';
const request: VerifyInstrumentRequest = {};

try {
  const { result, ...httpResponse } = await instrumentsController.verifyInstrument(id, request);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsError`](../../doc/models/errors-error.md) |

