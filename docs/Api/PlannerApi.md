# BumbalClient\PlannerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitiesToRoute**](PlannerApi.md#addActivitiesToRoute) | **POST** /planner/add-activities-to-route | Add Activities To Route
[**applyPlanning**](PlannerApi.md#applyPlanning) | **POST** /planner/apply-planning | Apply a planning schema
[**autoPlan**](PlannerApi.md#autoPlan) | **POST** /planner/auto-plan | Plan a certain activity in any fitting route
[**autoPlanResult**](PlannerApi.md#autoPlanResult) | **POST** /planner/auto-plan-result | Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
[**changeActivitySequence**](PlannerApi.md#changeActivitySequence) | **POST** /planner/change-activity-sequence | Change Activity Sequence
[**checkAvailability**](PlannerApi.md#checkAvailability) | **POST** /planner/check-availability | check availability in planning for a certain set of activity properties
[**checkAvailabilityResult**](PlannerApi.md#checkAvailabilityResult) | **POST** /planner/check-availability-result | Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
[**lockActivities**](PlannerApi.md#lockActivities) | **POST** /planner/lock-activities | Lock Activities on Route
[**removeActivitiesFromRoute**](PlannerApi.md#removeActivitiesFromRoute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route


# **addActivitiesToRoute**
> \BumbalClient\Model\ApiResponse addActivitiesToRoute()

Add Activities To Route

Add Activities To Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->addActivitiesToRoute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->addActivitiesToRoute: ', $e->getMessage(), PHP_EOL;
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

# **applyPlanning**
> \BumbalClient\Model\ApiResponse applyPlanning($arguments)

Apply a planning schema

Apply a planning schema

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\ApplyPlanningArguments(); // \BumbalClient\Model\ApplyPlanningArguments | Request Arguments

try {
    $result = $api_instance->applyPlanning($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->applyPlanning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ApplyPlanningArguments**](../Model/ApplyPlanningArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlan**
> \BumbalClient\Model\ApiResponse autoPlan($arguments)

Plan a certain activity in any fitting route

Plan a certain activity in any fitting route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AutoPlanArguments(); // \BumbalClient\Model\AutoPlanArguments | Request Arguments

try {
    $result = $api_instance->autoPlan($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->autoPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AutoPlanArguments**](../Model/AutoPlanArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlanResult**
> \BumbalClient\Model\ApiResponse autoPlanResult($arguments)

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AutoPlanArguments(); // \BumbalClient\Model\AutoPlanArguments | Request Arguments

try {
    $result = $api_instance->autoPlanResult($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->autoPlanResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AutoPlanArguments**](../Model/AutoPlanArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeActivitySequence**
> \BumbalClient\Model\ApiResponse changeActivitySequence()

Change Activity Sequence

Change Activity Sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->changeActivitySequence();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->changeActivitySequence: ', $e->getMessage(), PHP_EOL;
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

# **checkAvailability**
> \BumbalClient\Model\ApiResponse checkAvailability($arguments)

check availability in planning for a certain set of activity properties

check availability in planning for a certain set of activity properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->checkAvailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAvailabilityResult**
> \BumbalClient\Model\ApiResponse checkAvailabilityResult($arguments)

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->checkAvailabilityResult($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->checkAvailabilityResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lockActivities**
> \BumbalClient\Model\ApiResponse lockActivities()

Lock Activities on Route

Lock Activities on Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->lockActivities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->lockActivities: ', $e->getMessage(), PHP_EOL;
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

# **removeActivitiesFromRoute**
> \BumbalClient\Model\ApiResponse removeActivitiesFromRoute($arguments)

Remove Activities From Route

Remove Activities From Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\RemoveActivitiesFromRouteArguments(); // \BumbalClient\Model\RemoveActivitiesFromRouteArguments | Request Arguments

try {
    $result = $api_instance->removeActivitiesFromRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->removeActivitiesFromRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\RemoveActivitiesFromRouteArguments**](../Model/RemoveActivitiesFromRouteArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

