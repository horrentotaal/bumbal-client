# BumbalClient\CarApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCar**](CarApi.md#createCar) | **POST** /car | Add a car
[**deleteCar**](CarApi.md#deleteCar) | **DELETE** /car/{carId} | Delete an car
[**retrieveCar**](CarApi.md#retrieveCar) | **GET** /car/{carId} | Find car by ID
[**retrieveListCar**](CarApi.md#retrieveListCar) | **PUT** /car | Retrieve List of Cars
[**setCar**](CarApi.md#setCar) | **POST** /car/set | Set (create or update) a car
[**updateCar**](CarApi.md#updateCar) | **PUT** /car/{carId} | Update a car


# **createCar**
> \BumbalClient\Model\ApiResponse createCar($body)

Add a car

Add a car

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$body = new \BumbalClient\Model\CarModel(); // \BumbalClient\Model\CarModel | Car object that needs to be created

try {
    $result = $api_instance->createCar($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->createCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CarModel**](../Model/CarModel.md)| Car object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCar**
> \BumbalClient\Model\ApiResponse deleteCar($car_id)

Delete an car

Delete an car

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$car_id = 789; // int | ID of the car to delete

try {
    $result = $api_instance->deleteCar($car_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->deleteCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **car_id** | **int**| ID of the car to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCar**
> \BumbalClient\Model\CarModel retrieveCar($car_id, $include_car_tags, $include_updated_by)

Find car by ID

Returns a single car

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$car_id = 789; // int | ID of car to return
$include_car_tags = true; // bool | a list of tags bound to car
$include_updated_by = true; // bool | include updated_by_name

try {
    $result = $api_instance->retrieveCar($car_id, $include_car_tags, $include_updated_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->retrieveCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **car_id** | **int**| ID of car to return |
 **include_car_tags** | **bool**| a list of tags bound to car | [default to true]
 **include_updated_by** | **bool**| include updated_by_name | [default to true]

### Return type

[**\BumbalClient\Model\CarModel**](../Model/CarModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCar**
> \BumbalClient\Model\CarModel[] retrieveListCar($arguments)

Retrieve List of Cars

Retrieve List of Cars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$arguments = new \BumbalClient\Model\CarRetrieveListArguments(); // \BumbalClient\Model\CarRetrieveListArguments | Car RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCar($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->retrieveListCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CarRetrieveListArguments**](../Model/CarRetrieveListArguments.md)| Car RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CarModel[]**](../Model/CarModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCar**
> \BumbalClient\Model\ApiResponse setCar($body)

Set (create or update) a car

Set (create or update) a car. If id or links are set in the data, and a corresponding car is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$body = new \BumbalClient\Model\CarModel(); // \BumbalClient\Model\CarModel | Car object

try {
    $result = $api_instance->setCar($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->setCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CarModel**](../Model/CarModel.md)| Car object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCar**
> \BumbalClient\Model\ApiResponse updateCar($car_id, $body)

Update a car

Update a car

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CarApi();
$car_id = 789; // int | ID of car to update
$body = new \BumbalClient\Model\CarModel(); // \BumbalClient\Model\CarModel | Car object that needs to be updated

try {
    $result = $api_instance->updateCar($car_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarApi->updateCar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **car_id** | **int**| ID of car to update |
 **body** | [**\BumbalClient\Model\CarModel**](../Model/CarModel.md)| Car object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

