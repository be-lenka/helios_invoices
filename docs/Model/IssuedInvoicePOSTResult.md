# # IssuedInvoicePOSTResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **int** | Systémové číslo faktury [TabDokladyZbozi.ID] | [optional]
**created_on** | **\DateTime** | Datum a čas vytvoření záznamu [TabDokladyZbozi.DatPorizeniSkut] | [optional]
**modified_on** | **\DateTime** | Datum a čas změny záznamu [TabDokladyZbozi.DatZmeny] | [optional]
**customer** | [**\BeLenka\Helios\Invoices\Model\IssuedInvoicePOSTResultCustomer**](IssuedInvoicePOSTResultCustomer.md) |  | [optional]
**items** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicePOSTResultItemsInner[]**](ReceivedInvoicePOSTResultItemsInner.md) | Položky faktury | [optional]
**payments** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicePOSTResultPaymentsInner[]**](ReceivedInvoicePOSTResultPaymentsInner.md) | Úhrady | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
