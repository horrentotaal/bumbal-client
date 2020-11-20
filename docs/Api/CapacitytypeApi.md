# BumbalClient\CapacitytypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCapacityType**](CapacitytypeApi.md#deleteCapacityType) | **DELETE** /capacity-type/{capacityTypeId} | Delete a capacity-type
[**retrieveCapacityType**](CapacitytypeApi.md#retrieveCapacityType) | **GET** /capacity-type/{capacityTypeId} | Find capacity-type by ID
[**retrieveListCapacityType**](CapacitytypeApi.md#retrieveListCapacityType) | **PUT** /capacity-type | Retrieve List of CapacityTypes
[**setCapacityType**](CapacitytypeApi.md#setCapacityType) | **POST** /capacity-type/set | Set (create or update) an CapacityType


# **deleteCapacityType**
> \BumbalClient\Model\ApiResponse deleteCapacityType($capacity_type_id)

Delete a capacity-type

Delete a capacity-type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CapacitytypeApi();
$capacity_type_id = 789; // int | ID of the capacity-type to delete

try {
    $result = $api_instance->deleteCapacityType($capacity_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitytypeApi->deleteCapacityType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capacity_type_id** | **int**| ID of the capacity-type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCapacityType**
> \BumbalClient\Model\CapacityTypeModel retrieveCapacityType($capacity_type_id, $include_uom, $include_uom_group, $include_uom_name)

Find capacity-type by ID

Returns a single capacity-type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CapacitytypeApi();
$capacity_type_id = 789; // int | ID of capacity-type to return
$include_uom = false; // bool | Include uom object
$include_uom_group = false; // bool | Include uom group
$include_uom_name = false; // bool | Include uom name

try {
    $result = $api_instance->retrieveCapacityType($capacity_type_id, $include_uom, $include_uom_group, $include_uom_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitytypeApi->retrieveCapacityType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **capacity_type_id** | **int**| ID of capacity-type to return |
 **include_uom** | **bool**| Include uom object | [optional] [default to false]
 **include_uom_group** | **bool**| Include uom group | [optional] [default to false]
 **include_uom_name** | **bool**| Include uom name | [optional] [default to false]

### Return type

[**\BumbalClient\Model\CapacityTypeModel**](../Model/CapacityTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCapacityType**
> \BumbalClient\Model\CapacityTypeListResponse retrieveListCapacityType($arguments)

Retrieve List of CapacityTypes

Retrieve List of CapacityTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CapacitytypeApi();
$arguments = new \BumbalClient\Model\CapacityTypeRetrieveListArguments(); // \BumbalClient\Model\CapacityTypeRetrieveListArguments | CapacityType RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCapacityType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitytypeApi->retrieveListCapacityType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CapacityTypeRetrieveListArguments**](../Model/CapacityTypeRetrieveListArguments.md)| CapacityType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CapacityTypeListResponse**](../Model/CapacityTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCapacityType**
> \BumbalClient\Model\ApiResponse setCapacityType($body)

Set (create or update) an CapacityType

Set (create or update) a CapacityType. If id is set in the data, and a corresponding capacity-type is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CapacitytypeApi();
$body = new \BumbalClient\Model\CapacityTypeModel(); // \BumbalClient\Model\CapacityTypeModel | CapacityType model

try {
    $result = $api_instance->setCapacityType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapacitytypeApi->setCapacityType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CapacityTypeModel**](../Model/CapacityTypeModel.md)| CapacityType model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

