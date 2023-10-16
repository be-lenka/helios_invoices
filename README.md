# OpenAPIClient-php

## Úvod

**REST API** je rozšířený standard programového rozhranní pro integraci aplikací.




## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FakturyPijatApi* | [**invoicesReceivedDbNameGet**](docs/Api/FakturyPijatApi.md#invoicesreceiveddbnameget) | **GET** /invoices/received/{dbName} | Seznam faktur přijatých
*FakturyPijatApi* | [**invoicesReceivedDbNameInvoiceIdDelete**](docs/Api/FakturyPijatApi.md#invoicesreceiveddbnameinvoiceiddelete) | **DELETE** /invoices/received/{dbName}/{invoiceId} | Smazání faktury přijaté
*FakturyPijatApi* | [**invoicesReceivedDbNameInvoiceIdGet**](docs/Api/FakturyPijatApi.md#invoicesreceiveddbnameinvoiceidget) | **GET** /invoices/received/{dbName}/{invoiceId} | Faktura přijatá dle ID
*FakturyPijatApi* | [**invoicesReceivedDbNameInvoiceIdItemsGet**](docs/Api/FakturyPijatApi.md#invoicesreceiveddbnameinvoiceiditemsget) | **GET** /invoices/received/{dbName}/{invoiceId}/items | Seznam položek faktury přijaté
*FakturyPijatApi* | [**invoicesReceivedDbNamePost**](docs/Api/FakturyPijatApi.md#invoicesreceiveddbnamepost) | **POST** /invoices/received/{dbName} | Vytvoření nové faktury přijaté
*FakturyVydanApi* | [**invoicesIssuedDbNameGet**](docs/Api/FakturyVydanApi.md#invoicesissueddbnameget) | **GET** /invoices/issued/{dbName} | Seznam faktur vydaných
*FakturyVydanApi* | [**invoicesIssuedDbNameInvoiceIdDelete**](docs/Api/FakturyVydanApi.md#invoicesissueddbnameinvoiceiddelete) | **DELETE** /invoices/issued/{dbName}/{invoiceId} | Smazání faktury vydané
*FakturyVydanApi* | [**invoicesIssuedDbNameInvoiceIdGet**](docs/Api/FakturyVydanApi.md#invoicesissueddbnameinvoiceidget) | **GET** /invoices/issued/{dbName}/{invoiceId} | Faktura vydaná dle ID
*FakturyVydanApi* | [**invoicesIssuedDbNameInvoiceIdItemsGet**](docs/Api/FakturyVydanApi.md#invoicesissueddbnameinvoiceiditemsget) | **GET** /invoices/issued/{dbName}/{invoiceId}/items | Seznam položek faktury vydané
*FakturyVydanApi* | [**invoicesIssuedDbNamePost**](docs/Api/FakturyVydanApi.md#invoicesissueddbnamepost) | **POST** /invoices/issued/{dbName} | Vytvoření nové faktury vydané

## Models

- [ErrorResult](docs/Model/ErrorResult.md)
- [IssuedInvoiceBodyPOST](docs/Model/IssuedInvoiceBodyPOST.md)
- [IssuedInvoiceBodyPOSTCustomer](docs/Model/IssuedInvoiceBodyPOSTCustomer.md)
- [IssuedInvoiceItemsResult](docs/Model/IssuedInvoiceItemsResult.md)
- [IssuedInvoicePOSTResult](docs/Model/IssuedInvoicePOSTResult.md)
- [IssuedInvoicePOSTResultCustomer](docs/Model/IssuedInvoicePOSTResultCustomer.md)
- [IssuedInvoiceResult](docs/Model/IssuedInvoiceResult.md)
- [IssuedInvoicesResult](docs/Model/IssuedInvoicesResult.md)
- [IssuedInvoicesResultInvoicesInner](docs/Model/IssuedInvoicesResultInvoicesInner.md)
- [IssuedInvoicesResultInvoicesInnerCustomer](docs/Model/IssuedInvoicesResultInvoicesInnerCustomer.md)
- [ReceivedInvoiceBodyPOST](docs/Model/ReceivedInvoiceBodyPOST.md)
- [ReceivedInvoiceBodyPOSTItemsInner](docs/Model/ReceivedInvoiceBodyPOSTItemsInner.md)
- [ReceivedInvoiceBodyPOSTPaymentsInner](docs/Model/ReceivedInvoiceBodyPOSTPaymentsInner.md)
- [ReceivedInvoiceBodyPOSTSupplier](docs/Model/ReceivedInvoiceBodyPOSTSupplier.md)
- [ReceivedInvoiceBodyPOSTVatRecapitulationInner](docs/Model/ReceivedInvoiceBodyPOSTVatRecapitulationInner.md)
- [ReceivedInvoiceItemsResult](docs/Model/ReceivedInvoiceItemsResult.md)
- [ReceivedInvoicePOSTResult](docs/Model/ReceivedInvoicePOSTResult.md)
- [ReceivedInvoicePOSTResultItemsInner](docs/Model/ReceivedInvoicePOSTResultItemsInner.md)
- [ReceivedInvoicePOSTResultPaymentsInner](docs/Model/ReceivedInvoicePOSTResultPaymentsInner.md)
- [ReceivedInvoicePOSTResultSupplier](docs/Model/ReceivedInvoicePOSTResultSupplier.md)
- [ReceivedInvoiceResult](docs/Model/ReceivedInvoiceResult.md)
- [ReceivedInvoicesResult](docs/Model/ReceivedInvoicesResult.md)
- [ReceivedInvoicesResultInvoicesInner](docs/Model/ReceivedInvoicesResultInvoicesInner.md)
- [ReceivedInvoicesResultInvoicesInnerItemsInner](docs/Model/ReceivedInvoicesResultInvoicesInnerItemsInner.md)
- [ReceivedInvoicesResultInvoicesInnerPaymentsInner](docs/Model/ReceivedInvoicesResultInvoicesInnerPaymentsInner.md)
- [ReceivedInvoicesResultInvoicesInnerSupplier](docs/Model/ReceivedInvoicesResultInvoicesInnerSupplier.md)
- [ReceivedInvoicesResultInvoicesInnerSupplierBankAccount](docs/Model/ReceivedInvoicesResultInvoicesInnerSupplierBankAccount.md)
- [ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner](docs/Model/ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner.md)

## Authorization

Authentication schemes defined for the API:
### authToken

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.2.33`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
