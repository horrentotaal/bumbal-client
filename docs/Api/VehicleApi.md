# BumbalClient\VehicleApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVehicle**](VehicleApi.md#createVehicle) | **POST** /vehicle | Add a new vehicle
[**deleteVehicle**](VehicleApi.md#deleteVehicle) | **DELETE** /vehicle/{vehicleId} | Delete a vehicle entry
[**retrieveListVehicle**](VehicleApi.md#retrieveListVehicle) | **PUT** /vehicle | Retrieve List of Vehicles
[**retrieveVehicle**](VehicleApi.md#retrieveVehicle) | **GET** /vehicle/{vehicleId} | Find vehicle by ID
[**setVehicle**](VehicleApi.md#setVehicle) | **POST** /vehicle/set | Set (create or update) a vehicle
[**updateVehicle**](VehicleApi.md#updateVehicle) | **PUT** /vehicle/{vehicleId} | Update a vehicle


# **createVehicle**
> \BumbalClient\Model\ApiResponse56 createVehicle($body)

Add a new vehicle

Add a new vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$body = new \BumbalClient\Model\VehicleModel(); // \BumbalClient\Model\VehicleModel | Vehicle object that needs to be created

try {
    $result = $api_instance->createVehicle($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->createVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\VehicleModel**](../Model/VehicleModel.md)| Vehicle object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse56**](../Model/ApiResponse56.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVehicle**
> \BumbalClient\Model\ApiResponse57 deleteVehicle($vehicle_id)

Delete a vehicle entry

Delete a vehicle entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$vehicle_id = 789; // int | ID of vehicle to delete

try {
    $result = $api_instance->deleteVehicle($vehicle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->deleteVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| ID of vehicle to delete |

### Return type

[**\BumbalClient\Model\ApiResponse57**](../Model/ApiResponse57.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListVehicle**
> \BumbalClient\Model\VehicleModel[] retrieveListVehicle($arguments)

Retrieve List of Vehicles

Retrieve List of Vehicles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$arguments = new \BumbalClient\Model\VehicleRetrieveListArguments(); // \BumbalClient\Model\VehicleRetrieveListArguments | Vehicle RetrieveList Arguments

try {
    $result = $api_instance->retrieveListVehicle($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->retrieveListVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\VehicleRetrieveListArguments**](../Model/VehicleRetrieveListArguments.md)| Vehicle RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\VehicleModel[]**](../Model/VehicleModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveVehicle**
> \BumbalClient\Model\VehicleModel retrieveVehicle($vehicle_id, $include_vehicle_tags, $include_updated_by)

Find vehicle by ID

Returns a single vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$vehicle_id = 789; // int | ID of vehicle to return
$include_vehicle_tags = true; // bool | a list of tags bound to vehicle
$include_updated_by = true; // bool | include updated_by_name

try {
    $result = $api_instance->retrieveVehicle($vehicle_id, $include_vehicle_tags, $include_updated_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->retrieveVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| ID of vehicle to return |
 **include_vehicle_tags** | **bool**| a list of tags bound to vehicle | [default to true]
 **include_updated_by** | **bool**| include updated_by_name | [default to true]

### Return type

[**\BumbalClient\Model\VehicleModel**](../Model/VehicleModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVehicle**
> \BumbalClient\Model\ApiResponse setVehicle($body)

Set (create or update) a vehicle

Set (create or update) a vehicle. If id or links are set in the data, and a corresponding vehicle is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$body = new \BumbalClient\Model\VehicleModel(); // \BumbalClient\Model\VehicleModel | Vehicle object

try {
    $result = $api_instance->setVehicle($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->setVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\VehicleModel**](../Model/VehicleModel.md)| Vehicle object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVehicle**
> \BumbalClient\Model\ApiResponse updateVehicle($vehicle_id, $body)

Update a vehicle

Update a vehicle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\VehicleApi();
$vehicle_id = 789; // int | ID of vehicle to update
$body = new \BumbalClient\Model\VehicleModel(); // \BumbalClient\Model\VehicleModel | Vehicle object that needs to be updated

try {
    $result = $api_instance->updateVehicle($vehicle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VehicleApi->updateVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_id** | **int**| ID of vehicle to update |
 **body** | [**\BumbalClient\Model\VehicleModel**](../Model/VehicleModel.md)| Vehicle object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

