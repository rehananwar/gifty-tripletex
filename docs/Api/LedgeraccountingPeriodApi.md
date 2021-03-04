# Swagger\Client\LedgeraccountingPeriodApi

All URIs are relative to *https://api.tripletex.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ledgerAccountingPeriodGet**](LedgeraccountingPeriodApi.md#ledgeraccountingperiodget) | **GET** /ledger/accountingPeriod/{id} | Get accounting period by ID.
[**ledgerAccountingPeriodSearch**](LedgeraccountingPeriodApi.md#ledgeraccountingperiodsearch) | **GET** /ledger/accountingPeriod | Find accounting periods corresponding with sent data.

# **ledgerAccountingPeriodGet**
> \Swagger\Client\Model\ResponseWrapperAccountingPeriod ledgerAccountingPeriodGet($id, $fields)

Get accounting period by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LedgeraccountingPeriodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Element ID
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->ledgerAccountingPeriodGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgeraccountingPeriodApi->ledgerAccountingPeriodGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Element ID |
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWrapperAccountingPeriod**](../Model/ResponseWrapperAccountingPeriod.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ledgerAccountingPeriodSearch**
> \Swagger\Client\Model\ListResponseAccountingPeriod ledgerAccountingPeriodSearch($id, $number_from, $number_to, $start_from, $start_to, $end_from, $end_to, $count, $from, $sorting, $fields)

Find accounting periods corresponding with sent data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: tokenAuthScheme
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LedgeraccountingPeriodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | List of IDs
$number_from = 56; // int | From and including
$number_to = 56; // int | To and excluding
$start_from = "start_from_example"; // string | From and including
$start_to = "start_to_example"; // string | To and excluding
$end_from = "end_from_example"; // string | From and including
$end_to = "end_to_example"; // string | To and excluding
$count = 1400; // int | Number of elements to return
$from = 0; // int | From index
$sorting = "sorting_example"; // string | Sorting pattern
$fields = "fields_example"; // string | Fields filter pattern

try {
    $result = $apiInstance->ledgerAccountingPeriodSearch($id, $number_from, $number_to, $start_from, $start_to, $end_from, $end_to, $count, $from, $sorting, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgeraccountingPeriodApi->ledgerAccountingPeriodSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| List of IDs | [optional]
 **number_from** | **int**| From and including | [optional]
 **number_to** | **int**| To and excluding | [optional]
 **start_from** | **string**| From and including | [optional]
 **start_to** | **string**| To and excluding | [optional]
 **end_from** | **string**| From and including | [optional]
 **end_to** | **string**| To and excluding | [optional]
 **count** | **int**| Number of elements to return | [optional] [default to 1400]
 **from** | **int**| From index | [optional] [default to 0]
 **sorting** | **string**| Sorting pattern | [optional]
 **fields** | **string**| Fields filter pattern | [optional]

### Return type

[**\Swagger\Client\Model\ListResponseAccountingPeriod**](../Model/ListResponseAccountingPeriod.md)

### Authorization

[tokenAuthScheme](../../README.md#tokenAuthScheme)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

