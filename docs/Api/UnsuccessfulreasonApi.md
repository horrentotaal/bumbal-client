# BumbalClient\UnsuccessfulreasonApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUnsuccessfulReason**](UnsuccessfulreasonApi.md#createUnsuccessfulReason) | **POST** /unsuccessful-reason | Add a new UnsuccessfulReason
[**deleteUnsuccessfulReason**](UnsuccessfulreasonApi.md#deleteUnsuccessfulReason) | **DELETE** /unsuccessful-reason/{unsuccessful-reasonId} | Delete a UnsuccessfulReason entry
[**retrieveListUnsuccessfulReason**](UnsuccessfulreasonApi.md#retrieveListUnsuccessfulReason) | **PUT** /unsuccessful-reason | Retrieve List of UnsuccessfulReason
[**retrieveUnsuccessfulReason**](UnsuccessfulreasonApi.md#retrieveUnsuccessfulReason) | **GET** /unsuccessful-reason/{unsuccessful-reasonId} | Retrieve a UnsuccessfulReason
[**updateUnsuccessfulReason**](UnsuccessfulreasonApi.md#updateUnsuccessfulReason) | **PUT** /unsuccessful-reason/{unsuccessful-reasonId} | Update a specific UnsuccessfulReason object


# **createUnsuccessfulReason**
> \BumbalClient\Model\ApiResponse54 createUnsuccessfulReason($body)

Add a new UnsuccessfulReason

Add a new UnsuccessfulReason

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UnsuccessfulreasonApi();
$body = new \BumbalClient\Model\UnsuccessfulReasonModel(); // \BumbalClient\Model\UnsuccessfulReasonModel | UnsuccessfulReason object that needs to be created

try {
    $result = $api_instance->createUnsuccessfulReason($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsuccessfulreasonApi->createUnsuccessfulReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UnsuccessfulReasonModel**](../Model/UnsuccessfulReasonModel.md)| UnsuccessfulReason object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse54**](../Model/ApiResponse54.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUnsuccessfulReason**
> \BumbalClient\Model\ApiResponse52 deleteUnsuccessfulReason($unsuccessful_reason_id)

Delete a UnsuccessfulReason entry

Delete a Metadata entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UnsuccessfulreasonApi();
$unsuccessful_reason_id = 789; // int | ID of UnsuccessfulReason to delete

try {
    $result = $api_instance->deleteUnsuccessfulReason($unsuccessful_reason_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsuccessfulreasonApi->deleteUnsuccessfulReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsuccessful_reason_id** | **int**| ID of UnsuccessfulReason to delete |

### Return type

[**\BumbalClient\Model\ApiResponse52**](../Model/ApiResponse52.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListUnsuccessfulReason**
> \BumbalClient\Model\UnsuccessfulReasonListResponse retrieveListUnsuccessfulReason($arguments)

Retrieve List of UnsuccessfulReason

Retrieve List of UnsuccessfulReason

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UnsuccessfulreasonApi();
$arguments = new \BumbalClient\Model\UnsuccessfulReasonRetrieveListArguments(); // \BumbalClient\Model\UnsuccessfulReasonRetrieveListArguments | UnsuccessfulReason RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUnsuccessfulReason($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsuccessfulreasonApi->retrieveListUnsuccessfulReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UnsuccessfulReasonRetrieveListArguments**](../Model/UnsuccessfulReasonRetrieveListArguments.md)| UnsuccessfulReason RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UnsuccessfulReasonListResponse**](../Model/UnsuccessfulReasonListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveUnsuccessfulReason**
> \BumbalClient\Model\UnsuccessfulReasonModel retrieveUnsuccessfulReason($unsuccessful_reason_id, $include_object_type_name, $include_record_info)

Retrieve a UnsuccessfulReason

Retrieve an UnsuccessfulReason

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UnsuccessfulreasonApi();
$unsuccessful_reason_id = 789; // int | ID of UnsuccessfulReason to retrieve
$include_object_type_name = false; // bool | Show the name of the object type
$include_record_info = false; // bool | Show the record info

try {
    $result = $api_instance->retrieveUnsuccessfulReason($unsuccessful_reason_id, $include_object_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsuccessfulreasonApi->retrieveUnsuccessfulReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsuccessful_reason_id** | **int**| ID of UnsuccessfulReason to retrieve |
 **include_object_type_name** | **bool**| Show the name of the object type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\UnsuccessfulReasonModel**](../Model/UnsuccessfulReasonModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUnsuccessfulReason**
> \BumbalClient\Model\ApiResponse51 updateUnsuccessfulReason($unsuccessful_reason_id, $body)

Update a specific UnsuccessfulReason object

Update a specific UnsuccessfulReason object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UnsuccessfulreasonApi();
$unsuccessful_reason_id = 789; // int | ID of the UnsuccessfulReason object to update
$body = new \BumbalClient\Model\UnsuccessfulReasonModel(); // \BumbalClient\Model\UnsuccessfulReasonModel | UnsuccessfulReason object that needs to be updated

try {
    $result = $api_instance->updateUnsuccessfulReason($unsuccessful_reason_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnsuccessfulreasonApi->updateUnsuccessfulReason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unsuccessful_reason_id** | **int**| ID of the UnsuccessfulReason object to update |
 **body** | [**\BumbalClient\Model\UnsuccessfulReasonModel**](../Model/UnsuccessfulReasonModel.md)| UnsuccessfulReason object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse51**](../Model/ApiResponse51.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

