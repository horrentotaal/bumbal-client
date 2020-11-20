# BumbalClient\PortalsettingApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPortalSetting**](PortalsettingApi.md#createPortalSetting) | **POST** /portal-setting | Add a new PortalSetting
[**deletePortalSetting**](PortalsettingApi.md#deletePortalSetting) | **DELETE** /portal-setting/{portal-settingId} | Delete a PortalSetting
[**retrieveListPortalSetting**](PortalsettingApi.md#retrieveListPortalSetting) | **PUT** /portal-setting | Retrieve List of Portal Settings
[**retrievePortalSetting**](PortalsettingApi.md#retrievePortalSetting) | **GET** /portal-setting/{portal-settingId} | Retrieve a PortalSetting
[**setPortalSetting**](PortalsettingApi.md#setPortalSetting) | **POST** /portal-setting/set | Set (create or update) a PortalSetting
[**updatePortalSetting**](PortalsettingApi.md#updatePortalSetting) | **PUT** /portal-setting/{portal-settingId} | Update a PortalSetting


# **createPortalSetting**
> \BumbalClient\Model\ApiResponse createPortalSetting($body)

Add a new PortalSetting

Add a new PortalSetting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$body = new \BumbalClient\Model\PortalSettingModel(); // \BumbalClient\Model\PortalSettingModel | PortalSetting object that needs to be created

try {
    $result = $api_instance->createPortalSetting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->createPortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PortalSettingModel**](../Model/PortalSettingModel.md)| PortalSetting object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePortalSetting**
> \BumbalClient\Model\ApiResponse deletePortalSetting($portal_setting_id)

Delete a PortalSetting

Delete a PortalSetting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$portal_setting_id = 789; // int | ID of portal-setting to delete

try {
    $result = $api_instance->deletePortalSetting($portal_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->deletePortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_setting_id** | **int**| ID of portal-setting to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPortalSetting**
> \BumbalClient\Model\PortalSettingListResponse retrieveListPortalSetting($arguments)

Retrieve List of Portal Settings

Retrieve List of Portal Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$arguments = new \BumbalClient\Model\PortalSettingRetrieveListArguments(); // \BumbalClient\Model\PortalSettingRetrieveListArguments | PortalSetting RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPortalSetting($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->retrieveListPortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PortalSettingRetrieveListArguments**](../Model/PortalSettingRetrieveListArguments.md)| PortalSetting RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PortalSettingListResponse**](../Model/PortalSettingListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePortalSetting**
> \BumbalClient\Model\PortalSettingModel retrievePortalSetting($portal_setting_id)

Retrieve a PortalSetting

Retrieve an PortalSetting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$portal_setting_id = 789; // int | ID of portal-setting to retrieve

try {
    $result = $api_instance->retrievePortalSetting($portal_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->retrievePortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_setting_id** | **int**| ID of portal-setting to retrieve |

### Return type

[**\BumbalClient\Model\PortalSettingModel**](../Model/PortalSettingModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPortalSetting**
> \BumbalClient\Model\ApiResponse setPortalSetting($body)

Set (create or update) a PortalSetting

Set (create or update) a PortalSetting. If id or links are set in the data, and a corresponding portal-setting is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$body = new \BumbalClient\Model\PortalSettingModel(); // \BumbalClient\Model\PortalSettingModel | PortalSetting object

try {
    $result = $api_instance->setPortalSetting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->setPortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PortalSettingModel**](../Model/PortalSettingModel.md)| PortalSetting object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePortalSetting**
> \BumbalClient\Model\ApiResponse updatePortalSetting($portal_setting_id)

Update a PortalSetting

Update an PortalSetting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalsettingApi();
$portal_setting_id = 789; // int | ID of portal-setting to update

try {
    $result = $api_instance->updatePortalSetting($portal_setting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalsettingApi->updatePortalSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_setting_id** | **int**| ID of portal-setting to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

