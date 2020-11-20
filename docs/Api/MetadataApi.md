# BumbalClient\MetadataApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMetaData**](MetadataApi.md#createMetaData) | **POST** /metadata | Add a new MetaData
[**deleteMetaData**](MetadataApi.md#deleteMetaData) | **DELETE** /metadata/{metadataId} | Delete a MetaData entry
[**retrieveListMetaData**](MetadataApi.md#retrieveListMetaData) | **PUT** /metadata | Retrieve List of MetaData
[**retrieveMetaData**](MetadataApi.md#retrieveMetaData) | **GET** /metadata/{metadataId} | Retrieve a MetaData
[**updateMetaData**](MetadataApi.md#updateMetaData) | **PUT** /metadata/{metadataId} | Update a specific MetaData object


# **createMetaData**
> \BumbalClient\Model\ApiResponse8 createMetaData($body)

Add a new MetaData

Add a new MetaData

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\MetadataApi();
$body = new \BumbalClient\Model\MetaDataModel(); // \BumbalClient\Model\MetaDataModel | MetaData object that needs to be created

try {
    $result = $api_instance->createMetaData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->createMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\MetaDataModel**](../Model/MetaDataModel.md)| MetaData object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse8**](../Model/ApiResponse8.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMetaData**
> \BumbalClient\Model\ApiResponse6 deleteMetaData($metadata_id)

Delete a MetaData entry

Delete a Metadata entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\MetadataApi();
$metadata_id = 789; // int | ID of MetaData to delete

try {
    $result = $api_instance->deleteMetaData($metadata_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->deleteMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_id** | **int**| ID of MetaData to delete |

### Return type

[**\BumbalClient\Model\ApiResponse6**](../Model/ApiResponse6.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListMetaData**
> \BumbalClient\Model\MetaDataListResponse retrieveListMetaData($arguments)

Retrieve List of MetaData

Retrieve List of MetaData

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\MetadataApi();
$arguments = new \BumbalClient\Model\MetaDataRetrieveListArguments(); // \BumbalClient\Model\MetaDataRetrieveListArguments | MetaData RetrieveList Arguments

try {
    $result = $api_instance->retrieveListMetaData($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->retrieveListMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\MetaDataRetrieveListArguments**](../Model/MetaDataRetrieveListArguments.md)| MetaData RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\MetaDataListResponse**](../Model/MetaDataListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveMetaData**
> \BumbalClient\Model\MetaDataModel retrieveMetaData($metadata_id, $include_object_type_name, $include_record_info)

Retrieve a MetaData

Retrieve an MetaData

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\MetadataApi();
$metadata_id = 789; // int | ID of MetaData to retrieve
$include_object_type_name = false; // bool | Show the name of the object type
$include_record_info = false; // bool | Show the record info

try {
    $result = $api_instance->retrieveMetaData($metadata_id, $include_object_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->retrieveMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_id** | **int**| ID of MetaData to retrieve |
 **include_object_type_name** | **bool**| Show the name of the object type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\MetaDataModel**](../Model/MetaDataModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMetaData**
> \BumbalClient\Model\ApiResponse5 updateMetaData($metadata_id, $body)

Update a specific MetaData object

Update a specific MetaData object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\MetadataApi();
$metadata_id = 789; // int | ID of the MetaData object to update
$body = new \BumbalClient\Model\MetaDataModel(); // \BumbalClient\Model\MetaDataModel | MetaData object that needs to be updated

try {
    $result = $api_instance->updateMetaData($metadata_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->updateMetaData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadata_id** | **int**| ID of the MetaData object to update |
 **body** | [**\BumbalClient\Model\MetaDataModel**](../Model/MetaDataModel.md)| MetaData object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse5**](../Model/ApiResponse5.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

