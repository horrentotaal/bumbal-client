# BumbalClient\DriverApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDriver**](DriverApi.md#createDriver) | **POST** /driver | Add a driver
[**deleteDriver**](DriverApi.md#deleteDriver) | **DELETE** /driver/{driverId} | Delete an driver
[**retrieveDriver**](DriverApi.md#retrieveDriver) | **GET** /driver/{driverId} | Find driver by ID
[**retrieveListDriver**](DriverApi.md#retrieveListDriver) | **PUT** /driver | Retrieve List of Drivers
[**setDriver**](DriverApi.md#setDriver) | **POST** /driver/set | Set (create or update) a driver
[**updateDriver**](DriverApi.md#updateDriver) | **PUT** /driver/{driverId} | Update a driver


# **createDriver**
> \BumbalClient\Model\ApiResponse createDriver($body)

Add a driver

Add a driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$body = new \BumbalClient\Model\DriverModel(); // \BumbalClient\Model\DriverModel | Driver object that needs to be created

try {
    $result = $api_instance->createDriver($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->createDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverModel**](../Model/DriverModel.md)| Driver object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDriver**
> \BumbalClient\Model\ApiResponse deleteDriver($driver_id)

Delete an driver

Delete an driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$driver_id = 789; // int | ID of the driver to delete

try {
    $result = $api_instance->deleteDriver($driver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->deleteDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of the driver to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDriver**
> \BumbalClient\Model\DriverModel retrieveDriver($driver_id, $include_driver_tags, $include_updated_by)

Find driver by ID

Returns a single driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$driver_id = 789; // int | ID of driver to return
$include_driver_tags = true; // bool | a list of tags bound to driver
$include_updated_by = true; // bool | include updated_by_name

try {
    $result = $api_instance->retrieveDriver($driver_id, $include_driver_tags, $include_updated_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->retrieveDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of driver to return |
 **include_driver_tags** | **bool**| a list of tags bound to driver | [default to true]
 **include_updated_by** | **bool**| include updated_by_name | [default to true]

### Return type

[**\BumbalClient\Model\DriverModel**](../Model/DriverModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDriver**
> \BumbalClient\Model\DriverListResponse retrieveListDriver($arguments)

Retrieve List of Drivers

Retrieve List of Drivers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$arguments = new \BumbalClient\Model\DriverRetrieveListArguments(); // \BumbalClient\Model\DriverRetrieveListArguments | Driver RetrieveList Arguments

try {
    $result = $api_instance->retrieveListDriver($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->retrieveListDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\DriverRetrieveListArguments**](../Model/DriverRetrieveListArguments.md)| Driver RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\DriverListResponse**](../Model/DriverListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDriver**
> \BumbalClient\Model\ApiResponse setDriver($body)

Set (create or update) a driver

Set (create or update) a driver. If id or links are set in the data, and a corresponding driver is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$body = new \BumbalClient\Model\DriverModel(); // \BumbalClient\Model\DriverModel | Driver object

try {
    $result = $api_instance->setDriver($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->setDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverModel**](../Model/DriverModel.md)| Driver object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDriver**
> \BumbalClient\Model\ApiResponse updateDriver($driver_id, $body)

Update a driver

Update a driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$driver_id = 789; // int | ID of driver to update
$body = new \BumbalClient\Model\DriverModel(); // \BumbalClient\Model\DriverModel | Driver object that needs to be updated

try {
    $result = $api_instance->updateDriver($driver_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->updateDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of driver to update |
 **body** | [**\BumbalClient\Model\DriverModel**](../Model/DriverModel.md)| Driver object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

