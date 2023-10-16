# BeLenka\Helios\Invoices\FakturyPijatApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**invoicesReceivedDbNameGet()**](FakturyPijatApi.md#invoicesReceivedDbNameGet) | **GET** /invoices/received/{dbName} | Seznam faktur přijatých |
| [**invoicesReceivedDbNameInvoiceIdDelete()**](FakturyPijatApi.md#invoicesReceivedDbNameInvoiceIdDelete) | **DELETE** /invoices/received/{dbName}/{invoiceId} | Smazání faktury přijaté |
| [**invoicesReceivedDbNameInvoiceIdGet()**](FakturyPijatApi.md#invoicesReceivedDbNameInvoiceIdGet) | **GET** /invoices/received/{dbName}/{invoiceId} | Faktura přijatá dle ID |
| [**invoicesReceivedDbNameInvoiceIdItemsGet()**](FakturyPijatApi.md#invoicesReceivedDbNameInvoiceIdItemsGet) | **GET** /invoices/received/{dbName}/{invoiceId}/items | Seznam položek faktury přijaté |
| [**invoicesReceivedDbNamePost()**](FakturyPijatApi.md#invoicesReceivedDbNamePost) | **POST** /invoices/received/{dbName} | Vytvoření nové faktury přijaté |


## `invoicesReceivedDbNameGet()`

```php
invoicesReceivedDbNameGet($db_name, $period, $filter, $orderby, $top, $skip): \BeLenka\Helios\Invoices\Model\ReceivedInvoicesResult
```

Seznam faktur přijatých

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyPijatApi(
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
    $result = $apiInstance->invoicesReceivedDbNameGet($db_name, $period, $filter, $orderby, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyPijatApi->invoicesReceivedDbNameGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResult**](../Model/ReceivedInvoicesResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesReceivedDbNameInvoiceIdDelete()`

```php
invoicesReceivedDbNameInvoiceIdDelete($db_name, $invoice_id): string
```

Smazání faktury přijaté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyPijatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$invoice_id = 'invoice_id_example'; // string | ID faktury.

try {
    $result = $apiInstance->invoicesReceivedDbNameInvoiceIdDelete($db_name, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyPijatApi->invoicesReceivedDbNameInvoiceIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `invoicesReceivedDbNameInvoiceIdGet()`

```php
invoicesReceivedDbNameInvoiceIdGet($db_name, $invoice_id): \BeLenka\Helios\Invoices\Model\ReceivedInvoiceResult
```

Faktura přijatá dle ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyPijatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$invoice_id = 'invoice_id_example'; // string | ID faktury.

try {
    $result = $apiInstance->invoicesReceivedDbNameInvoiceIdGet($db_name, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyPijatApi->invoicesReceivedDbNameInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **invoice_id** | **string**| ID faktury. | |

### Return type

[**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceResult**](../Model/ReceivedInvoiceResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesReceivedDbNameInvoiceIdItemsGet()`

```php
invoicesReceivedDbNameInvoiceIdItemsGet($db_name, $invoice_id, $filter, $orderby, $top, $skip): \BeLenka\Helios\Invoices\Model\ReceivedInvoiceItemsResult
```

Seznam položek faktury přijaté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyPijatApi(
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
    $result = $apiInstance->invoicesReceivedDbNameInvoiceIdItemsGet($db_name, $invoice_id, $filter, $orderby, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyPijatApi->invoicesReceivedDbNameInvoiceIdItemsGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceItemsResult**](../Model/ReceivedInvoiceItemsResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicesReceivedDbNamePost()`

```php
invoicesReceivedDbNamePost($db_name, $received_invoice_body_post): \BeLenka\Helios\Invoices\Model\ReceivedInvoicePOSTResult
```

Vytvoření nové faktury přijaté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: authToken
$config = BeLenka\Helios\Invoices\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Helios\Invoices\Api\FakturyPijatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$db_name = HeO3_Beta; // string | Název databáze.
$received_invoice_body_post = new \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOST(); // \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOST | 

try {
    $result = $apiInstance->invoicesReceivedDbNamePost($db_name, $received_invoice_body_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakturyPijatApi->invoicesReceivedDbNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **db_name** | **string**| Název databáze. | |
| **received_invoice_body_post** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOST**](../Model/ReceivedInvoiceBodyPOST.md)|  | [optional] |

### Return type

[**\BeLenka\Helios\Invoices\Model\ReceivedInvoicePOSTResult**](../Model/ReceivedInvoicePOSTResult.md)

### Authorization

[authToken](../../README.md#authToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
