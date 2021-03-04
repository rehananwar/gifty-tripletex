# Swagger\Client\InventoryinventoriesApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoriesSearch**](InventoryinventoriesApi.md#inventoryinventoriessearch) | **GET** /inventory/inventories | [BETA] Find inventories corresponding with sent data.

# **inventoryInventoriesSearch**
> \Swagger\Client\Model\ListResponseInventories inventoryInventoriesSearch($date_from, $date_to, $product_id, $from, $count, $sorting, $fields)

[BETA] Find inventories corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InventoryinventoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Format is yyyy-MM-dd (from and incl.).
$date_to = "date_to_example"; // string | Format is yyyy-MM-dd (to and incl.).
$product_id = 56; // int | Element ID
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->inventoryInventoriesSearch($date_from, $date_to, $product_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryinventoriesApi->inventoryInventoriesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Format is yyyy-MM-dd (from and incl.). |
 **date_to** | **string**| Format is yyyy-MM-dd (to and incl.). |
 **product_id** | **int**| Element ID | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseInventories**](../Model/ListResponseInventories.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

