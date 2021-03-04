# Project

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**name** | **string** |  | 
**number** | **string** |  | [optional] 
**display_name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**project_manager** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | 
**department** | [**\Swagger\Client\Model\Department**](Department.md) |  | [optional] 
**main_project** | [**\Swagger\Client\Model\Project**](Project.md) |  | [optional] 
**start_date** | **string** |  | 
**end_date** | **string** |  | [optional] 
**customer** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**is_closed** | **bool** |  | [optional] 
**is_ready_for_invoicing** | **bool** |  | [optional] 
**is_internal** | **bool** |  | 
**is_offer** | **bool** |  | [optional] 
**is_fixed_price** | **bool** | Project is fixed price if set to true, hourly rate if set to false. | [optional] 
**project_category** | [**\Swagger\Client\Model\ProjectCategory**](ProjectCategory.md) |  | [optional] 
**delivery_address** | [**\Swagger\Client\Model\DeliveryAddress**](DeliveryAddress.md) |  | [optional] 
**display_name_format** | **string** | Defines project name presentation in overviews. | [optional] 
**reference** | **string** |  | [optional] 
**external_accounts_number** | **string** |  | [optional] 
**discount_percentage** | **float** | Project discount percentage. | [optional] 
**vat_type** | [**\Swagger\Client\Model\VatType**](VatType.md) |  | [optional] 
**fixedprice** | **float** | Fixed price amount, in the project&#x27;s currency. | [optional] 
**contribution_margin_percent** | **float** |  | [optional] 
**number_of_sub_projects** | **int** |  | [optional] 
**number_of_project_participants** | **int** |  | [optional] 
**order_lines** | [**\Swagger\Client\Model\ProjectOrderLine[]**](ProjectOrderLine.md) | Order lines tied to the order | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**mark_up_order_lines** | **float** | Set mark-up (%) for order lines. | [optional] 
**mark_up_fees_earned** | **float** | Set mark-up (%) for fees earned. | [optional] 
**is_price_ceiling** | **bool** | Set to true if an hourly rate project has a price ceiling. | [optional] 
**price_ceiling_amount** | **float** | Price ceiling amount, in the project&#x27;s currency. | [optional] 
**project_hourly_rates** | [**\Swagger\Client\Model\ProjectHourlyRate[]**](ProjectHourlyRate.md) | Project Rate Types tied to the project. | [optional] 
**for_participants_only** | **bool** | Set to true if only project participants can register information on the project | [optional] 
**participants** | [**\Swagger\Client\Model\ProjectParticipant[]**](ProjectParticipant.md) | Link to individual project participants. | [optional] 
**contact** | [**\Swagger\Client\Model\Contact**](Contact.md) |  | [optional] 
**attention** | [**\Swagger\Client\Model\Contact**](Contact.md) |  | [optional] 
**invoice_comment** | **string** | Comment for project invoices | [optional] 
**invoicing_plan** | [**\Swagger\Client\Model\Invoice[]**](Invoice.md) | Invoicing plans tied to the project | [optional] 
**preliminary_invoice** | [**\Swagger\Client\Model\Invoice**](Invoice.md) |  | [optional] 
**general_project_activities_per_project_only** | **bool** | Set to true if a general project activity must be linked to project to allow time tracking. | [optional] 
**project_activities** | [**\Swagger\Client\Model\ProjectActivity[]**](ProjectActivity.md) | Project Activities | [optional] 
**hierarchy_name_and_number** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

