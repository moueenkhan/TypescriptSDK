# Instruments

```php
$instrumentsController = $client->getInstrumentsController();
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

```php
function getInstruments(
    ?int $offset = 0,
    ?int $limit = 20,
    ?string $marketplaceId = null,
    ?string $merchantId = null,
    ?string $customerId = null,
    ?string $correlationRefLabel = null,
    ?string $correlationRefValue = null,
    ?bool $internalUseOnly = false
): InstrumentPage
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `offset` | `?int` | Query, Optional | Offset the list of returned results by this amount. Default is `0`.<br>**Default**: `0` |
| `limit` | `?int` | Query, Optional | Number of items to retrieve.<br>**Default**: `20` |
| `marketplaceId` | `?string` | Query, Optional | Filter by `marketplaceId`. |
| `merchantId` | `?string` | Query, Optional | Filter by `merchantId`. |
| `customerId` | `?string` | Query, Optional | Filter by `customerId`. |
| `correlationRefLabel` | `?string` | Query, Optional | Filter by `correlationRef.label`. |
| `correlationRefValue` | `?string` | Query, Optional | Filter by `correlationRef.value`. |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`InstrumentPage`](../../doc/models/instrument-page.md)

## Example Usage

```php
$offset = 0;
$limit = 20;
$internalUseOnly = false;

$result = $instrumentsController->getInstruments($offset, $limit, null, null, null, null, null, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Create Instrument

Create an Instrument.

```php
function createInstrument(
    CreateInstrumentRequest $request,
    ?string $xYapStoneIdempotentKey = null,
    ?bool $internalUseOnly = false
): Instrument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `request` | [`CreateInstrumentRequest`](../../doc/models/create-instrument-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `?string` | Header, Optional | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```php
$request_type = 'type4';
$request_currency = 'currency6';
$request_country = 'country0';
$request_namesOnAccount = [];

$request_namesOnAccount_0_type = Models\LegalEntityTypeEnum::INDIVIDUAL;
$request_namesOnAccount_0_name = 'name2';
$request_namesOnAccount[0] = new Models\NameOnAccount(
    $request_namesOnAccount_0_type,
    $request_namesOnAccount_0_name
);

$request_details = ['key0' => 'details1', 'key1' => 'details2'];
$request = new Models\CreateInstrumentRequest(
    $request_type,
    $request_currency,
    $request_country,
    $request_namesOnAccount,
    $request_details
);
$internalUseOnly = false;

$result = $instrumentsController->createInstrument($request, null, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Conflict | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 422 | Unprocessable Entity | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Get Instrument

Retrieve an Instrument by id.

```php
function getInstrument(string $id, ?bool $internalUseOnly = false): Instrument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```php
$id = 'id0';
$internalUseOnly = false;

$result = $instrumentsController->getInstrument($id, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Update Instrument

Update an Instrument by id.

```php
function updateInstrument(
    string $id,
    UpdateInstrumentRequest $request,
    ?string $xYapStoneIdempotentKey = null,
    ?bool $internalUseOnly = false
): Instrument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`UpdateInstrumentRequest`](../../doc/models/update-instrument-request.md) | Body, Required | - |
| `xYapStoneIdempotentKey` | `?string` | Header, Optional | - |
| `internalUseOnly` | `?bool` | Query, Optional | Indicates that internal-use-only fields should be returned.<br>**Default**: `false` |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```php
$id = 'id0';
$request_type = 'type4';
$request_currency = 'currency6';
$request_country = 'country0';
$request_namesOnAccount = [];

$request_namesOnAccount_0_type = Models\LegalEntityTypeEnum::INDIVIDUAL;
$request_namesOnAccount_0_name = 'name2';
$request_namesOnAccount[0] = new Models\NameOnAccount(
    $request_namesOnAccount_0_type,
    $request_namesOnAccount_0_name
);

$request_details = ['key0' => 'details1', 'key1' => 'details2'];
$request = new Models\UpdateInstrumentRequest(
    $request_type,
    $request_currency,
    $request_country,
    $request_namesOnAccount,
    $request_details
);
$internalUseOnly = false;

$result = $instrumentsController->updateInstrument($id, $request, null, $internalUseOnly);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 409 | Conflict | [`ErrorsException`](../../doc/models/errors-exception.md) |
| 422 | Unprocessable Entity | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Delete Instrument

Delete an Instrument by id.

```php
function deleteInstrument(string $id): Instrument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```php
$id = 'id0';

$result = $instrumentsController->deleteInstrument($id);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |


# Verify Instrument

Request verification of an Instrument by id.

```php
function verifyInstrument(string $id, VerifyInstrumentRequest $request): Instrument
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | - |
| `request` | [`VerifyInstrumentRequest`](../../doc/models/verify-instrument-request.md) | Body, Required | - |

## Response Type

[`Instrument`](../../doc/models/instrument.md)

## Example Usage

```php
$id = 'id0';
$request = new Models\VerifyInstrumentRequest;

$result = $instrumentsController->verifyInstrument($id, $request);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`ErrorsException`](../../doc/models/errors-exception.md) |

