# BumbalClient\LinkApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLink**](LinkApi.md#deleteLink) | **DELETE** /link/{linkId} | Delete a link
[**updateLink**](LinkApi.md#updateLink) | **PUT** /link/{linkId} | Update a specific link object


# **deleteLink**
> \BumbalClient\Model\ApiResponse deleteLink($driver_id)

Delete a link

Delete a link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\LinkApi();
$driver_id = 789; // int | ID of the link to delete

try {
    $result = $api_instance->deleteLink($driver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **driver_id** | **int**| ID of the link to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \BumbalClient\Model\ApiResponse updateLink($link_id, $body)

Update a specific link object

Update a specific link object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\LinkApi();
$link_id = 789; // int | ID of the link object to update
$body = new \BumbalClient\Model\LinkModel(); // \BumbalClient\Model\LinkModel | Link object that needs to be updated

try {
    $result = $api_instance->updateLink($link_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link_id** | **int**| ID of the link object to update |
 **body** | [**\BumbalClient\Model\LinkModel**](../Model/LinkModel.md)| Link object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

