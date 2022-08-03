# Customers

```ts
const customersController = new CustomersController(client);
```

## Class Name

`CustomersController`

## Methods

* [Get Customers](../../doc/controllers/customers.md#get-customers)
* [Create Customer](../../doc/controllers/customers.md#create-customer)
* [Get Customer](../../doc/controllers/customers.md#get-customer)
* [Update Customer](../../doc/controllers/customers.md#update-customer)
* [Delete Customer](../../doc/controllers/customers.md#delete-customer)
* [Verify Customer](../../doc/controllers/customers.md#verify-customer)


# Get Customers

Retrieve all Customers.

```ts
async getCustomers(
  offset?: number,
  limit?: number,
  correlationRefLabel?: string,
  correlationRefValue?: string,
  marketplaceId?: string,
  merchantId?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<CustomerPage>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `offset` | `number \| undefined` | Query, Optional | Offset the list of returned results by this amount. Default is `0`.<br>**Default**: `0` |
| `limit` | `number \| undefined` | Query, Optional | Number of items to retrieve.<br>**Default**: `20` |
| `correlationRefLabel` | `string \| undefined` | Query, Optional | Filter by `correlationRef.label`. |
| `correlationRefValue` | `string \| undefined` | Query, Optional | Filter by `correlationRef.value`. |
| `marketplaceId` | `string \| undefined` | Query, Optional | Filter by `marketplaceId`. |
| `merchantId` | `string \| undefined` | Query, Optional | Filter by `merchantId`. |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`CustomerPage`](../../doc/models/customer-page.md)

## Example Usage

```ts
const offset = 0;
const limit = 20;
const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await customersController.getCustomers(offset, limit, None, None, None, None, internalUseOnly);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```


# Create Customer

Create a Customer.

```ts
async createCustomer(
  request: CreateCustomerRequest,
  xYapStoneIdempotentKey?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Customer>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `string \| undefined` | Header, Optional | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```ts
const requestLegalEntity: LegalEntityRequest = {
  type: 'INDIVIDUAL',
};

const request: CreateCustomerRequest = {
  country: 'country0',
  legalEntity: requestLegalEntity,
};

const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await customersController.createCustomer(request, None, internalUseOnly);
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


# Get Customer

Retrieve a Customer by id.

```ts
async getCustomer(
  id: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Customer>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```ts
const id = 'id0';
const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await customersController.getCustomer(id, internalUseOnly);
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


# Update Customer

Update a Customer by id.

```ts
async updateCustomer(
  id: string,
  request: UpdateCustomerRequest,
  xYapStoneIdempotentKey?: string,
  internalUseOnly?: boolean,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Customer>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`UpdateCustomerRequest`](../../doc/models/update-customer-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `string \| undefined` | Header, Optional | - |
| `internalUseOnly` | `boolean \| undefined` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```ts
const id = 'id0';
const requestLegalEntity: LegalEntityRequest = {
  type: 'INDIVIDUAL',
};

const request: UpdateCustomerRequest = {
  country: 'country0',
  legalEntity: requestLegalEntity,
};

const internalUseOnly = false;
try {
  const { result, ...httpResponse } = await customersController.updateCustomer(id, request, None, internalUseOnly);
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


# Delete Customer

Delete a Customer by id.

```ts
async deleteCustomer(
  id: string,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Customer>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```ts
const id = 'id0';
try {
  const { result, ...httpResponse } = await customersController.deleteCustomer(id);
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


# Verify Customer

Perform verification of a Customers supplied details.

```ts
async verifyCustomer(
  id: string,
  requestOptions?: RequestOptions
): Promise<ApiResponse<Customer>>
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `requestOptions` | `RequestOptions \| undefined` | Optional | Pass additional request options. |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```ts
const id = 'id0';
try {
  const { result, ...httpResponse } = await customersController.verifyCustomer(id);
  // Get more response info...
  // const { statusCode, headers } = httpResponse;
} catch(error) {
  if (error instanceof ApiError) {
    const errors = error.result;
    // const { statusCode, headers } = error;
  }
}
```

