# BumbalClient\PortalApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPortal**](PortalApi.md#createPortal) | **POST** /portal | Add a new Portal
[**deletePortal**](PortalApi.md#deletePortal) | **DELETE** /portal/{portalId} | Delete a Portal
[**retrieveListPortal**](PortalApi.md#retrieveListPortal) | **PUT** /portal | Retrieve List of Portals
[**retrievePortal**](PortalApi.md#retrievePortal) | **GET** /portal/{portalId} | Retrieve a Portal
[**setPortal**](PortalApi.md#setPortal) | **POST** /portal/set | Set (create or update) a Portal
[**updatePortal**](PortalApi.md#updatePortal) | **PUT** /portal/{portalId} | Update a Portal


# **createPortal**
> \BumbalClient\Model\ApiResponse createPortal($body)

Add a new Portal

Add a new Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$body = new \BumbalClient\Model\PortalModel(); // \BumbalClient\Model\PortalModel | Portal object that needs to be created

try {
    $result = $api_instance->createPortal($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->createPortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PortalModel**](../Model/PortalModel.md)| Portal object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePortal**
> \BumbalClient\Model\ApiResponse deletePortal($portal_id)

Delete a Portal

Delete a Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$portal_id = 789; // int | ID of portal to delete

try {
    $result = $api_instance->deletePortal($portal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->deletePortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_id** | **int**| ID of portal to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPortal**
> \BumbalClient\Model\PortalListResponse retrieveListPortal($arguments)

Retrieve List of Portals

Retrieve List of Portals

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$arguments = new \BumbalClient\Model\PortalRetrieveListArguments(); // \BumbalClient\Model\PortalRetrieveListArguments | Portal RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPortal($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->retrieveListPortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PortalRetrieveListArguments**](../Model/PortalRetrieveListArguments.md)| Portal RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PortalListResponse**](../Model/PortalListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePortal**
> \BumbalClient\Model\PortalModel retrievePortal($portal_id)

Retrieve a Portal

Retrieve an Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$portal_id = 789; // int | ID of portal to retrieve

try {
    $result = $api_instance->retrievePortal($portal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->retrievePortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_id** | **int**| ID of portal to retrieve |

### Return type

[**\BumbalClient\Model\PortalModel**](../Model/PortalModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPortal**
> \BumbalClient\Model\ApiResponse setPortal($body)

Set (create or update) a Portal

Set (create or update) a Portal. If id or links are set in the data, and a corresponding portal is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$body = new \BumbalClient\Model\PortalModel(); // \BumbalClient\Model\PortalModel | Portal object

try {
    $result = $api_instance->setPortal($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->setPortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PortalModel**](../Model/PortalModel.md)| Portal object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePortal**
> \BumbalClient\Model\ApiResponse updatePortal($portal_id)

Update a Portal

Update an Portal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PortalApi();
$portal_id = 789; // int | ID of portal to update

try {
    $result = $api_instance->updatePortal($portal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalApi->updatePortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_id** | **int**| ID of portal to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

