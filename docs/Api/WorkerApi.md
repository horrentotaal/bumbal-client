# BumbalClient\WorkerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActionToWorkerStack**](WorkerApi.md#addActionToWorkerStack) | **POST** /worker/add-action-to-stack | Add Action To Worker Stack


# **addActionToWorkerStack**
> \BumbalClient\Model\ApiResponse addActionToWorkerStack()

Add Action To Worker Stack

Add Action To Worker Stack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\WorkerApi();

try {
    $result = $api_instance->addActionToWorkerStack();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->addActionToWorkerStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

