# Swagger\Client\PurchaseOrderApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderAttachmentUploadAttachment**](PurchaseOrderApi.md#purchaseorderattachmentuploadattachment) | **POST** /purchaseOrder/{id}/attachment | [BETA] Upload attachment to Purchase Order.
[**purchaseOrderDelete**](PurchaseOrderApi.md#purchaseorderdelete) | **DELETE** /purchaseOrder/{id} | [BETA] Delete purchase order.
[**purchaseOrderGet**](PurchaseOrderApi.md#purchaseorderget) | **GET** /purchaseOrder/{id} | [BETA] Find purchase order by ID.
[**purchaseOrderPost**](PurchaseOrderApi.md#purchaseorderpost) | **POST** /purchaseOrder | [BETA] Creates a new purchase order
[**purchaseOrderPut**](PurchaseOrderApi.md#purchaseorderput) | **PUT** /purchaseOrder/{id} | [BETA] Update purchase order.
[**purchaseOrderSearch**](PurchaseOrderApi.md#purchaseordersearch) | **GET** /purchaseOrder | [BETA] Find purchase orders with send data
[**purchaseOrderSendByEmailSendByEmail**](PurchaseOrderApi.md#purchaseordersendbyemailsendbyemail) | **PUT** /purchaseOrder/{id}/:sendByEmail | [BETA] Send purchase order by customisable email.
[**purchaseOrderSendSend**](PurchaseOrderApi.md#purchaseordersendsend) | **PUT** /purchaseOrder/{id}/:send | [BETA] Send purchase order by id and sendType.

# **purchaseOrderAttachmentUploadAttachment**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderAttachmentUploadAttachment($file, $id)

[BETA] Upload attachment to Purchase Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$id = 56; // int | Purchase Order ID to upload attachment to.

try {
    $result = $apiInstance->purchaseOrderAttachmentUploadAttachment($file, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderAttachmentUploadAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  |
 **id** | **int**| Purchase Order ID to upload attachment to. |

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderDelete**
> purchaseOrderDelete($id)

[BETA] Delete purchase order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID

try {
    $apiInstance->purchaseOrderDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |

### Return type

void (empty response body)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderGet**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderGet($id, $fields)

[BETA] Find purchase order by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->purchaseOrderGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderPost**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderPost($body)

[BETA] Creates a new purchase order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PurchaseOrder(); // \Swagger\Client\Model\PurchaseOrder | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->purchaseOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderPut**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderPut($id, $body)

[BETA] Update purchase order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Swagger\Client\Model\PurchaseOrder(); // \Swagger\Client\Model\PurchaseOrder | Partial object describing what should be updated

try {
    $result = $apiInstance->purchaseOrderPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **body** | [**\Swagger\Client\Model\PurchaseOrder**](../Model/PurchaseOrder.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderSearch**
> \Swagger\Client\Model\ListResponsePurchaseOrder purchaseOrderSearch($number, $delivery_date_from, $delivery_date_to, $creation_date_from, $creation_date_to, $id, $supplier_id, $project_id, $is_closed, $with_deviation_only, $from, $count, $sorting, $fields)

[BETA] Find purchase orders with send data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | Equals
$delivery_date_from = "delivery_date_from_example"; // string | Format is yyyy-MM-dd (from and incl.).
$delivery_date_to = "delivery_date_to_example"; // string | Format is yyyy-MM-dd (to and incl.).
$creation_date_from = "creation_date_from_example"; // string | Format is yyyy-MM-dd (from and incl.).
$creation_date_to = "creation_date_to_example"; // string | Format is yyyy-MM-dd (to and incl.).
$id = "id_example"; // string | List of IDs
$supplier_id = "supplier_id_example"; // string | List of IDs
$project_id = "project_id_example"; // string | List of IDs
$is_closed = true; // bool | Equals
$with_deviation_only = false; // bool | Equals
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->purchaseOrderSearch($number, $delivery_date_from, $delivery_date_to, $creation_date_from, $creation_date_to, $id, $supplier_id, $project_id, $is_closed, $with_deviation_only, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Equals | [optional]
 **delivery_date_from** | **string**| Format is yyyy-MM-dd (from and incl.). | [optional]
 **delivery_date_to** | **string**| Format is yyyy-MM-dd (to and incl.). | [optional]
 **creation_date_from** | **string**| Format is yyyy-MM-dd (from and incl.). | [optional]
 **creation_date_to** | **string**| Format is yyyy-MM-dd (to and incl.). | [optional]
 **id** | **string**| List of IDs | [optional]
 **supplier_id** | **string**| List of IDs | [optional]
 **project_id** | **string**| List of IDs | [optional]
 **is_closed** | **bool**| Equals | [optional]
 **with_deviation_only** | **bool**| Equals | [optional] [default to false]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponsePurchaseOrder**](../Model/ListResponsePurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderSendByEmailSendByEmail**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderSendByEmailSendByEmail($id, $email_address, $subject, $message)

[BETA] Send purchase order by customisable email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$email_address = "email_address_example"; // string | Email address
$subject = "subject_example"; // string | Subject
$message = "message_example"; // string | Message

try {
    $result = $apiInstance->purchaseOrderSendByEmailSendByEmail($id, $email_address, $subject, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderSendByEmailSendByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **email_address** | **string**| Email address |
 **subject** | **string**| Subject |
 **message** | **string**| Message | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderSendSend**
> \Swagger\Client\Model\ResponseWrapperPurchaseOrder purchaseOrderSendSend($id, $send_type)

[BETA] Send purchase order by id and sendType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$send_type = "DEFAULT"; // string | Send type.DEFAULT will determine the send parameter based on the supplier type.

try {
    $result = $apiInstance->purchaseOrderSendSend($id, $send_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderSendSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **send_type** | **string**| Send type.DEFAULT will determine the send parameter based on the supplier type. | [optional] [default to DEFAULT]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPurchaseOrder**](../Model/ResponseWrapperPurchaseOrder.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

