# BumbalClient\LogApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListLog**](LogApi.md#retrieveListLog) | **PUT** /log | Retrieve List of Log messages
[**setLog**](LogApi.md#setLog) | **POST** /log/set | Post a Log message


# **retrieveListLog**
> \BumbalClient\Model\LogListResponse retrieveListLog($arguments)

Retrieve List of Log messages

Retrieve List of Log messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\LogApi();
$arguments = new \BumbalClient\Model\LogRetrieveListArguments(); // \BumbalClient\Model\LogRetrieveListArguments | Log RetrieveList Arguments

try {
    $result = $api_instance->retrieveListLog($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->retrieveListLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\LogRetrieveListArguments**](../Model/LogRetrieveListArguments.md)| Log RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\LogListResponse**](../Model/LogListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setLog**
> \BumbalClient\Model\ApiResponse setLog($body)

Post a Log message

Post a Log message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\LogApi();
$body = new \BumbalClient\Model\LogModel(); // \BumbalClient\Model\LogModel | Log object

try {
    $result = $api_instance->setLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->setLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\LogModel**](../Model/LogModel.md)| Log object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

