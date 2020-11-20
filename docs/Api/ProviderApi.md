# BumbalClient\ProviderApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProvider**](ProviderApi.md#createProvider) | **POST** /provider | Add a new Provider
[**retrieveListProvider**](ProviderApi.md#retrieveListProvider) | **PUT** /provider | Retrieve List of Providers
[**retrieveProvider**](ProviderApi.md#retrieveProvider) | **GET** /provider/{providerId} | Retrieve a Provider
[**updateProvider**](ProviderApi.md#updateProvider) | **PUT** /provider/{providerId} | Update a specific provider object


# **createProvider**
> \BumbalClient\Model\ApiResponse23 createProvider($body)

Add a new Provider

Add a new Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ProviderApi();
$body = new \BumbalClient\Model\ProviderModel(); // \BumbalClient\Model\ProviderModel | Provider object that needs to be created

try {
    $result = $api_instance->createProvider($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->createProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ProviderModel**](../Model/ProviderModel.md)| Provider object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse23**](../Model/ApiResponse23.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListProvider**
> \BumbalClient\Model\ProviderListResponse retrieveListProvider($arguments)

Retrieve List of Providers

Retrieve List of Providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ProviderApi();
$arguments = new \BumbalClient\Model\ProviderRetrieveListArguments(); // \BumbalClient\Model\ProviderRetrieveListArguments | Provider RetrieveList Arguments

try {
    $result = $api_instance->retrieveListProvider($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->retrieveListProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ProviderRetrieveListArguments**](../Model/ProviderRetrieveListArguments.md)| Provider RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ProviderListResponse**](../Model/ProviderListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProvider**
> \BumbalClient\Model\ProviderModel retrieveProvider($provider_id)

Retrieve a Provider

Retrieve an Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ProviderApi();
$provider_id = 789; // int | ID of provider to retrieve

try {
    $result = $api_instance->retrieveProvider($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->retrieveProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **int**| ID of provider to retrieve |

### Return type

[**\BumbalClient\Model\ProviderModel**](../Model/ProviderModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProvider**
> \BumbalClient\Model\ApiResponse22 updateProvider($provider_id, $body)

Update a specific provider object

Update a specific provider object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ProviderApi();
$provider_id = 789; // int | ID of the provider object to update
$body = new \BumbalClient\Model\ProviderModel(); // \BumbalClient\Model\ProviderModel | Provider object that needs to be updated

try {
    $result = $api_instance->updateProvider($provider_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProviderApi->updateProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **int**| ID of the provider object to update |
 **body** | [**\BumbalClient\Model\ProviderModel**](../Model/ProviderModel.md)| Provider object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse22**](../Model/ApiResponse22.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

