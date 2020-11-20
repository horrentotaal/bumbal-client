# BumbalClient\TrailerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTrailer**](TrailerApi.md#createTrailer) | **POST** /trailer | Add a trailer
[**deleteTrailer**](TrailerApi.md#deleteTrailer) | **DELETE** /trailer/{trailerId} | Delete an trailer
[**retrieveListTrailer**](TrailerApi.md#retrieveListTrailer) | **PUT** /trailer | Retrieve List of Trailers
[**retrieveTrailer**](TrailerApi.md#retrieveTrailer) | **GET** /trailer/{trailerId} | Find trailer by ID
[**setTrailer**](TrailerApi.md#setTrailer) | **POST** /trailer/set | Set (create or update) a trailer
[**updateTrailer**](TrailerApi.md#updateTrailer) | **PUT** /trailer/{trailerId} | Update a trailer


# **createTrailer**
> \BumbalClient\Model\ApiResponse createTrailer($body)

Add a trailer

Add a trailer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$body = new \BumbalClient\Model\TrailerModel(); // \BumbalClient\Model\TrailerModel | Trailer object that needs to be created

try {
    $result = $api_instance->createTrailer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->createTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TrailerModel**](../Model/TrailerModel.md)| Trailer object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTrailer**
> \BumbalClient\Model\ApiResponse deleteTrailer($trailer_id)

Delete an trailer

Delete an trailer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$trailer_id = 789; // int | ID of the trailer to delete

try {
    $result = $api_instance->deleteTrailer($trailer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->deleteTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trailer_id** | **int**| ID of the trailer to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTrailer**
> \BumbalClient\Model\TrailerModel[] retrieveListTrailer($arguments)

Retrieve List of Trailers

Retrieve List of Trailers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$arguments = new \BumbalClient\Model\TrailerRetrieveListArguments(); // \BumbalClient\Model\TrailerRetrieveListArguments | Trailer RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTrailer($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->retrieveListTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TrailerRetrieveListArguments**](../Model/TrailerRetrieveListArguments.md)| Trailer RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\TrailerModel[]**](../Model/TrailerModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTrailer**
> \BumbalClient\Model\TrailerModel retrieveTrailer($trailer_id, $include_trailer_tags, $include_updated_by)

Find trailer by ID

Returns a single trailer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$trailer_id = 789; // int | ID of trailer to return
$include_trailer_tags = true; // bool | a list of tags bound to trailer
$include_updated_by = true; // bool | include updated_by_name

try {
    $result = $api_instance->retrieveTrailer($trailer_id, $include_trailer_tags, $include_updated_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->retrieveTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trailer_id** | **int**| ID of trailer to return |
 **include_trailer_tags** | **bool**| a list of tags bound to trailer | [default to true]
 **include_updated_by** | **bool**| include updated_by_name | [default to true]

### Return type

[**\BumbalClient\Model\TrailerModel**](../Model/TrailerModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTrailer**
> \BumbalClient\Model\ApiResponse setTrailer($body)

Set (create or update) a trailer

Set (create or update) a trailer. If id or links are set in the data, and a corresponding trailer is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$body = new \BumbalClient\Model\TrailerModel(); // \BumbalClient\Model\TrailerModel | Trailer object

try {
    $result = $api_instance->setTrailer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->setTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TrailerModel**](../Model/TrailerModel.md)| Trailer object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTrailer**
> \BumbalClient\Model\ApiResponse updateTrailer($trailer_id, $body)

Update a trailer

Update a trailer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TrailerApi();
$trailer_id = 789; // int | ID of trailer to update
$body = new \BumbalClient\Model\TrailerModel(); // \BumbalClient\Model\TrailerModel | Trailer object that needs to be updated

try {
    $result = $api_instance->updateTrailer($trailer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrailerApi->updateTrailer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trailer_id** | **int**| ID of trailer to update |
 **body** | [**\BumbalClient\Model\TrailerModel**](../Model/TrailerModel.md)| Trailer object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

