# BeLenka\Helios\Invoices\FakturyVydanApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoicesIssuedDbNameGet()**](FakturyVydanApi.md#invoicesIssuedDbNameGet) | **GET** /invoices/issued/{dbName} | Seznam faktur vydaných |
| [**invoicesIssuedDbNameInvoiceIdDelete()**](FakturyVydanApi.md#invoicesIssuedDbNameInvoiceIdDelete) | **DELETE** /invoices/issued/{dbName}/{invoiceId} | Smazání faktury vydané |
| [**invoicesIssuedDbNameInvoiceIdGet()**](FakturyVydanApi.md#invoicesIssuedDbNameInvoiceIdGet) | **GET** /invoices/issued/{dbName}/{invoiceId} | Faktura vydaná dle ID |
| [**invoicesIssuedDbNameInvoiceIdItemsGet()**](FakturyVydanApi.md#invoicesIssuedDbNameInvoiceIdItemsGet) | **GET** /invoices/issued/{dbName}/{invoiceId}/items | Seznam položek faktury vydané |
| [**invoicesIssuedDbNamePost()**](FakturyVydanApi.md#invoicesIssuedDbNamePost) | **POST** /invoices/issued/{dbName} | Vytvoření nové faktury vydané |


## `invoicesIssuedDbNameGet()`

```php
invoicesIssuedDbNameGet($db_name, $period, $filter, $orderby, $top, $skip): \BeLenka\Helios\Invoices\Model\IssuedInvoicesResult
```

Seznam faktur vydaných

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyVydanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$period = 56; // int | Systémový parametr - Účetní období.
$filter = 'filter_example'; // string | Podmínka pro výběr dat.
$orderby = 'orderby_example'; // string | Seznam sloupců, podle kterých chci třídit.
$top = 56; // int | Stránkování - počet vrácených záznamů (pokud je jich tolik k dispozici, jinak méně).
$skip = 56; // int | Stránkování - počet přeskočených záznamů.

try {
    $result = $apiInstance->invoicesIssuedDbNameGet($db_name, $period, $filter, $orderby, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyVydanApi->invoicesIssuedDbNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **period** | **int**| Systémový parametr - Účetní období. | [optional] |
| **filter** | **string**| Podmínka pro výběr dat. | [optional] |
| **orderby** | **string**| Seznam sloupců, podle kterých chci třídit. | [optional] |
| **top** | **int**| Stránkování - počet vrácených záznamů (pokud je jich tolik k dispozici, jinak méně). | [optional] |
| **skip** | **int**| Stránkování - počet přeskočených záznamů. | [optional] |

### Return type

[**\BeLenka\Helios\Invoices\Model\IssuedInvoicesResult**](../Model/IssuedInvoicesResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesIssuedDbNameInvoiceIdDelete()`

```php
invoicesIssuedDbNameInvoiceIdDelete($db_name, $invoice_id): string
```

Smazání faktury vydané

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyVydanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$invoice_id = 'invoice_id_example'; // string | ID faktury.

try {
    $result = $apiInstance->invoicesIssuedDbNameInvoiceIdDelete($db_name, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyVydanApi->invoicesIssuedDbNameInvoiceIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **invoice_id** | **string**| ID faktury. | |

### Return type

**string**

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesIssuedDbNameInvoiceIdGet()`

```php
invoicesIssuedDbNameInvoiceIdGet($db_name, $invoice_id): \BeLenka\Helios\Invoices\Model\IssuedInvoiceResult
```

Faktura vydaná dle ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyVydanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$invoice_id = 'invoice_id_example'; // string | ID faktury.

try {
    $result = $apiInstance->invoicesIssuedDbNameInvoiceIdGet($db_name, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyVydanApi->invoicesIssuedDbNameInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **invoice_id** | **string**| ID faktury. | |

### Return type

[**\BeLenka\Helios\Invoices\Model\IssuedInvoiceResult**](../Model/IssuedInvoiceResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesIssuedDbNameInvoiceIdItemsGet()`

```php
invoicesIssuedDbNameInvoiceIdItemsGet($db_name, $invoice_id, $filter, $orderby, $top, $skip): \BeLenka\Helios\Invoices\Model\IssuedInvoiceItemsResult
```

Seznam položek faktury vydané

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyVydanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$invoice_id = 'invoice_id_example'; // string | ID faktury.
$filter = 'filter_example'; // string | Podmínka pro výběr dat.
$orderby = 'orderby_example'; // string | Seznam sloupců, podle kterých chci třídit.
$top = 56; // int | Stránkování - počet vrácených záznamů (pokud je jich tolik k dispozici, jinak méně).
$skip = 56; // int | Stránkování - počet přeskočených záznamů.

try {
    $result = $apiInstance->invoicesIssuedDbNameInvoiceIdItemsGet($db_name, $invoice_id, $filter, $orderby, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyVydanApi->invoicesIssuedDbNameInvoiceIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **invoice_id** | **string**| ID faktury. | |
| **filter** | **string**| Podmínka pro výběr dat. | [optional] |
| **orderby** | **string**| Seznam sloupců, podle kterých chci třídit. | [optional] |
| **top** | **int**| Stránkování - počet vrácených záznamů (pokud je jich tolik k dispozici, jinak méně). | [optional] |
| **skip** | **int**| Stránkování - počet přeskočených záznamů. | [optional] |

### Return type

[**\BeLenka\Helios\Invoices\Model\IssuedInvoiceItemsResult**](../Model/IssuedInvoiceItemsResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesIssuedDbNamePost()`

```php
invoicesIssuedDbNamePost($db_name, $issued_invoice_body_post): \BeLenka\Helios\Invoices\Model\IssuedInvoicePOSTResult
```

Vytvoření nové faktury vydané

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyVydanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$issued_invoice_body_post = new \BeLenka\Helios\Invoices\Model\IssuedInvoiceBodyPOST(); // \BeLenka\Helios\Invoices\Model\IssuedInvoiceBodyPOST | 

try {
    $result = $apiInstance->invoicesIssuedDbNamePost($db_name, $issued_invoice_body_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyVydanApi->invoicesIssuedDbNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **issued_invoice_body_post** | [**\BeLenka\Helios\Invoices\Model\IssuedInvoiceBodyPOST**](../Model/IssuedInvoiceBodyPOST.md)|  | [optional] |

### Return type

[**\BeLenka\Helios\Invoices\Model\IssuedInvoicePOSTResult**](../Model/IssuedInvoicePOSTResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
