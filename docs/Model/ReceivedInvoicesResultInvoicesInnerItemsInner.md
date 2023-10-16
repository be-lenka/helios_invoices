# # ReceivedInvoicesResultInvoicesInnerItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | Jednoznačná identifikace položky [&#39;P&#39; + TabPohybyZbozi.ID/ &#39;T&#39; + TabOzTxtPol.ID] | [optional]
**item_type** | **string** |  | [optional]
**warehouse_id** | **string** | Číslo skladu [TabStrom.Cislo/null] | [optional]
**warehouse_item_id** | **int** | ID skladové karty [TabPohybyZbozi.IDZboSklad/null] | [optional]
**catalogue_no** | **string** | Skupina + Registrační číslo [TabPohybyZbozi.CisloKarty/null] | [optional]
**description** | **string** | Popis položky [TabPohybyZbozi.Nazev1/TabOZTxtPol.Popis] | [optional]
**quantity** | **float** | Množství [TabPohybyZbozi.Mnozstvi/TabOZTxtPol.Mnozstvi] | [optional]
**measure_unit** | **string** | Měrná jednotka [TabPohybyZbozi.MJ/TabOZTxtPol.MJ] | [optional]
**unit_currency_amount** | **float** | Jednotková cena bez DPH v měně dokladu [TabPohybyZbozi.JCbezDaniValPoS/TabOZTxtPol.JCbezDaniValPoS] | [optional]
**currency_amount** | **float** | Celková cena bez DPH v měně dokladu [TabPohybyZbozi.CCbezDaniValPoS/TabOZTxtPol.CCbezDaniValPoS] | [optional]
**vat_rate** | **float** | Sazba DPH [TabPohybyZbozi.SazbaDPH/TabOZTxtPol.SazbaDPH] | [optional]
**currency_amount_tax_inclusive** | **float** | Celková cena včetně DPH v měně dokladu [TabPohybyZbozi.CCSDPHValPoS/TabOZTxtPol.CCSDPHValPoS] | [optional]
**reverse_charge_percent** | **float** | Sazba DPH samovyměření [TabPohybyZbozi.SazbaDPHproPDP/TabOZTxtPol.SazbaDPHproPDP] | [optional]
**reverse_charge_code** | **string** | Kód PDP [TabCisKoduPDP.KodZbozi (vazba TabPohybyZbozi.IDKodPDP/TabOZTxtPol.IDKodPDP)] | [optional]
**note** | **string** | Poznámka k položce [TabPohybyZbozi.Poznamka/TabOZTxtPol.Poznamka] | [optional]
**created_on** | **\DateTime** | Datum a čas vytvoření položky [TabPohybyZbozi.DatPorizeni/TabOZTxtPol.DatPorizeni] | [optional]
**modified_on** | **\DateTime** | Datum a čas změny položky [TabPohybyZbozi.DatZmeny/TabOZTxtPol.DatZmeny] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
