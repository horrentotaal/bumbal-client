# BumbalClient\PackagelineApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPackageLine**](PackagelineApi.md#createPackageLine) | **POST** /package-line | Create or update an Package Line
[**deletePackageLine**](PackagelineApi.md#deletePackageLine) | **DELETE** /package-line/{packageLineId} | Delete an package-line
[**retrieveListPackageLine**](PackagelineApi.md#retrieveListPackageLine) | **PUT** /package-line | Retrieve List of PackageLines
[**retrievePackageLine**](PackagelineApi.md#retrievePackageLine) | **GET** /package-line/{packageLineId} | Find package-line by ID
[**setPackageLine**](PackagelineApi.md#setPackageLine) | **POST** /package-line/set | Set (create or update) an PackageLine
[**updatePackageLine**](PackagelineApi.md#updatePackageLine) | **PUT** /package-line/update | Update package-lines in bulk


# **createPackageLine**
> \BumbalClient\Model\ApiResponse createPackageLine($body)

Create or update an Package Line

Create or update an PackageLine. If id or links are set in the data, and a corresponding package-line    *     is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$body = new \BumbalClient\Model\PackageLineModel(); // \BumbalClient\Model\PackageLineModel | PackageLine model

try {
    $result = $api_instance->createPackageLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->createPackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PackageLineModel**](../Model/PackageLineModel.md)| PackageLine model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackageLine**
> \BumbalClient\Model\ApiResponse deletePackageLine($package_line_id)

Delete an package-line

Delete an package-line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$package_line_id = 789; // int | ID of the package-line to delete

try {
    $result = $api_instance->deletePackageLine($package_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->deletePackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_line_id** | **int**| ID of the package-line to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPackageLine**
> \BumbalClient\Model\PackageLineListResponse retrieveListPackageLine($arguments)

Retrieve List of PackageLines

Retrieve List of PackageLines

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$arguments = new \BumbalClient\Model\PackageLineRetrieveListArguments(); // \BumbalClient\Model\PackageLineRetrieveListArguments | PackageLine RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPackageLine($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->retrieveListPackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PackageLineRetrieveListArguments**](../Model/PackageLineRetrieveListArguments.md)| PackageLine RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PackageLineListResponse**](../Model/PackageLineListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePackageLine**
> \BumbalClient\Model\PackageLineModel retrievePackageLine($package_line_id, $include_package_line_status, $include_package_line_type_name, $include_package_line_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_communication, $include_package_line_links, $include_package_lines_info, $include_package_line_files, $include_package_line_files_meta_data)

Find package-line by ID

Returns a single package-line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$package_line_id = 789; // int | ID of package-line to return
$include_package_line_status = true; // bool | Show the text value of the status
$include_package_line_type_name = true; // bool | Show the text value of the package-line type
$include_package_line_meta_data = true; // bool | Include meta data connected to this PackageLine
$include_address_object = true; // bool | Include address data
$include_time_slots = true; // bool | Include TimeSlots
$include_time_slot_tags = true; // bool | Include tags from TimeSlots
$include_route_info = true; // bool | Include route data
$include_driver_info = true; // bool | Include driver data
$include_communication = true; // bool | Include Communication Settings
$include_package_line_links = true; // bool | Include Link Data
$include_package_lines_info = true; // bool | Include PackageLines
$include_package_line_files = true; // bool | Include files
$include_package_line_files_meta_data = true; // bool | Include files meta data

try {
    $result = $api_instance->retrievePackageLine($package_line_id, $include_package_line_status, $include_package_line_type_name, $include_package_line_meta_data, $include_address_object, $include_time_slots, $include_time_slot_tags, $include_route_info, $include_driver_info, $include_communication, $include_package_line_links, $include_package_lines_info, $include_package_line_files, $include_package_line_files_meta_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->retrievePackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_line_id** | **int**| ID of package-line to return |
 **include_package_line_status** | **bool**| Show the text value of the status | [default to true]
 **include_package_line_type_name** | **bool**| Show the text value of the package-line type | [default to true]
 **include_package_line_meta_data** | **bool**| Include meta data connected to this PackageLine | [default to true]
 **include_address_object** | **bool**| Include address data | [default to true]
 **include_time_slots** | **bool**| Include TimeSlots | [default to true]
 **include_time_slot_tags** | **bool**| Include tags from TimeSlots | [default to true]
 **include_route_info** | **bool**| Include route data | [default to true]
 **include_driver_info** | **bool**| Include driver data | [default to true]
 **include_communication** | **bool**| Include Communication Settings | [default to true]
 **include_package_line_links** | **bool**| Include Link Data | [default to true]
 **include_package_lines_info** | **bool**| Include PackageLines | [default to true]
 **include_package_line_files** | **bool**| Include files | [default to true]
 **include_package_line_files_meta_data** | **bool**| Include files meta data | [default to true]

### Return type

[**\BumbalClient\Model\PackageLineModel**](../Model/PackageLineModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPackageLine**
> \BumbalClient\Model\ApiResponse setPackageLine($body)

Set (create or update) an PackageLine

Set (create or update) an PackageLine. If id or links are set in the data, and a corresponding package-line is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$body = new \BumbalClient\Model\PackageLineModel(); // \BumbalClient\Model\PackageLineModel | PackageLine model

try {
    $result = $api_instance->setPackageLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->setPackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PackageLineModel**](../Model/PackageLineModel.md)| PackageLine model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackageLine**
> \BumbalClient\Model\ApiResponse updatePackageLine($body)

Update package-lines in bulk

Update package-lines in bulk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagelineApi();
$body = new \BumbalClient\Model\PackageLineUpdateArguments(); // \BumbalClient\Model\PackageLineUpdateArguments | PackageLine Update object that contains all information about this update

try {
    $result = $api_instance->updatePackageLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagelineApi->updatePackageLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PackageLineUpdateArguments**](../Model/PackageLineUpdateArguments.md)| PackageLine Update object that contains all information about this update | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

