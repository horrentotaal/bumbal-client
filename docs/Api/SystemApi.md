# BumbalClient\SystemApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemGetConfig**](SystemApi.md#systemGetConfig) | **GET** /system/get-config | Retrieve System Configuration
[**systemGetSayWhenConfig**](SystemApi.md#systemGetSayWhenConfig) | **GET** /system/get-say-when-config | Retrieve SayWhen System Configuration
[**systemGetVariables**](SystemApi.md#systemGetVariables) | **GET** /system/get-variables | Retrieve System Variables


# **systemGetConfig**
> \BumbalClient\Model\ConfigModel systemGetConfig()

Retrieve System Configuration

Retrieve System Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SystemApi();

try {
    $result = $api_instance->systemGetConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemGetConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ConfigModel**](../Model/ConfigModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemGetSayWhenConfig**
> \BumbalClient\Model\SayWhenConfigModel systemGetSayWhenConfig()

Retrieve SayWhen System Configuration

Retrieve SayWhen System Configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SystemApi();

try {
    $result = $api_instance->systemGetSayWhenConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemGetSayWhenConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\SayWhenConfigModel**](../Model/SayWhenConfigModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemGetVariables**
> \BumbalClient\Model\VariablesModel systemGetVariables()

Retrieve System Variables

Retrieve System Variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SystemApi();

try {
    $result = $api_instance->systemGetVariables();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemGetVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\VariablesModel**](../Model/VariablesModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

