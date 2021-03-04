# Swagger\Client\TravelExpensepassengerApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**travelExpensePassengerDelete**](TravelExpensepassengerApi.md#travelexpensepassengerdelete) | **DELETE** /travelExpense/passenger/{id} | [BETA] Delete passenger.
[**travelExpensePassengerGet**](TravelExpensepassengerApi.md#travelexpensepassengerget) | **GET** /travelExpense/passenger/{id} | [BETA] Get passenger by ID.
[**travelExpensePassengerPost**](TravelExpensepassengerApi.md#travelexpensepassengerpost) | **POST** /travelExpense/passenger | [BETA] Create passenger.
[**travelExpensePassengerPut**](TravelExpensepassengerApi.md#travelexpensepassengerput) | **PUT** /travelExpense/passenger/{id} | [BETA] Update passenger.
[**travelExpensePassengerSearch**](TravelExpensepassengerApi.md#travelexpensepassengersearch) | **GET** /travelExpense/passenger | [BETA] Find passengers corresponding with sent data.

# **travelExpensePassengerDelete**
> travelExpensePassengerDelete($id)

[BETA] Delete passenger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensepassengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID

try {
    $apiInstance->travelExpensePassengerDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensepassengerApi->travelExpensePassengerDelete: ', $e->getMessage(), PHP_EOL;
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

# **travelExpensePassengerGet**
> \Swagger\Client\Model\ResponseWrapperPassenger travelExpensePassengerGet($id, $fields)

[BETA] Get passenger by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensepassengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpensePassengerGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensepassengerApi->travelExpensePassengerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPassenger**](../Model/ResponseWrapperPassenger.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **travelExpensePassengerPost**
> \Swagger\Client\Model\ResponseWrapperPassenger travelExpensePassengerPost($body)

[BETA] Create passenger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensepassengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Passenger(); // \Swagger\Client\Model\Passenger | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->travelExpensePassengerPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensepassengerApi->travelExpensePassengerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Passenger**](../Model/Passenger.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPassenger**](../Model/ResponseWrapperPassenger.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **travelExpensePassengerPut**
> \Swagger\Client\Model\ResponseWrapperPassenger travelExpensePassengerPut($id, $body)

[BETA] Update passenger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensepassengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Swagger\Client\Model\Passenger(); // \Swagger\Client\Model\Passenger | Partial object describing what should be updated

try {
    $result = $apiInstance->travelExpensePassengerPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensepassengerApi->travelExpensePassengerPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **body** | [**\Swagger\Client\Model\Passenger**](../Model/Passenger.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPassenger**](../Model/ResponseWrapperPassenger.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **travelExpensePassengerSearch**
> \Swagger\Client\Model\ListResponsePassenger travelExpensePassengerSearch($mileage_allowance, $name, $from, $count, $sorting, $fields)

[BETA] Find passengers corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TravelExpensepassengerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mileage_allowance = "mileage_allowance_example"; // string | Equals
$name = "name_example"; // string | Containing
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->travelExpensePassengerSearch($mileage_allowance, $name, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TravelExpensepassengerApi->travelExpensePassengerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mileage_allowance** | **string**| Equals | [optional]
 **name** | **string**| Containing | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponsePassenger**](../Model/ListResponsePassenger.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

