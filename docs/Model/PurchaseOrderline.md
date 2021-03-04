# PurchaseOrderline

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**purchase_order** | [**\Swagger\Client\Model\PurchaseOrder**](PurchaseOrder.md) |  | 
**product** | [**\Swagger\Client\Model\Product**](Product.md) |  | [optional] 
**description** | **string** |  | [optional] 
**count** | **float** |  | [optional] 
**unit_cost_currency** | **float** | Unit price purchase (cost) excluding VAT in the order&#x27;s currency | [optional] 
**unit_price_excluding_vat_currency** | **float** | Unit price of purchase excluding VAT in the order&#x27;s currency.If it&#x27;s not specified,it takes the value from purchase price in productDTO | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**discount** | **float** | Discount given as a percentage (%) | [optional] 
**amount_excluding_vat_currency** | **float** | Total amount on order line excluding VAT in the order&#x27;s currency | [optional] 
**amount_including_vat_currency** | **float** | Total amount on order line including VAT in the order&#x27;s currency | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

