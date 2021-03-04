# Swagger\Client\EmployeeemploymentleaveOfAbsenceApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeeEmploymentLeaveOfAbsenceGet**](EmployeeemploymentleaveOfAbsenceApi.md#employeeemploymentleaveofabsenceget) | **GET** /employee/employment/leaveOfAbsence/{id} | [BETA] Find leave of absence by ID.
[**employeeEmploymentLeaveOfAbsenceListPostList**](EmployeeemploymentleaveOfAbsenceApi.md#employeeemploymentleaveofabsencelistpostlist) | **POST** /employee/employment/leaveOfAbsence/list | [BETA] Create multiple leave of absences.
[**employeeEmploymentLeaveOfAbsencePost**](EmployeeemploymentleaveOfAbsenceApi.md#employeeemploymentleaveofabsencepost) | **POST** /employee/employment/leaveOfAbsence | [BETA] Create leave of absence.
[**employeeEmploymentLeaveOfAbsencePut**](EmployeeemploymentleaveOfAbsenceApi.md#employeeemploymentleaveofabsenceput) | **PUT** /employee/employment/leaveOfAbsence/{id} | [BETA] Update leave of absence.

# **employeeEmploymentLeaveOfAbsenceGet**
> \Swagger\Client\Model\ResponseWrapperLeaveOfAbsence employeeEmploymentLeaveOfAbsenceGet($id, $fields)

[BETA] Find leave of absence by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->employeeEmploymentLeaveOfAbsenceGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->employeeEmploymentLeaveOfAbsenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeEmploymentLeaveOfAbsenceListPostList**
> \Swagger\Client\Model\ListResponseLeaveOfAbsence employeeEmploymentLeaveOfAbsenceListPostList($body)

[BETA] Create multiple leave of absences.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\LeaveOfAbsence()); // \Swagger\Client\Model\LeaveOfAbsence[] | JSON representing a list of new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->employeeEmploymentLeaveOfAbsenceListPostList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->employeeEmploymentLeaveOfAbsenceListPostList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LeaveOfAbsence[]**](../Model/LeaveOfAbsence.md)| JSON representing a list of new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseLeaveOfAbsence**](../Model/ListResponseLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeEmploymentLeaveOfAbsencePost**
> \Swagger\Client\Model\ResponseWrapperLeaveOfAbsence employeeEmploymentLeaveOfAbsencePost($body)

[BETA] Create leave of absence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LeaveOfAbsence(); // \Swagger\Client\Model\LeaveOfAbsence | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->employeeEmploymentLeaveOfAbsencePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->employeeEmploymentLeaveOfAbsencePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LeaveOfAbsence**](../Model/LeaveOfAbsence.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeeEmploymentLeaveOfAbsencePut**
> \Swagger\Client\Model\ResponseWrapperLeaveOfAbsence employeeEmploymentLeaveOfAbsencePut($id, $body)

[BETA] Update leave of absence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmployeeemploymentleaveOfAbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Swagger\Client\Model\LeaveOfAbsence(); // \Swagger\Client\Model\LeaveOfAbsence | Partial object describing what should be updated

try {
    $result = $apiInstance->employeeEmploymentLeaveOfAbsencePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeemploymentleaveOfAbsenceApi->employeeEmploymentLeaveOfAbsencePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **body** | [**\Swagger\Client\Model\LeaveOfAbsence**](../Model/LeaveOfAbsence.md)| Partial object describing what should be updated | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperLeaveOfAbsence**](../Model/ResponseWrapperLeaveOfAbsence.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

