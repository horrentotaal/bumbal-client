# BumbalClient\PackagetypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPackageType**](PackagetypeApi.md#createPackageType) | **POST** /package-type | Create or update a Package Line
[**deletePackageType**](PackagetypeApi.md#deletePackageType) | **DELETE** /package-type/{packageTypeId} | Delete an package-type
[**retrieveListPackageType**](PackagetypeApi.md#retrieveListPackageType) | **PUT** /package-type | Retrieve List of PackageTypes
[**retrievePackageType**](PackagetypeApi.md#retrievePackageType) | **GET** /package-type/{packageTypeId} | Find package-type by ID
[**setPackageType**](PackagetypeApi.md#setPackageType) | **POST** /package-type/set | Set (create or update) an PackageType
[**updatePackageType**](PackagetypeApi.md#updatePackageType) | **PUT** /package-type/{packageTypeId} | Update a package-type


# **createPackageType**
> \BumbalClient\Model\ApiResponse createPackageType($body)

Create or update a Package Line

Create or update a PackageType. If id or links are set in the data, and a corresponding package-type    *     is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$body = new \BumbalClient\Model\PackageTypeModel(); // \BumbalClient\Model\PackageTypeModel | PackageType model

try {
    $result = $api_instance->createPackageType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->createPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PackageTypeModel**](../Model/PackageTypeModel.md)| PackageType model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePackageType**
> \BumbalClient\Model\ApiResponse deletePackageType($package_type_id)

Delete an package-type

Delete an package-type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$package_type_id = 789; // int | ID of the package-type to delete

try {
    $result = $api_instance->deletePackageType($package_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->deletePackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_type_id** | **int**| ID of the package-type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPackageType**
> \BumbalClient\Model\PackageTypeListResponse retrieveListPackageType($arguments)

Retrieve List of PackageTypes

Retrieve List of PackageTypes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$arguments = new \BumbalClient\Model\PackageTypeRetrieveListArguments(); // \BumbalClient\Model\PackageTypeRetrieveListArguments | PackageType RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPackageType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->retrieveListPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PackageTypeRetrieveListArguments**](../Model/PackageTypeRetrieveListArguments.md)| PackageType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PackageTypeListResponse**](../Model/PackageTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePackageType**
> \BumbalClient\Model\PackageTypeModel retrievePackageType($package_type_id)

Find package-type by ID

Returns a single package-type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$package_type_id = 789; // int | ID of package-type to return

try {
    $result = $api_instance->retrievePackageType($package_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->retrievePackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_type_id** | **int**| ID of package-type to return |

### Return type

[**\BumbalClient\Model\PackageTypeModel**](../Model/PackageTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPackageType**
> \BumbalClient\Model\ApiResponse setPackageType($body)

Set (create or update) an PackageType

Set (create or update) an PackageType. If id or links are set in the data, and a corresponding package-type is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$body = new \BumbalClient\Model\PackageTypeModel(); // \BumbalClient\Model\PackageTypeModel | PackageType model

try {
    $result = $api_instance->setPackageType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->setPackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PackageTypeModel**](../Model/PackageTypeModel.md)| PackageType model | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePackageType**
> \BumbalClient\Model\ApiResponse updatePackageType($package_type_id, $body)

Update a package-type

Update a package-type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PackagetypeApi();
$package_type_id = 789; // int | ID of package-type to update
$body = new \BumbalClient\Model\PackageTypeModel(); // \BumbalClient\Model\PackageTypeModel | PackageType object that needs to be updated

try {
    $result = $api_instance->updatePackageType($package_type_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagetypeApi->updatePackageType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_type_id** | **int**| ID of package-type to update |
 **body** | [**\BumbalClient\Model\PackageTypeModel**](../Model/PackageTypeModel.md)| PackageType object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

