# BumbalClient\UsernotificationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListUserNotification**](UsernotificationApi.md#retrieveListUserNotification) | **PUT** /user/notification | Retrieve List of UserNotification
[**setUserNotification**](UsernotificationApi.md#setUserNotification) | **POST** /users/notification | Create a new UserNotification or update an existing one


# **retrieveListUserNotification**
> \BumbalClient\Model\UserNotificationListResponse retrieveListUserNotification($arguments)

Retrieve List of UserNotification

Retrieve List of UserNotification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UsernotificationApi();
$arguments = new \BumbalClient\Model\UserNotificationRetrieveListArguments(); // \BumbalClient\Model\UserNotificationRetrieveListArguments | UserNotification RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUserNotification($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsernotificationApi->retrieveListUserNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UserNotificationRetrieveListArguments**](../Model/UserNotificationRetrieveListArguments.md)| UserNotification RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UserNotificationListResponse**](../Model/UserNotificationListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserNotification**
> \BumbalClient\Model\ApiResponse63 setUserNotification($body)

Create a new UserNotification or update an existing one

Set (create or update) a user notification. If id or links are set in the data, and a corresponding user notification is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UsernotificationApi();
$body = new \BumbalClient\Model\UserNotificationModel(); // \BumbalClient\Model\UserNotificationModel | UserNotification object that needs to be set

try {
    $result = $api_instance->setUserNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsernotificationApi->setUserNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\UserNotificationModel**](../Model/UserNotificationModel.md)| UserNotification object that needs to be set | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse63**](../Model/ApiResponse63.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

