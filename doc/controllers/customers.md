# Customers

```php
$customersController = $client->getCustomersController();
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

```php
function getCustomers(
    ?int $offset = 0,
    ?int $limit = 20,
    ?string $correlationRefLabel = null,
    ?string $correlationRefValue = null,
    ?string $marketplaceId = null,
    ?string $merchantId = null,
    ?bool $internalUseOnly = false
): CustomerPage
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `offset` | `?int` | Query, Optional | Offset the list of returned results by this amount. Default is `0`.<br>**Default**: `0` |
| `limit` | `?int` | Query, Optional | Number of items to retrieve.<br>**Default**: `20` |
| `correlationRefLabel` | `?string` | Query, Optional | Filter by `correlationRef.label`. |
| `correlationRefValue` | `?string` | Query, Optional | Filter by `correlationRef.value`. |
| `marketplaceId` | `?string` | Query, Optional | Filter by `marketplaceId`. |
| `merchantId` | `?string` | Query, Optional | Filter by `merchantId`. |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`CustomerPage`](../../doc/models/customer-page.md)

## Example Usage

```php
$offset = 0;
$limit = 20;
$internalUseOnly = false;

$result = $customersController->getCustomers($offset, $limit, null, null, null, null, $internalUseOnly);
```


# Create Customer

Create a Customer.

```php
function createCustomer(
    CreateCustomerRequest $request,
    ?string $xYapStoneIdempotentKey = null,
    ?bool $internalUseOnly = false
): Customer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateCustomerRequest`](../../doc/models/create-customer-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `?string` | Header, Optional | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```php
$request_country = 'country0';
$request_legalEntity_type = Models\LegalEntityTypeEnum::INDIVIDUAL;
$request_legalEntity = new Models\LegalEntityRequest(
    $request_legalEntity_type
);
$request = new Models\CreateCustomerRequest(
    $request_country,
    $request_legalEntity
);
$internalUseOnly = false;

$result = $customersController->createCustomer($request, null, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Conflict | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 422 | Unprocessable Entity | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Get Customer

Retrieve a Customer by id.

```php
function getCustomer(string $id, ?bool $internalUseOnly = false): Customer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```php
$id = 'id0';
$internalUseOnly = false;

$result = $customersController->getCustomer($id, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Update Customer

Update a Customer by id.

```php
function updateCustomer(
    string $id,
    UpdateCustomerRequest $request,
    ?string $xYapStoneIdempotentKey = null,
    ?bool $internalUseOnly = false
): Customer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`UpdateCustomerRequest`](../../doc/models/update-customer-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `?string` | Header, Optional | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```php
$id = 'id0';
$request_country = 'country0';
$request_legalEntity_type = Models\LegalEntityTypeEnum::INDIVIDUAL;
$request_legalEntity = new Models\LegalEntityRequest(
    $request_legalEntity_type
);
$request = new Models\UpdateCustomerRequest(
    $request_country,
    $request_legalEntity
);
$internalUseOnly = false;

$result = $customersController->updateCustomer($id, $request, null, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 409 | Conflict | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 422 | Unprocessable Entity | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Delete Customer

Delete a Customer by id.

```php
function deleteCustomer(string $id): Customer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```php
$id = 'id0';

$result = $customersController->deleteCustomer($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Verify Customer

Perform verification of a Customers supplied details.

```php
function verifyCustomer(string $id): Customer
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

[`Customer`](../../doc/models/customer.md)

## Example Usage

```php
$id = 'id0';

$result = $customersController->verifyCustomer($id);
```

