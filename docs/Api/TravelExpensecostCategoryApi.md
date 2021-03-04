# Swagger\Client\TravelExpensecostCategoryApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**travelExpenseCostCategoryGet**](TravelExpensecostCategoryApi.md#travelexpensecostcategoryget) | **GET** /travelExpense/costCategory/{id} | [BETA] Get cost category by ID.
[**travelExpenseCostCategorySearch**](TravelExpensecostCategoryApi.md#travelexpensecostcategorysearch) | **GET** /travelExpense/costCategory | [BETA] Find cost category corresponding with sent data.

# **travelExpenseCostCategoryGet**
> \Swagger\Client\Model\ResponseWrapperTravelCostCategory travelExpenseCostCategoryGet($id, $fields)

[BETA] Get cost category by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensecostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpenseCostCategoryGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensecostCategoryApi->travelExpenseCostCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperTravelCostCategory**](../Model/ResponseWrapperTravelCostCategory.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **travelExpenseCostCategorySearch**
> \Swagger\Client\Model\ListResponseTravelCostCategory travelExpenseCostCategorySearch($id, $description, $is_inactive, $show_on_employee_expenses, $from, $count, $sorting, $fields)

[BETA] Find cost category corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensecostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$description = "description_example"; // string | Containing
$is_inactive = true; // bool | Equals
$show_on_employee_expenses = true; // bool | Equals
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpenseCostCategorySearch($id, $description, $is_inactive, $show_on_employee_expenses, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensecostCategoryApi->travelExpenseCostCategorySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| List of IDs | [optional]
 **description** | **string**| Containing | [optional]
 **is_inactive** | **bool**| Equals | [optional]
 **show_on_employee_expenses** | **bool**| Equals | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseTravelCostCategory**](../Model/ListResponseTravelCostCategory.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

