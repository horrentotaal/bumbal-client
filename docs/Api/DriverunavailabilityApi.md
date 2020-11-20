# BumbalClient\DriverunavailabilityApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDriverUnavailability**](DriverunavailabilityApi.md#createDriverUnavailability) | **POST** /driver-unavailability | Add a new DriverUnavailability
[**deleteDriverUnavailability**](DriverunavailabilityApi.md#deleteDriverUnavailability) | **DELETE** /driver-unavailability/{driverunavailabilityId} | Delete a DriverUnavailability entry
[**retrieveDriverUnavailability**](DriverunavailabilityApi.md#retrieveDriverUnavailability) | **GET** /driver-unavailability/{driverunavailabilityId} | Retrieve a DriverUnavailability
[**retrieveListDriverUnavailability**](DriverunavailabilityApi.md#retrieveListDriverUnavailability) | **PUT** /driver-unavailability | Retrieve List of DriverUnavailability
[**updateDriverUnavailability**](DriverunavailabilityApi.md#updateDriverUnavailability) | **PUT** /driver-unavailability/{driverunavailabilityId} | Update a specific DriverUnavailability object


# **createDriverUnavailability**
> \BumbalClient\Model\ApiResponse4 createDriverUnavailability($body)

Add a new DriverUnavailability

Add a new DriverUnavailability

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverunavailabilityApi();
$body = new \BumbalClient\Model\DriverUnavailabilityModel(); // \BumbalClient\Model\DriverUnavailabilityModel | DriverUnavailability object that needs to be created

try {
    $result = $api_instance->createDriverUnavailability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverunavailabilityApi->createDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)| DriverUnavailability object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse4**](../Model/ApiResponse4.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDriverUnavailability**
> \BumbalClient\Model\ApiResponse2 deleteDriverUnavailability($driverunavailability_id)

Delete a DriverUnavailability entry

Delete a Metadata entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverunavailabilityApi();
$driverunavailability_id = 789; // int | ID of DriverUnavailability to delete

try {
    $result = $api_instance->deleteDriverUnavailability($driverunavailability_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverunavailabilityApi->deleteDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of DriverUnavailability to delete |

### Return type

[**\BumbalClient\Model\ApiResponse2**](../Model/ApiResponse2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDriverUnavailability**
> \BumbalClient\Model\DriverUnavailabilityModel retrieveDriverUnavailability($driverunavailability_id, $include_object_type_name, $include_record_info)

Retrieve a DriverUnavailability

Retrieve an DriverUnavailability

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverunavailabilityApi();
$driverunavailability_id = 789; // int | ID of DriverUnavailability to retrieve
$include_object_type_name = false; // bool | Show the name of the object type
$include_record_info = false; // bool | Show the record info

try {
    $result = $api_instance->retrieveDriverUnavailability($driverunavailability_id, $include_object_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverunavailabilityApi->retrieveDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of DriverUnavailability to retrieve |
 **include_object_type_name** | **bool**| Show the name of the object type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDriverUnavailability**
> \BumbalClient\Model\DriverUnavailabilityListResponse retrieveListDriverUnavailability($arguments)

Retrieve List of DriverUnavailability

Retrieve List of DriverUnavailability

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverunavailabilityApi();
$arguments = new \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments(); // \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments | DriverUnavailability RetrieveList Arguments

try {
    $result = $api_instance->retrieveListDriverUnavailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverunavailabilityApi->retrieveListDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\DriverUnavailabilityRetrieveListArguments**](../Model/DriverUnavailabilityRetrieveListArguments.md)| DriverUnavailability RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\DriverUnavailabilityListResponse**](../Model/DriverUnavailabilityListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDriverUnavailability**
> \BumbalClient\Model\ApiResponse1 updateDriverUnavailability($driverunavailability_id, $body)

Update a specific DriverUnavailability object

Update a specific DriverUnavailability object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverunavailabilityApi();
$driverunavailability_id = 789; // int | ID of the DriverUnavailability object to update
$body = new \BumbalClient\Model\DriverUnavailabilityModel(); // \BumbalClient\Model\DriverUnavailabilityModel | DriverUnavailability object that needs to be updated

try {
    $result = $api_instance->updateDriverUnavailability($driverunavailability_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverunavailabilityApi->updateDriverUnavailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driverunavailability_id** | **int**| ID of the DriverUnavailability object to update |
 **body** | [**\BumbalClient\Model\DriverUnavailabilityModel**](../Model/DriverUnavailabilityModel.md)| DriverUnavailability object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse1**](../Model/ApiResponse1.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

