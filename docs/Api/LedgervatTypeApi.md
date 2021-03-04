# Swagger\Client\LedgervatTypeApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ledgerVatTypeGet**](LedgervatTypeApi.md#ledgervattypeget) | **GET** /ledger/vatType/{id} | Get vat type by ID.
[**ledgerVatTypeSearch**](LedgervatTypeApi.md#ledgervattypesearch) | **GET** /ledger/vatType | Find vat types corresponding with sent data.

# **ledgerVatTypeGet**
> \Swagger\Client\Model\ResponseWrapperVatType ledgerVatTypeGet($id, $fields)

Get vat type by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LedgervatTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->ledgerVatTypeGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgervatTypeApi->ledgerVatTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperVatType**](../Model/ResponseWrapperVatType.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ledgerVatTypeSearch**
> \Swagger\Client\Model\ListResponseVatType ledgerVatTypeSearch($id, $number, $type_of_vat, $vat_date, $from, $count, $sorting, $fields)

Find vat types corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LedgervatTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$number = "number_example"; // string | List of IDs
$type_of_vat = "type_of_vat_example"; // string | Type of VAT
$vat_date = "vat_date_example"; // string | yyyy-MM-dd. Defaults to today. Note that this is only used in combination with typeOfVat-parameter. Only valid vatTypes on the given date are returned.
$from = 0; // int | From index
$count = 1000; // int | Number of elements to return
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->ledgerVatTypeSearch($id, $number, $type_of_vat, $vat_date, $from, $count, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgervatTypeApi->ledgerVatTypeSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| List of IDs | [optional]
 **number** | **string**| List of IDs | [optional]
 **type_of_vat** | **string**| Type of VAT | [optional]
 **vat_date** | **string**| yyyy-MM-dd. Defaults to today. Note that this is only used in combination with typeOfVat-parameter. Only valid vatTypes on the given date are returned. | [optional]
 **from** | **int**| From index | [optional] [default to 0]
 **count** | **int**| Number of elements to return | [optional] [default to 1000]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseVatType**](../Model/ListResponseVatType.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

