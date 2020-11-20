# BumbalClient\SystemproviderApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListSystemProvider**](SystemproviderApi.md#retrieveListSystemProvider) | **PUT** /system-provider | Retrieve List of System Providers
[**retrieveSystemProvider**](SystemproviderApi.md#retrieveSystemProvider) | **GET** /system-provider/{providerId} | Retrieve a System Provider


# **retrieveListSystemProvider**
> \BumbalClient\Model\SystemProviderListResponse retrieveListSystemProvider($arguments)

Retrieve List of System Providers

Retrieve List of System Providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SystemproviderApi();
$arguments = new \BumbalClient\Model\SystemProviderRetrieveListArguments(); // \BumbalClient\Model\SystemProviderRetrieveListArguments | System Provider RetrieveList Arguments

try {
    $result = $api_instance->retrieveListSystemProvider($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemproviderApi->retrieveListSystemProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\SystemProviderRetrieveListArguments**](../Model/SystemProviderRetrieveListArguments.md)| System Provider RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\SystemProviderListResponse**](../Model/SystemProviderListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSystemProvider**
> \BumbalClient\Model\SystemProviderModel retrieveSystemProvider($provider_id)

Retrieve a System Provider

Retrieve a System Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SystemproviderApi();
$provider_id = 789; // int | ID of System Provider to retrieve

try {
    $result = $api_instance->retrieveSystemProvider($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemproviderApi->retrieveSystemProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **int**| ID of System Provider to retrieve |

### Return type

[**\BumbalClient\Model\SystemProviderModel**](../Model/SystemProviderModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

