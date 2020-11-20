# BumbalClient\InstantmessagingApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**instantMessagingList**](InstantmessagingApi.md#instantMessagingList) | **POST** /instant-messaging/list | List conversations
[**instantMessagingPost**](InstantmessagingApi.md#instantMessagingPost) | **POST** /instant-messaging/post | Post a message to some one
[**instantMessagingRetrieveConversation**](InstantmessagingApi.md#instantMessagingRetrieveConversation) | **POST** /instant-messaging/retrieve-conversation | Retrieve Conversation


# **instantMessagingList**
> \BumbalClient\Model\ApiResponse instantMessagingList()

List conversations

List conversations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\InstantmessagingApi();

try {
    $result = $api_instance->instantMessagingList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantmessagingApi->instantMessagingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instantMessagingPost**
> \BumbalClient\Model\ApiResponse instantMessagingPost()

Post a message to some one

Post a message to some one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\InstantmessagingApi();

try {
    $result = $api_instance->instantMessagingPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantmessagingApi->instantMessagingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **instantMessagingRetrieveConversation**
> \BumbalClient\Model\ApiResponse instantMessagingRetrieveConversation()

Retrieve Conversation

Retrieve Conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\InstantmessagingApi();

try {
    $result = $api_instance->instantMessagingRetrieveConversation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantmessagingApi->instantMessagingRetrieveConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

