# BumbalClient\NotificationcategoryApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNotificationCategory**](NotificationcategoryApi.md#createNotificationCategory) | **POST** /notification-category | Add a new NotificationCategory
[**deleteNotificationCategory**](NotificationcategoryApi.md#deleteNotificationCategory) | **DELETE** /notification-category/{notification-categoryId} | Delete an NotificationCategory entry
[**retrieveListNotificationCategory**](NotificationcategoryApi.md#retrieveListNotificationCategory) | **PUT** /notification-category | Retrieve List of NotificationCategory
[**retrieveNotificationCategory**](NotificationcategoryApi.md#retrieveNotificationCategory) | **GET** /notification-category/{notification-categoryId} | Retrieve a NotificationCategory
[**setNotificationCategory**](NotificationcategoryApi.md#setNotificationCategory) | **POST** /notification-category/set | Create a new NotificationCategory or update an existing one
[**updateNotificationCategory**](NotificationcategoryApi.md#updateNotificationCategory) | **PUT** /notification-category/{notification-categoryId} | Update a specific NotificationCategory object


# **createNotificationCategory**
> \BumbalClient\Model\ApiResponse12 createNotificationCategory($body)

Add a new NotificationCategory

Add a new NotificationCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$body = new \BumbalClient\Model\NotificationCategoryModel(); // \BumbalClient\Model\NotificationCategoryModel | NotificationCategory object that needs to be created

try {
    $result = $api_instance->createNotificationCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->createNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\NotificationCategoryModel**](../Model/NotificationCategoryModel.md)| NotificationCategory object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse12**](../Model/ApiResponse12.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNotificationCategory**
> \BumbalClient\Model\ApiResponse10 deleteNotificationCategory($notification_category_id)

Delete an NotificationCategory entry

Delete an NotificationCategory entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$notification_category_id = 789; // int | ID of NotificationCategory to delete

try {
    $result = $api_instance->deleteNotificationCategory($notification_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->deleteNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_category_id** | **int**| ID of NotificationCategory to delete |

### Return type

[**\BumbalClient\Model\ApiResponse10**](../Model/ApiResponse10.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListNotificationCategory**
> \BumbalClient\Model\NotificationCategoryListResponse retrieveListNotificationCategory($arguments)

Retrieve List of NotificationCategory

Retrieve List of NotificationCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$arguments = new \BumbalClient\Model\NotificationCategoryRetrieveListArguments(); // \BumbalClient\Model\NotificationCategoryRetrieveListArguments | NotificationCategory RetrieveList Arguments

try {
    $result = $api_instance->retrieveListNotificationCategory($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->retrieveListNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\NotificationCategoryRetrieveListArguments**](../Model/NotificationCategoryRetrieveListArguments.md)| NotificationCategory RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\NotificationCategoryListResponse**](../Model/NotificationCategoryListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNotificationCategory**
> \BumbalClient\Model\NotificationCategoryModel retrieveNotificationCategory($notification_category_id, $include_object_type_name, $include_record_info)

Retrieve a NotificationCategory

Retrieve an NotificationCategory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$notification_category_id = 789; // int | ID of NotificationCategory to retrieve
$include_object_type_name = false; // bool | Show the name of the object type
$include_record_info = false; // bool | Show the record info

try {
    $result = $api_instance->retrieveNotificationCategory($notification_category_id, $include_object_type_name, $include_record_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->retrieveNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_category_id** | **int**| ID of NotificationCategory to retrieve |
 **include_object_type_name** | **bool**| Show the name of the object type | [optional] [default to false]
 **include_record_info** | **bool**| Show the record info | [optional] [default to false]

### Return type

[**\BumbalClient\Model\NotificationCategoryModel**](../Model/NotificationCategoryModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNotificationCategory**
> \BumbalClient\Model\ApiResponse13 setNotificationCategory($body)

Create a new NotificationCategory or update an existing one

Set (create or update) a notification category. If id or links are set in the data, and a corresponding notification category is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$body = new \BumbalClient\Model\NotificationCategoryModel(); // \BumbalClient\Model\NotificationCategoryModel | NotificationCategory object that needs to be set

try {
    $result = $api_instance->setNotificationCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->setNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\NotificationCategoryModel**](../Model/NotificationCategoryModel.md)| NotificationCategory object that needs to be set | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse13**](../Model/ApiResponse13.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotificationCategory**
> \BumbalClient\Model\ApiResponse9 updateNotificationCategory($notification_category_id, $body)

Update a specific NotificationCategory object

Update a specific NotificationCategory object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\NotificationcategoryApi();
$notification_category_id = 789; // int | ID of the NotificationCategory object to update
$body = new \BumbalClient\Model\NotificationCategoryModel(); // \BumbalClient\Model\NotificationCategoryModel | NotificationCategory object that needs to be updated

try {
    $result = $api_instance->updateNotificationCategory($notification_category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationcategoryApi->updateNotificationCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_category_id** | **int**| ID of the NotificationCategory object to update |
 **body** | [**\BumbalClient\Model\NotificationCategoryModel**](../Model/NotificationCategoryModel.md)| NotificationCategory object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse9**](../Model/ApiResponse9.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

