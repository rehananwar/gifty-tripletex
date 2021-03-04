# PaymentTypeOut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**description** | **string** |  | 
**is_brutto_wage_deduction** | **bool** | true if it should be a deduction from the wage. The module PROVISIONSALARY is required to both view and change this setting | [optional] 
**credit_account** | [**\Swagger\Client\Model\Account**](Account.md) |  | 
**show_incoming_invoice** | **bool** | true if the payment type should be available in supplier invoices | [optional] 
**show_wage_payment** | **bool** | true if the payment type should be available in wage payments. The wage module is required to both view and change this setting | [optional] 
**show_vat_returns** | **bool** | true if the payment type should be available in vat returns | [optional] 
**show_wage_period_transaction** | **bool** | true if the payment type should be available in period transactionsThe wage module is required to both view and change this setting | [optional] 
**requires_separate_voucher** | **bool** | true if a separate voucher is required | [optional] 
**sequence** | **int** | determines in which order the types should be listed. No 1 is listed first | [optional] 
**is_inactive** | **bool** | true if the payment type should be hidden from available payment types | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

