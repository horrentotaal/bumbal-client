# BumbalClient\ZoneApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createZone**](ZoneApi.md#createZone) | **POST** /zone | Add a new Zone
[**deleteZone**](ZoneApi.md#deleteZone) | **DELETE** /zone/{zoneId} | Delete a Zone
[**retrieveListZone**](ZoneApi.md#retrieveListZone) | **PUT** /zone | Retrieve List of Zone
[**retrieveZone**](ZoneApi.md#retrieveZone) | **GET** /zone/{zoneId} | Retrieve a Zone
[**setZone**](ZoneApi.md#setZone) | **POST** /zone/set | Set (create or update) a Zone
[**updateZone**](ZoneApi.md#updateZone) | **PUT** /zone/{zoneId} | Update a Zone


# **createZone**
> \BumbalClient\Model\ApiResponse createZone($body)

Add a new Zone

Add a new Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$body = new \BumbalClient\Model\ZoneModel(); // \BumbalClient\Model\ZoneModel | Zone object that needs to be created

try {
    $result = $api_instance->createZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->createZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ZoneModel**](../Model/ZoneModel.md)| Zone object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZone**
> \BumbalClient\Model\ApiResponse deleteZone($zone_id)

Delete a Zone

Delete a Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$zone_id = 789; // int | ID of zone to delete

try {
    $result = $api_instance->deleteZone($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| ID of zone to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListZone**
> \BumbalClient\Model\ZoneModel[] retrieveListZone($arguments)

Retrieve List of Zone

Retrieve List of Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$arguments = new \BumbalClient\Model\ZoneRetrieveListArguments(); // \BumbalClient\Model\ZoneRetrieveListArguments | Zone RetrieveList Arguments

try {
    $result = $api_instance->retrieveListZone($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->retrieveListZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ZoneRetrieveListArguments**](../Model/ZoneRetrieveListArguments.md)| Zone RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ZoneModel[]**](../Model/ZoneModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveZone**
> \BumbalClient\Model\ZoneModel retrieveZone($zone_id)

Retrieve a Zone

Retrieve an Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$zone_id = 789; // int | ID of zone to retrieve

try {
    $result = $api_instance->retrieveZone($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->retrieveZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| ID of zone to retrieve |

### Return type

[**\BumbalClient\Model\ZoneModel**](../Model/ZoneModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setZone**
> \BumbalClient\Model\ApiResponse setZone($body)

Set (create or update) a Zone

Set (create or update) a Zone. If id or links are set in the data, and a corresponding zone is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$body = new \BumbalClient\Model\ZoneModel(); // \BumbalClient\Model\ZoneModel | Zone object

try {
    $result = $api_instance->setZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->setZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ZoneModel**](../Model/ZoneModel.md)| Zone object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZone**
> \BumbalClient\Model\ApiResponse updateZone($zone_id)

Update a Zone

Update an Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZoneApi();
$zone_id = 789; // int | ID of zone to update

try {
    $result = $api_instance->updateZone($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->updateZone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **int**| ID of zone to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

