# BumbalClient\TracktraceApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trackTraceCalculateETA**](TracktraceApi.md#trackTraceCalculateETA) | **GET** /track-and-trace/calculate-eta/{activityId} | Calculate ETA for Activity


# **trackTraceCalculateETA**
> \BumbalClient\Model\ApiResponse trackTraceCalculateETA($activity_id)

Calculate ETA for Activity

Calculate ETA for Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TracktraceApi();
$activity_id = 789; // int | ID of the activity to calculate ETA for

try {
    $result = $api_instance->trackTraceCalculateETA($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TracktraceApi->trackTraceCalculateETA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to calculate ETA for |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

