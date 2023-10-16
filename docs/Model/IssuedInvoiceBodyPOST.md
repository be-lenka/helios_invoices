# # IssuedInvoiceBodyPOST

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\BeLenka\Helios\Invoices\Model\IssuedInvoiceBodyPOSTCustomer**](IssuedInvoiceBodyPOSTCustomer.md) |  | [optional]
**bank_account** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResultInvoicesInnerSupplierBankAccount**](ReceivedInvoicesResultInvoicesInnerSupplierBankAccount.md) |  | [optional]
**document_type** | **string** | Řada dokladu [TabDruhDokZbo.RadaDokladu] |
**issue_date** | **\DateTime** | Datum vystavení [TabDokladyZbozi.DatPovinnostiFa] | [optional]
**transaction_date** | **\DateTime** | Datum případu [TabDokladyZbozi.DatPorizeni] |
**vat_date** | **\DateTime** | DUZP [TabDokladyZbozi.DUZP] | [optional]
**vat_applicable** | **string** |  | [optional]
**due_date** | **\DateTime** | Splatno [TabDokladyZbozi.Splatnost] | [optional]
**tin** | **string** | DIČ vlastní organizace [TabDokladyZbozi.SamoVyDICDPH] | [optional]
**currency_code** | **string** | Měna dokladu [TabDokladyZbozi.Mena] | [optional]
**exchange_rate** | **float** | Kurz [TabDokladyZbozi.Kurz] | [optional]
**exchange_unit** | **int** | Množství kurz [TabDokladyZbozi.JednotkaMeny] | [optional]
**invoice_no** | **string** | Evidenční číslo daňového dokladu [TabDokladyZbozi.DodFakKV] | [optional]
**variable_symbol** | **string** | Variabilní symbol [TabDokladyZbozi.DodFak] | [optional]
**constant_symbol** | **string** | Konstantní symbol [TabDokladyZbozi.KonstSymbol] | [optional]
**specific_symbol** | **string** | Specifický symbol [TabDokladyZbozi.SpecifickySymbol] | [optional]
**delivery_description** | **string** | Popis dodávky [TabDokladyZbozi.PopisDodavky] | [optional]
**order_no** | **string** | Číslo objednávky [TabDokladyZbozi.NavaznaObjednavka] | [optional]
**note** | **string** | Poznámka [TabDokladyZbozi.Poznamka] | [optional]
**auto_lock** | **bool** | Doklad se automaticky zamkne [akce realizace faktury] | [optional]
**items** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTItemsInner[]**](ReceivedInvoiceBodyPOSTItemsInner.md) | Položky faktury | [optional]
**vat_recapitulation** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTVatRecapitulationInner[]**](ReceivedInvoiceBodyPOSTVatRecapitulationInner.md) | Rekapitulace DPH | [optional]
**payments** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTPaymentsInner[]**](ReceivedInvoiceBodyPOSTPaymentsInner.md) | Úhrady | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
