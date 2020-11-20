# BumbalClient\NotificationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNotification**](NotificationApi.md#createNotification) | **POST** /notification | Add a new Notification
[**deleteNotification**](NotificationApi.md#deleteNotification) | **DELETE** /notification/{notificationId} | Delete an Notification entry
[**retrieveListNotification**](NotificationApi.md#retrieveListNotification) | **PUT** /notification | Retrieve List of Notification
[**retrieveNotification**](NotificationApi.md#retrieveNotification) | **GET** /notification/{notificationId} | Retrieve a Notification
[**setNotification**](NotificationApi.md#setNotification) | **POST** /notification/set | Set (create or update) a notification
[**updateNotification**](NotificationApi.md#updateNotification) | **PUT** /notification/{notificationId} | Update a specific Notification object


# **createNotification**
> \BumbalClient\Model\ApiResponse21 createNotification($body)

Add a new Notification

Add a new Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$body = new \BumbalClient\Model\NotificationModel(); // \BumbalClient\Model\NotificationModel | Notification object that needs to be created

try {
    $result = $api_instance->createNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->createNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\NotificationModel**](../Model/NotificationModel.md)| Notification object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse21**](../Model/ApiResponse21.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNotification**
> \BumbalClient\Model\ApiResponse18 deleteNotification($notification_id)

Delete an Notification entry

Delete an Notification entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$notification_id = 789; // int | ID of Notification to delete

try {
    $result = $api_instance->deleteNotification($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->deleteNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of Notification to delete |

### Return type

[**\BumbalClient\Model\ApiResponse18**](../Model/ApiResponse18.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListNotification**
> \BumbalClient\Model\NotificationListResponse retrieveListNotification($arguments)

Retrieve List of Notification

Retrieve List of Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$arguments = new \BumbalClient\Model\NotificationRetrieveListArguments(); // \BumbalClient\Model\NotificationRetrieveListArguments | Notification RetrieveList Arguments

try {
    $result = $api_instance->retrieveListNotification($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->retrieveListNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\NotificationRetrieveListArguments**](../Model/NotificationRetrieveListArguments.md)| Notification RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\NotificationListResponse**](../Model/NotificationListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNotification**
> \BumbalClient\Model\NotificationModel retrieveNotification($notification_id, $include_category_type_name, $include_record_info)

Retrieve a Notification

Retrieve an Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$notification_id = 789; // int | ID of Notification to retrieve
$include_category_type_name = false; // bool | Show the name of the category type
$include_record_info = false; // bool | Show the record info

try {
    $result = $api_instance->retrieveNotification($notification_id, $include_category_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->retrieveNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of Notification to retrieve |
 **include_category_type_name** | **bool**| Show the name of the category type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\NotificationModel**](../Model/NotificationModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNotification**
> \BumbalClient\Model\ApiResponse setNotification($body)

Set (create or update) a notification

Set (create or update) a notification. If id or links are set in the data, and a corresponding notification is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$body = new \BumbalClient\Model\NotificationModel(); // \BumbalClient\Model\NotificationModel | Notification object

try {
    $result = $api_instance->setNotification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->setNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\NotificationModel**](../Model/NotificationModel.md)| Notification object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotification**
> \BumbalClient\Model\ApiResponse17 updateNotification($notification_id, $body)

Update a specific Notification object

Update a specific Notification object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationApi();
$notification_id = 789; // int | ID of the Notification object to update
$body = new \BumbalClient\Model\NotificationModel(); // \BumbalClient\Model\NotificationModel | Notification object that needs to be updated

try {
    $result = $api_instance->updateNotification($notification_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of the Notification object to update |
 **body** | [**\BumbalClient\Model\NotificationModel**](../Model/NotificationModel.md)| Notification object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse17**](../Model/ApiResponse17.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

