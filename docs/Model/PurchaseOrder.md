# PurchaseOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**version** | **int** |  | [optional] 
**changes** | [**\Swagger\Client\Model\Change[]**](Change.md) |  | [optional] 
**url** | **string** |  | [optional] 
**number** | **string** | Purchase order number | [optional] 
**receiver_email** | **string** | Email when purchase order is send by email. | [optional] 
**discount** | **float** | Discount Percentage | [optional] 
**packing_note_message** | **string** | Message on packing note.Wholesaler specific. | [optional] 
**transporter_message** | **string** | Message to transporter.Wholesaler specific. | [optional] 
**comments** | **string** | Delivery information and invoice comments | [optional] 
**supplier** | [**\Swagger\Client\Model\Supplier**](Supplier.md) |  | 
**delivery_date** | **string** |  | 
**order_lines** | [**\Swagger\Client\Model\PurchaseOrderline[]**](PurchaseOrderline.md) | Order lines tied to the purchase order | [optional] 
**project** | [**\Swagger\Client\Model\Project**](Project.md) |  | [optional] 
**department** | [**\Swagger\Client\Model\Department**](Department.md) |  | [optional] 
**delivery_address** | [**\Swagger\Client\Model\Address**](Address.md) |  | [optional] 
**creation_date** | **string** |  | [optional] 
**is_closed** | **bool** |  | [optional] 
**our_contact** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | 
**supplier_contact** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | [optional] 
**attention** | [**\Swagger\Client\Model\Employee**](Employee.md) |  | [optional] 
**status** | **string** |  | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**restorder** | [**\Swagger\Client\Model\PurchaseOrder**](PurchaseOrder.md) |  | [optional] 
**transport_type** | [**\Swagger\Client\Model\TransportType**](TransportType.md) |  | [optional] 
**pickup_point** | [**\Swagger\Client\Model\PickupPoint**](PickupPoint.md) |  | [optional] 
**document** | [**\Swagger\Client\Model\Document**](Document.md) |  | [optional] 
**attachment** | [**\Swagger\Client\Model\Document**](Document.md) |  | [optional] 
**edi_document** | [**\Swagger\Client\Model\Document**](Document.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

