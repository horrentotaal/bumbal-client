# BumbalClient\ActivityApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteActivity**](ActivityApi.md#deleteActivity) | **DELETE** /activity/{activityId} | Delete an activity
[**retrieveActivity**](ActivityApi.md#retrieveActivity) | **GET** /activity/{activityId} | Find activity by ID
[**retrieveListActivity**](ActivityApi.md#retrieveListActivity) | **PUT** /activity | Retrieve List of Activities
[**setActivity**](ActivityApi.md#setActivity) | **POST** /activity/set | Set (create or update) an Activity
[**unsuccessful**](ActivityApi.md#unsuccessful) | **POST** /activity/unsuccessful | Report an unsuccessful activity
[**updateActivity**](ActivityApi.md#updateActivity) | **PUT** /activity/{activityId} | Update a activity


# **deleteActivity**
> \BumbalClient\Model\ApiResponse deleteActivity($activity_id)

Delete an activity

Delete an activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of the activity to delete

try {
    $result = $api_instance->deleteActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveActivity**
> \BumbalClient\Model\ActivityModel retrieveActivity($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_route_info, $include_route, $include_package_lines, $include_package_lines_info, $include_driver_info, $include_communication, $include_communication_object, $include_activity_links, $include_activity_files, $include_activity_files_meta_data, $include_assignment_nr, $include_assignment, $include_activity_tags, $include_tag_type_name, $include_activity_record_info, $include_activity_notes, $include_activity_note_tags, $include_depot_address_object, $include_capacity_object, $include_zones, $include_brand, $include_brand_colours, $include_brand_files, $include_relations)

Find activity by ID

Returns a single activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to return
$include_activity_status = true; // bool | Show the text value of the status
$include_activity_type_name = true; // bool | Show the text value of the activity type
$include_activity_meta_data = true; // bool | Include meta data connected to this Activity
$include_address_object = true; // bool | Include address data
$include_time_slots = true; // bool | Include TimeSlots
$include_route_info = true; // bool | Include route data
$include_route = true; // bool | Include Route
$include_package_lines = true; // bool | Include package lines
$include_package_lines_info = true; // bool | Include PackageLines
$include_driver_info = true; // bool | Include driver data
$include_communication = true; // bool | Include Communication Settings
$include_communication_object = true; // bool | Include Communication Object
$include_activity_links = true; // bool | Include Link Data
$include_activity_files = true; // bool | Include files
$include_activity_files_meta_data = true; // bool | Include files meta data
$include_assignment_nr = true; // bool | Include Assignment Nr
$include_assignment = true; // bool | Include Assignment
$include_activity_tags = true; // bool | Include Activity Tags
$include_tag_type_name = true; // bool | Include Activity Tag type names
$include_activity_record_info = true; // bool | Include Activity Info
$include_activity_notes = true; // bool | Include Activity Notes
$include_activity_note_tags = true; // bool | Include Activity Note Tags
$include_depot_address_object = true; // bool | Include Depot Address Object
$include_capacity_object = true; // bool | Include Capacity Object
$include_zones = true; // bool | Include Zones
$include_brand = true; // bool | Include brand
$include_brand_colours = true; // bool | Include brand colours
$include_brand_files = true; // bool | Include brand files
$include_relations = true; // bool | Include activity_before and activity_after

try {
    $result = $api_instance->retrieveActivity($activity_id, $include_activity_status, $include_activity_type_name, $include_activity_meta_data, $include_address_object, $include_time_slots, $include_route_info, $include_route, $include_package_lines, $include_package_lines_info, $include_driver_info, $include_communication, $include_communication_object, $include_activity_links, $include_activity_files, $include_activity_files_meta_data, $include_assignment_nr, $include_assignment, $include_activity_tags, $include_tag_type_name, $include_activity_record_info, $include_activity_notes, $include_activity_note_tags, $include_depot_address_object, $include_capacity_object, $include_zones, $include_brand, $include_brand_colours, $include_brand_files, $include_relations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to return |
 **include_activity_status** | **bool**| Show the text value of the status | [default to true]
 **include_activity_type_name** | **bool**| Show the text value of the activity type | [default to true]
 **include_activity_meta_data** | **bool**| Include meta data connected to this Activity | [default to true]
 **include_address_object** | **bool**| Include address data | [default to true]
 **include_time_slots** | **bool**| Include TimeSlots | [default to true]
 **include_route_info** | **bool**| Include route data | [default to true]
 **include_route** | **bool**| Include Route | [default to true]
 **include_package_lines** | **bool**| Include package lines | [default to true]
 **include_package_lines_info** | **bool**| Include PackageLines | [default to true]
 **include_driver_info** | **bool**| Include driver data | [default to true]
 **include_communication** | **bool**| Include Communication Settings | [default to true]
 **include_communication_object** | **bool**| Include Communication Object | [default to true]
 **include_activity_links** | **bool**| Include Link Data | [default to true]
 **include_activity_files** | **bool**| Include files | [default to true]
 **include_activity_files_meta_data** | **bool**| Include files meta data | [default to true]
 **include_assignment_nr** | **bool**| Include Assignment Nr | [default to true]
 **include_assignment** | **bool**| Include Assignment | [default to true]
 **include_activity_tags** | **bool**| Include Activity Tags | [default to true]
 **include_tag_type_name** | **bool**| Include Activity Tag type names | [default to true]
 **include_activity_record_info** | **bool**| Include Activity Info | [default to true]
 **include_activity_notes** | **bool**| Include Activity Notes | [default to true]
 **include_activity_note_tags** | **bool**| Include Activity Note Tags | [default to true]
 **include_depot_address_object** | **bool**| Include Depot Address Object | [default to true]
 **include_capacity_object** | **bool**| Include Capacity Object | [default to true]
 **include_zones** | **bool**| Include Zones | [default to true]
 **include_brand** | **bool**| Include brand | [default to true]
 **include_brand_colours** | **bool**| Include brand colours | [default to true]
 **include_brand_files** | **bool**| Include brand files | [default to true]
 **include_relations** | **bool**| Include activity_before and activity_after | [default to true]

### Return type

[**\BumbalClient\Model\ActivityModel**](../Model/ActivityModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListActivity**
> \BumbalClient\Model\ActivityListResponse retrieveListActivity($arguments)

Retrieve List of Activities

Retrieve List of Activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$arguments = new \BumbalClient\Model\ActivityRetrieveListArguments(); // \BumbalClient\Model\ActivityRetrieveListArguments | Activity RetrieveList Arguments

try {
    $result = $api_instance->retrieveListActivity($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->retrieveListActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ActivityRetrieveListArguments**](../Model/ActivityRetrieveListArguments.md)| Activity RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ActivityListResponse**](../Model/ActivityListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActivity**
> \BumbalClient\Model\ApiResponse setActivity($body)

Set (create or update) an Activity

Set (create or update) an Activity. If id or links are set in the data, and a corresponding activity is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$body = new \BumbalClient\Model\ActivityModel(); // \BumbalClient\Model\ActivityModel | Activity object

try {
    $result = $api_instance->setActivity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->setActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ActivityModel**](../Model/ActivityModel.md)| Activity object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsuccessful**
> \BumbalClient\Model\UnsuccessfulResponseModel unsuccessful($arguments)

Report an unsuccessful activity

Report an unsuccessful activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$arguments = new \BumbalClient\Model\UnsuccessfulModel(); // \BumbalClient\Model\UnsuccessfulModel | Request Arguments

try {
    $result = $api_instance->unsuccessful($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->unsuccessful: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UnsuccessfulModel**](../Model/UnsuccessfulModel.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\UnsuccessfulResponseModel**](../Model/UnsuccessfulResponseModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateActivity**
> \BumbalClient\Model\ApiResponse updateActivity($activity_id, $body)

Update a activity

Update a activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of activity to update
$body = new \BumbalClient\Model\ActivityModel(); // \BumbalClient\Model\ActivityModel | Activity object that needs to be updated

try {
    $result = $api_instance->updateActivity($activity_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->updateActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of activity to update |
 **body** | [**\BumbalClient\Model\ActivityModel**](../Model/ActivityModel.md)| Activity object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

