# # ReceivedInvoicesResultInvoicesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **int** | Systémové číslo dokladu [TabDokladyZbozi.ID] | [optional]
**total_currency_rounding** | **float** | Zaokrouhlení v měně dokladu [TabDokladyZbozi.ZadanaCastkaZaoVal] | [optional]
**supplier** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResultInvoicesInnerSupplier**](ReceivedInvoicesResultInvoicesInnerSupplier.md) |  | [optional]
**document_no** | **string** | Číslo dokladu [TabDokladyZbozi.ParovaciZnak] | [optional]
**issue_date** | **\DateTime** | Datum vystavení [TabDokladyZbozi.DatPovinnostiFa] | [optional]
**transaction_date** | **\DateTime** | Datum případu [TabDokladyZbozi.DatPorizeni] | [optional]
**vat_date** | **\DateTime** | DUZP [TabDokladyZbozi.DUZP] | [optional]
**vat_applicable** | **string** |  | [optional]
**due_date** | **\DateTime** | Datum splatnosti [TabDokladyZbozi.Splatnost] | [optional]
**tin** | **string** | DIČ [TabDokladyZbozi.SamoVyDICDPH] | [optional]
**payment_method** | **string** | Forma úhrady [TabDokladyZbozi.FormaUhrady] | [optional]
**currency_code** | **string** | Měna dokladu [TabDokladyZbozi.Mena] | [optional]
**exchange_rate** | **float** | Kurz [TabDokladyZbozi.Kurz] | [optional]
**exchange_unit** | **int** | Množství kurz [TabDokladyZbozi.JednotkaMeny] | [optional]
**currency_amount** | **float** | Celková cena bez DPH v měně dokladu [TabDokladyZbozi.SumaValBezDPH] | [optional]
**currency_amount_tax_inclusive** | **float** | Celková cena včetně DPH v měně dokladu [TabDokladyZbozi.SumaValPoZao] | [optional]
**invoice_no** | **string** | Evidenční číslo daňového dokladu [TabDokladyZbozi.DodFakKV] | [optional]
**variable_symbol** | **string** | Variabilní symbol [TabDokladyZbozi.DodFak] | [optional]
**constant_symbol** | **string** | Konstantní symbol [TabDokladyZbozi.KonstSymbol] | [optional]
**specific_symbol** | **string** | Specifický symbol [TabDokladyZbozi.SpecifickySymbol] | [optional]
**delivery_description** | **string** | Popis dodávky [TabDokladyZbozi.PopisDodavky] | [optional]
**order_no** | **string** | Číslo objednávky [TabDokladyZbozi.NavaznaObjednavka] | [optional]
**note** | **string** | Poznámka [TabDokladyZbozi.Poznamka] | [optional]
**created_on** | **\DateTime** | Datum a čas vytvoření dokladu [TabDokladyZbozi.DatPorizeniSkut] | [optional]
**modified_on** | **\DateTime** | Datum a čas změny dokladu [TabDokladyZbozi.DatZmeny] | [optional]
**items** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResultInvoicesInnerItemsInner[]**](ReceivedInvoicesResultInvoicesInnerItemsInner.md) | Položky dokladu | [optional]
**vat_recapitulation** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner[]**](ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner.md) | Rekapitulace DPH | [optional]
**payments** | [**\BeLenka\Helios\Invoices\Model\ReceivedInvoicesResultInvoicesInnerPaymentsInner[]**](ReceivedInvoicesResultInvoicesInnerPaymentsInner.md) | Úhrady | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
