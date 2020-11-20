# BumbalClient\EquipmentApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEquipment**](EquipmentApi.md#deleteEquipment) | **DELETE** /equipment/{equipmentId} | Delete an Equipment
[**retrieveEquipment**](EquipmentApi.md#retrieveEquipment) | **GET** /equipment/{equipmentId} | Retrieve a Equipment
[**retrieveListEquipment**](EquipmentApi.md#retrieveListEquipment) | **PUT** /equipment | Retrieve List of Equipment
[**setEquipment**](EquipmentApi.md#setEquipment) | **POST** /equipment/set | Add/Update Equipment


# **deleteEquipment**
> \BumbalClient\Model\ApiResponse deleteEquipment($equipment_id)

Delete an Equipment

Delete an Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\EquipmentApi();
$equipment_id = 789; // int | ID of equipment to update

try {
    $result = $api_instance->deleteEquipment($equipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->deleteEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **equipment_id** | **int**| ID of equipment to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEquipment**
> \BumbalClient\Model\EquipmentModel retrieveEquipment($equipment_id)

Retrieve a Equipment

Retrieve an Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\EquipmentApi();
$equipment_id = 789; // int | ID of equipment to retrieve

try {
    $result = $api_instance->retrieveEquipment($equipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->retrieveEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **equipment_id** | **int**| ID of equipment to retrieve |

### Return type

[**\BumbalClient\Model\EquipmentModel**](../Model/EquipmentModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListEquipment**
> \BumbalClient\Model\EquipmentListResponse retrieveListEquipment($arguments)

Retrieve List of Equipment

Retrieve List of Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\EquipmentApi();
$arguments = new \BumbalClient\Model\EquipmentRetrieveListArguments(); // \BumbalClient\Model\EquipmentRetrieveListArguments | Equipment RetrieveList Arguments

try {
    $result = $api_instance->retrieveListEquipment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->retrieveListEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\EquipmentRetrieveListArguments**](../Model/EquipmentRetrieveListArguments.md)| Equipment RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\EquipmentListResponse**](../Model/EquipmentListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setEquipment**
> \BumbalClient\Model\ApiResponse setEquipment($body)

Add/Update Equipment

add or update an a piece of Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\EquipmentApi();
$body = new \BumbalClient\Model\EquipmentModel(); // \BumbalClient\Model\EquipmentModel | Equipment object that needs to be created

try {
    $result = $api_instance->setEquipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->setEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\EquipmentModel**](../Model/EquipmentModel.md)| Equipment object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

