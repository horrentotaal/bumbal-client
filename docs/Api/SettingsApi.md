# BumbalClient\SettingsApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConstants**](SettingsApi.md#getConstants) | **GET** /settings/get-constants | getConstants, returns in structure &#39;string&#39;:&#39;string&#39;, can contain rounding errors for floating points
[**getConstantsReversed**](SettingsApi.md#getConstantsReversed) | **GET** /settings/get-constants-reversed | getConstantsReversed, returns in structure &#39;string&#39;:int/float
[**retrieveListSettings**](SettingsApi.md#retrieveListSettings) | **PUT** /settings | Retrieve List of Settings
[**retrieveSettings**](SettingsApi.md#retrieveSettings) | **GET** /settings/{settingsId} | Retrieve a Settings
[**setSetting**](SettingsApi.md#setSetting) | **POST** /settings/set | Set (update) Setting value
[**updateSettings**](SettingsApi.md#updateSettings) | **PUT** /settings/{settingsId} | Update a Settings


# **getConstants**
> \BumbalClient\Model\SettingsGetConstantsResponse getConstants()

getConstants, returns in structure 'string':'string', can contain rounding errors for floating points

getConstants, returns in structure 'string':'string', can contain rounding errors for floating points, use the reversed function for correct floating points

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();

try {
    $result = $api_instance->getConstants();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getConstants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\SettingsGetConstantsResponse**](../Model/SettingsGetConstantsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConstantsReversed**
> \BumbalClient\Model\SettingsGetConstantsReversedResponse getConstantsReversed()

getConstantsReversed, returns in structure 'string':int/float

getConstantsReversed, returns in structure 'string':int/float

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();

try {
    $result = $api_instance->getConstantsReversed();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getConstantsReversed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\SettingsGetConstantsReversedResponse**](../Model/SettingsGetConstantsReversedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListSettings**
> \BumbalClient\Model\SettingsModel[] retrieveListSettings($arguments)

Retrieve List of Settings

Retrieve List of Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();
$arguments = new \BumbalClient\Model\SettingsRetrieveListArguments(); // \BumbalClient\Model\SettingsRetrieveListArguments | Settings RetrieveList Arguments

try {
    $result = $api_instance->retrieveListSettings($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->retrieveListSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\SettingsRetrieveListArguments**](../Model/SettingsRetrieveListArguments.md)| Settings RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\SettingsModel[]**](../Model/SettingsModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSettings**
> \BumbalClient\Model\SettingsModel retrieveSettings($settings_id)

Retrieve a Settings

Retrieve an Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();
$settings_id = 789; // int | ID of settings to retrieve

try {
    $result = $api_instance->retrieveSettings($settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->retrieveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_id** | **int**| ID of settings to retrieve |

### Return type

[**\BumbalClient\Model\SettingsModel**](../Model/SettingsModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setSetting**
> \BumbalClient\Model\ApiResponse setSetting($body)

Set (update) Setting value

Set (update) Setting value. If no id or key are set in the data, corresponding to one of teh Bumbal settings, no update can be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();
$body = new \BumbalClient\Model\SettingsModel(); // \BumbalClient\Model\SettingsModel | Setting object

try {
    $result = $api_instance->setSetting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\SettingsModel**](../Model/SettingsModel.md)| Setting object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSettings**
> \BumbalClient\Model\ApiResponse updateSettings($settings_id)

Update a Settings

Update a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\SettingsApi();
$settings_id = 789; // int | ID of settings to update

try {
    $result = $api_instance->updateSettings($settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_id** | **int**| ID of settings to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

