# BankReconciliationMatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**bank_reconciliation** | [**\Swagger\Client\Model\BankReconciliation**](BankReconciliation.md) |  | 
**type** | **string** | Type of match, MANUAL and APPROVED_SUGGESTION are considered part of reconciliation. | [optional] 
**transactions** | [**\Swagger\Client\Model\BankTransaction[]**](BankTransaction.md) | Match transactions | [optional] 
**postings** | [**\Swagger\Client\Model\Posting[]**](Posting.md) | Match postings | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

