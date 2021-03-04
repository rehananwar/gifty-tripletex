# Swagger\Client\SalarysettingspensionSchemeApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salarySettingsPensionSchemeDelete**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemedelete) | **DELETE** /salary/settings/pensionScheme/{id} | [BETA] Delete a Pension Scheme
[**salarySettingsPensionSchemeGet**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemeget) | **GET** /salary/settings/pensionScheme/{id} | [BETA] Get Pension Scheme for a specific ID
[**salarySettingsPensionSchemeListDeleteByIds**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemelistdeletebyids) | **DELETE** /salary/settings/pensionScheme/list | [BETA] delete multiple Pension Schemes.
[**salarySettingsPensionSchemeListPostList**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemelistpostlist) | **POST** /salary/settings/pensionScheme/list | [BETA] Create multiple Pension Schemes.
[**salarySettingsPensionSchemeListPutList**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemelistputlist) | **PUT** /salary/settings/pensionScheme/list | [BETA] update multiple Pension Schemes.
[**salarySettingsPensionSchemePost**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemepost) | **POST** /salary/settings/pensionScheme | [BETA] Create a Pension Scheme.
[**salarySettingsPensionSchemePut**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemeput) | **PUT** /salary/settings/pensionScheme/{id} | [BETA] Update a Pension Scheme
[**salarySettingsPensionSchemeSearch**](SalarysettingspensionSchemeApi.md#salarysettingspensionschemesearch) | **GET** /salary/settings/pensionScheme | [BETA] Find pension schemes.

# **salarySettingsPensionSchemeDelete**
> salarySettingsPensionSchemeDelete($id)

[BETA] Delete a Pension Scheme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID

try {
    $apiInstance->salarySettingsPensionSchemeDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeDelete: ', $e->getMessage(), PHP_EOL;
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

# **salarySettingsPensionSchemeGet**
> \Swagger\Client\Model\ResponseWrapperPensionScheme salarySettingsPensionSchemeGet($id, $fields)

[BETA] Get Pension Scheme for a specific ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->salarySettingsPensionSchemeGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPensionScheme**](../Model/ResponseWrapperPensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemeListDeleteByIds**
> salarySettingsPensionSchemeListDeleteByIds($ids)

[BETA] delete multiple Pension Schemes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | ID of the elements

try {
    $apiInstance->salarySettingsPensionSchemeListDeleteByIds($ids);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeListDeleteByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| ID of the elements |

### Return type

void (empty response body)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemeListPostList**
> \Swagger\Client\Model\ListResponsePensionScheme salarySettingsPensionSchemeListPostList($body)

[BETA] Create multiple Pension Schemes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PensionScheme()); // \Swagger\Client\Model\PensionScheme[] | JSON representing a list of new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->salarySettingsPensionSchemeListPostList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeListPostList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PensionScheme[]**](../Model/PensionScheme.md)| JSON representing a list of new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ListResponsePensionScheme**](../Model/ListResponsePensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemeListPutList**
> \Swagger\Client\Model\ListResponsePensionScheme salarySettingsPensionSchemeListPutList($body)

[BETA] update multiple Pension Schemes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\PensionScheme()); // \Swagger\Client\Model\PensionScheme[] | JSON representing updates to object. Should have ID and version set.

try {
    $result = $apiInstance->salarySettingsPensionSchemeListPutList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeListPutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PensionScheme[]**](../Model/PensionScheme.md)| JSON representing updates to object. Should have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ListResponsePensionScheme**](../Model/ListResponsePensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemePost**
> \Swagger\Client\Model\ResponseWrapperPensionScheme salarySettingsPensionSchemePost($body)

[BETA] Create a Pension Scheme.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PensionScheme(); // \Swagger\Client\Model\PensionScheme | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->salarySettingsPensionSchemePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PensionScheme**](../Model/PensionScheme.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPensionScheme**](../Model/ResponseWrapperPensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemePut**
> \Swagger\Client\Model\ResponseWrapperPensionScheme salarySettingsPensionSchemePut($id, $body)

[BETA] Update a Pension Scheme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$body = new \Swagger\Client\Model\PensionScheme(); // \Swagger\Client\Model\PensionScheme | JSON representing the new object to be created. Should not have ID and version set.

try {
    $result = $apiInstance->salarySettingsPensionSchemePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **body** | [**\Swagger\Client\Model\PensionScheme**](../Model/PensionScheme.md)| JSON representing the new object to be created. Should not have ID and version set. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperPensionScheme**](../Model/ResponseWrapperPensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salarySettingsPensionSchemeSearch**
> \Swagger\Client\Model\ListResponsePensionScheme salarySettingsPensionSchemeSearch($number, $from, $count, $sorting, $fields)

[BETA] Find pension schemes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SalarysettingspensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | Equals
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->salarySettingsPensionSchemeSearch($number, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalarysettingspensionSchemeApi->salarySettingsPensionSchemeSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| Equals | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponsePensionScheme**](../Model/ListResponsePensionScheme.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

