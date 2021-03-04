# ReportGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** | The name to be shown for the column or row. | [optional] 
**description** | **string** | Currently not in use | [optional] 
**auto_group_type** | **string** | Subgroups that should be automatically generated | 
**expression** | **string** | Expression / formula according to Rule Engine Expression Language | [optional] 
**variable_name** | **string** | Variable name that can be used to reference this group | [optional] 
**precedence** | **int** | Used to select expression if both column and row expression is set. The bigger value wins. | [optional] 
**value_format** | **string** | Format string for value (how to print number, date etc) | [optional] 
**cell_format** | **string** | Format string for cell (indentation, font size etc) | [optional] 
**hide_self** | **bool** | Hide this group? | [optional] 
**filter** | [**\Swagger\Client\Model\ReportGroupFilter**](ReportGroupFilter.md) |  | [optional] 
**children** | [**\Swagger\Client\Model\ReportGroup[]**](ReportGroup.md) | Child groups | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

