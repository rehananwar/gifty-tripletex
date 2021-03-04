# Swagger\Client\TravelExpenserateApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**travelExpenseRateGet**](TravelExpenserateApi.md#travelexpenserateget) | **GET** /travelExpense/rate/{id} | [BETA] Get travel expense rate by ID.
[**travelExpenseRateSearch**](TravelExpenserateApi.md#travelexpenseratesearch) | **GET** /travelExpense/rate | [BETA] Find rates corresponding with sent data.

# **travelExpenseRateGet**
> \Swagger\Client\Model\ResponseWrapperTravelExpenseRate travelExpenseRateGet($id, $fields)

[BETA] Get travel expense rate by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpenserateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpenseRateGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpenserateApi->travelExpenseRateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperTravelExpenseRate**](../Model/ResponseWrapperTravelExpenseRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **travelExpenseRateSearch**
> \Swagger\Client\Model\ListResponseTravelExpenseRate travelExpenseRateSearch($rate_category_id, $type, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $is_valid_foreign_travel, $requires_zone, $requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields)

[BETA] Find rates corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpenserateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_category_id = "rate_category_id_example"; // string | Equals
$type = "type_example"; // string | Equals
$is_valid_day_trip = true; // bool | Equals
$is_valid_accommodation = true; // bool | Equals
$is_valid_domestic = true; // bool | Equals
$is_valid_foreign_travel = true; // bool | Equals
$requires_zone = true; // bool | Equals
$requires_overnight_accommodation = true; // bool | Equals
$date_from = "date_from_example"; // string | From and including
$date_to = "date_to_example"; // string | To and excluding
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpenseRateSearch($rate_category_id, $type, $is_valid_day_trip, $is_valid_accommodation, $is_valid_domestic, $is_valid_foreign_travel, $requires_zone, $requires_overnight_accommodation, $date_from, $date_to, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpenserateApi->travelExpenseRateSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_category_id** | **string**| Equals | [optional]
 **type** | **string**| Equals | [optional]
 **is_valid_day_trip** | **bool**| Equals | [optional]
 **is_valid_accommodation** | **bool**| Equals | [optional]
 **is_valid_domestic** | **bool**| Equals | [optional]
 **is_valid_foreign_travel** | **bool**| Equals | [optional]
 **requires_zone** | **bool**| Equals | [optional]
 **requires_overnight_accommodation** | **bool**| Equals | [optional]
 **date_from** | **string**| From and including | [optional]
 **date_to** | **string**| To and excluding | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseTravelExpenseRate**](../Model/ListResponseTravelExpenseRate.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

