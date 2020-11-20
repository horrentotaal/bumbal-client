# BumbalClient\PauseApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPause**](PauseApi.md#createPause) | **POST** /pause | Add a new Pause
[**deletePause**](PauseApi.md#deletePause) | **DELETE** /pause/{pauseId} | Delete a Pause
[**retrieveListPause**](PauseApi.md#retrieveListPause) | **PUT** /pause | Retrieve List of Pauses
[**retrievePause**](PauseApi.md#retrievePause) | **GET** /pause/{pauseId} | Retrieve a Pause
[**setPause**](PauseApi.md#setPause) | **POST** /pause/set | Set (create or update) a Pause
[**updatePause**](PauseApi.md#updatePause) | **PUT** /pause/{pauseId} | Update a Pause


# **createPause**
> \BumbalClient\Model\ApiResponse createPause($body)

Add a new Pause

Add a new Pause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$body = new \BumbalClient\Model\PauseModel(); // \BumbalClient\Model\PauseModel | Pause object that needs to be created

try {
    $result = $api_instance->createPause($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->createPause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PauseModel**](../Model/PauseModel.md)| Pause object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePause**
> \BumbalClient\Model\ApiResponse deletePause($pause_id)

Delete a Pause

Delete a Pause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$pause_id = 789; // int | ID of pause to delete

try {
    $result = $api_instance->deletePause($pause_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->deletePause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pause_id** | **int**| ID of pause to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPause**
> \BumbalClient\Model\PauseListResponse retrieveListPause($arguments)

Retrieve List of Pauses

Retrieve List of Pauses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$arguments = new \BumbalClient\Model\PauseRetrieveListArguments(); // \BumbalClient\Model\PauseRetrieveListArguments | Pause RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPause($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->retrieveListPause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PauseRetrieveListArguments**](../Model/PauseRetrieveListArguments.md)| Pause RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PauseListResponse**](../Model/PauseListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePause**
> \BumbalClient\Model\PauseModel retrievePause($pause_id)

Retrieve a Pause

Retrieve an Pause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$pause_id = 789; // int | ID of pause to retrieve

try {
    $result = $api_instance->retrievePause($pause_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->retrievePause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pause_id** | **int**| ID of pause to retrieve |

### Return type

[**\BumbalClient\Model\PauseModel**](../Model/PauseModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPause**
> \BumbalClient\Model\ApiResponse setPause($body)

Set (create or update) a Pause

Set (create or update) a Pause. If id or links are set in the data, and a corresponding pause is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$body = new \BumbalClient\Model\PauseModel(); // \BumbalClient\Model\PauseModel | Pause object

try {
    $result = $api_instance->setPause($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->setPause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PauseModel**](../Model/PauseModel.md)| Pause object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePause**
> \BumbalClient\Model\ApiResponse updatePause($pause_id)

Update a Pause

Update an Pause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PauseApi();
$pause_id = 789; // int | ID of pause to update

try {
    $result = $api_instance->updatePause($pause_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PauseApi->updatePause: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pause_id** | **int**| ID of pause to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

