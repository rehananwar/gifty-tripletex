# Swagger\Client\EmployeestandardTimeApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeeStandardTimeGet**](EmployeestandardTimeApi.md#employeestandardtimeget) | **GET** /employee/standardTime/{id} | [BETA] Find standard time by ID.
[**employeeStandardTimePost**](EmployeestandardTimeApi.md#employeestandardtimepost) | **POST** /employee/standardTime | [BETA] Create standard time.
[**employeeStandardTimePut**](EmployeestandardTimeApi.md#employeestandardtimeput) | **PUT** /employee/standardTime/{id} | [BETA] Update standard time.
[**employeeStandardTimeSearch**](EmployeestandardTimeApi.md#employeestandardtimesearch) | **GET** /employee/standardTime | [BETA] Find all standard times for employee.

# **employeeStandardTimeGet**
> \Swagger\Client\Model\ResponseWrapperStandardTime employeeStandardTimeGet($id, $fields)

[BETA] Find standard time by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeestandardTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->employeeStandardTimeGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeestandardTimeApi->employeeStandardTimeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperStandardTime**](../Model/ResponseWrapperStandardTime.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeStandardTimePost**
> \Swagger\Client\Model\ResponseWrapperStandardTime employeeStandardTimePost($body)

[BETA] Create standard time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeestandardTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\StandardTime(); // \Swagger\Client\Model\StandardTime | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->employeeStandardTimePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeestandardTimeApi->employeeStandardTimePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\StandardTime**](../Model/StandardTime.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperStandardTime**](../Model/ResponseWrapperStandardTime.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeStandardTimePut**
> \Swagger\Client\Model\ResponseWrapperStandardTime employeeStandardTimePut($id, $body)

[BETA] Update standard time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeestandardTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Swagger\Client\Model\StandardTime(); // \Swagger\Client\Model\StandardTime | Partial object describing what should be updated

try {
    $result = $apiInstance->employeeStandardTimePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeestandardTimeApi->employeeStandardTimePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **body** | [**\Swagger\Client\Model\StandardTime**](../Model/StandardTime.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperStandardTime**](../Model/ResponseWrapperStandardTime.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeStandardTimeSearch**
> \Swagger\Client\Model\ListResponseStandardTime employeeStandardTimeSearch($employee_id, $from, $count, $sorting, $fields)

[BETA] Find all standard times for employee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeestandardTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 56; // int | Employee ID. Defaults to ID of token owner.
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->employeeStandardTimeSearch($employee_id, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeestandardTimeApi->employeeStandardTimeSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **int**| Employee ID. Defaults to ID of token owner. | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseStandardTime**](../Model/ListResponseStandardTime.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

