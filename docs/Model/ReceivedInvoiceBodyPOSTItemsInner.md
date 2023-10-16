# # ReceivedInvoiceBodyPOSTItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transfer_id** | **string** | Transaction transfer Id [Identifikace zaslaná externím systémem - je propsána na výstup, nikde se neukládá.] | [optional]
**warehouse_id** | **string** | Číslo skladu, pokud se nejedná o freeItem [TabStrom.Cislo] | [optional]
**description** | **string** | Popis položky [ean: TabBarCodeZbo.BarCode/catalogueId: TabKmenZbozi.CisloZbozi/freeItem: TabOZTxtPol.Popis] |
**description_type** | **string** |  |
**quantity** | **float** | Množství [TabPohybyZbozi.Mnozstvi/TabOZTxtPol.Mnozstvi] |
**measure_unit** | **string** | Měrná jednotka [TabPohybyZbozi.MJ/TabOZTxtPol.MJ] | [optional]
**currency_amount** | **float** | Celková cena bez DPH v měně dokladu [TabPohybyZbozi.CCbezDaniVal/TabOZTxtPol.CCbezDaniVal] |
**vat_rate** | **float** | SazbaDPH [samovyměření ANO: TabPohybyZbozi.SazbaDPHproPDP/TabOZTxtPol.SazbaDPHproPDP, samovyměření NE: TabPohybyZbozi.SazbaDPH/TabOZTxtPol.SazbaDPH] | [optional]
**is_reverse_charge** | **bool** | Samovyměření Ano/Ne | [optional]
**reverse_charge_code** | **string** | Kód PDP [TabCisKoduPDP.KodZbozi (vazba TabPohybyZbozi.IDKodPDP/TabOZTxtPol.IDKodPDP)] | [optional]
**note** | **string** | Poznámka k položce [TabPohybyZbozi.Poznamka/TabOZTxtPol.Poznamka] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
