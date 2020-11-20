# BumbalClient\RouteApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRoute**](RouteApi.md#createRoute) | **POST** /route | Add a new Route
[**deleteRoute**](RouteApi.md#deleteRoute) | **DELETE** /route/{routeId} | Delete an Route
[**getExecutableActivities**](RouteApi.md#getExecutableActivities) | **POST** /route/get-executable-activities | Returns all activities in this route which hav enot been executed yet.
[**retrieveListRoute**](RouteApi.md#retrieveListRoute) | **PUT** /route | Retrieve List of Routes
[**retrieveRoute**](RouteApi.md#retrieveRoute) | **GET** /route/{routeId} | Retrieve a Route
[**routeStoreGeoLocations**](RouteApi.md#routeStoreGeoLocations) | **POST** /route/store-geo-locations | Store tracked Geo Locations in bulk
[**setRoute**](RouteApi.md#setRoute) | **POST** /route/set | Set (create or update) an Route
[**updateRoute**](RouteApi.md#updateRoute) | **PUT** /route/{routeId} | Update a Route


# **createRoute**
> \BumbalClient\Model\ApiResponse createRoute($body)

Add a new Route

Add a new Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$body = new \BumbalClient\Model\RouteModel(); // \BumbalClient\Model\RouteModel | Route object that needs to be created

try {
    $result = $api_instance->createRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->createRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RouteModel**](../Model/RouteModel.md)| Route object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoute**
> \BumbalClient\Model\ApiResponse deleteRoute($route_id, $cancel_activities)

Delete an Route

Delete an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$route_id = 789; // int | ID of route to update
$cancel_activities = true; // bool | Cancel activities on Route

try {
    $result = $api_instance->deleteRoute($route_id, $cancel_activities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->deleteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to update |
 **cancel_activities** | **bool**| Cancel activities on Route |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExecutableActivities**
> \BumbalClient\Model\ApiResponse getExecutableActivities($arguments)

Returns all activities in this route which hav enot been executed yet.

Returns all activities in this route which have not been executed yet. This will be in execution order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$arguments = new \BumbalClient\Model\GetExecutableActivitiesArguments(); // \BumbalClient\Model\GetExecutableActivitiesArguments | Request Arguments

try {
    $result = $api_instance->getExecutableActivities($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->getExecutableActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\GetExecutableActivitiesArguments**](../Model/GetExecutableActivitiesArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRoute**
> \BumbalClient\Model\RouteListResponse retrieveListRoute($arguments)

Retrieve List of Routes

Retrieve List of Routes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$arguments = new \BumbalClient\Model\RouteRetrieveListArguments(); // \BumbalClient\Model\RouteRetrieveListArguments | Route RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->retrieveListRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RouteRetrieveListArguments**](../Model/RouteRetrieveListArguments.md)| Route RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\RouteListResponse**](../Model/RouteListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRoute**
> \BumbalClient\Model\RouteModel retrieveRoute($route_id, $include_address_object, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations, $include_activity_ids, $include_latest_position)

Retrieve a Route

Retrieve an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$route_id = 789; // int | ID of route to retrieve
$include_address_object = true; // bool | Include Address Objects
$include_route_status = true; // bool | Include Status Name
$include_route_tags = true; // bool | Include Tags
$include_driver_info = true; // bool | Include Driver info
$include_equipment_info_car = true; // bool | Include Equipment info car
$include_gps_locations = false; // bool | Include GPS locations
$include_activity_ids = false; // bool | Include Activity IDs
$include_latest_position = false; // bool | Include Latest Known GPS location

try {
    $result = $api_instance->retrieveRoute($route_id, $include_address_object, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations, $include_activity_ids, $include_latest_position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->retrieveRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to retrieve |
 **include_address_object** | **bool**| Include Address Objects | [default to true]
 **include_route_status** | **bool**| Include Status Name | [default to true]
 **include_route_tags** | **bool**| Include Tags | [default to true]
 **include_driver_info** | **bool**| Include Driver info | [default to true]
 **include_equipment_info_car** | **bool**| Include Equipment info car | [default to true]
 **include_gps_locations** | **bool**| Include GPS locations | [default to false]
 **include_activity_ids** | **bool**| Include Activity IDs | [default to false]
 **include_latest_position** | **bool**| Include Latest Known GPS location | [default to false]

### Return type

[**\BumbalClient\Model\RouteModel**](../Model/RouteModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **routeStoreGeoLocations**
> \BumbalClient\Model\ApiResponse routeStoreGeoLocations($arguments)

Store tracked Geo Locations in bulk

Store tracked Geo Locations in bulk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$arguments = new \BumbalClient\Model\RouteStoreGeoLocations(); // \BumbalClient\Model\RouteStoreGeoLocations | Request Arguments

try {
    $result = $api_instance->routeStoreGeoLocations($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->routeStoreGeoLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RouteStoreGeoLocations**](../Model/RouteStoreGeoLocations.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRoute**
> \BumbalClient\Model\ApiResponse setRoute($body)

Set (create or update) an Route

Set (create or update) an Route. If id or links are set in the data, and a corresponding route is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$body = new \BumbalClient\Model\RouteModel(); // \BumbalClient\Model\RouteModel | Route object

try {
    $result = $api_instance->setRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->setRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\RouteModel**](../Model/RouteModel.md)| Route object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoute**
> \BumbalClient\Model\ApiResponse updateRoute($route_id)

Update a Route

Update an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\RouteApi();
$route_id = 789; // int | ID of route to update

try {
    $result = $api_instance->updateRoute($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->updateRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

