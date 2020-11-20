# BumbalClient\TagtypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTagType**](TagtypeApi.md#createTagType) | **POST** /tag-type | Add a new Tag type
[**deleteTagType**](TagtypeApi.md#deleteTagType) | **DELETE** /tag-type/{tagTypeId} | Delete a Tag type
[**retrieveListTagType**](TagtypeApi.md#retrieveListTagType) | **PUT** /tag-type | Retrieve List of Tag types
[**retrieveTagType**](TagtypeApi.md#retrieveTagType) | **GET** /tag-type/{tagTypeId} | Retrieve a Tag type
[**setTagType**](TagtypeApi.md#setTagType) | **POST** /tag-type/set | Set (create or update) Tag type
[**updateTagType**](TagtypeApi.md#updateTagType) | **PUT** /tag-type/{tagTypeId} | Update a Tag type


# **createTagType**
> \BumbalClient\Model\ApiResponse createTagType($body)

Add a new Tag type

Add a new Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$body = new \BumbalClient\Model\TagTypeModel(); // \BumbalClient\Model\TagTypeModel | Tag type object that needs to be created

try {
    $result = $api_instance->createTagType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->createTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TagTypeModel**](../Model/TagTypeModel.md)| Tag type object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagType**
> \BumbalClient\Model\ApiResponse deleteTagType($tag_type_id)

Delete a Tag type

Delete a Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$tag_type_id = 789; // int | ID of tag type to delete

try {
    $result = $api_instance->deleteTagType($tag_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->deleteTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTagType**
> \BumbalClient\Model\TagTypeModel[] retrieveListTagType($arguments)

Retrieve List of Tag types

Retrieve List of Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$arguments = new \BumbalClient\Model\TagTypeRetrieveListArguments(); // \BumbalClient\Model\TagTypeRetrieveListArguments | Tag types RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTagType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->retrieveListTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TagTypeRetrieveListArguments**](../Model/TagTypeRetrieveListArguments.md)| Tag types RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\TagTypeModel[]**](../Model/TagTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTagType**
> \BumbalClient\Model\TagTypeModel retrieveTagType($tag_type_id, $include_object_types)

Retrieve a Tag type

Retrieve an Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$tag_type_id = 789; // int | ID of tag type to retrieve
$include_object_types = true; // bool | Show the text value of the status

try {
    $result = $api_instance->retrieveTagType($tag_type_id, $include_object_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->retrieveTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to retrieve |
 **include_object_types** | **bool**| Show the text value of the status | [optional]

### Return type

[**\BumbalClient\Model\TagTypeModel**](../Model/TagTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTagType**
> \BumbalClient\Model\ApiResponse setTagType($body)

Set (create or update) Tag type

Set (create or update) Tag type. If a tag type with same name is found in Bumbal, the tag type id is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$body = new \BumbalClient\Model\TagTypeModel(); // \BumbalClient\Model\TagTypeModel | tag type data

try {
    $result = $api_instance->setTagType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->setTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TagTypeModel**](../Model/TagTypeModel.md)| tag type data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagType**
> \BumbalClient\Model\ApiResponse updateTagType($tag_type_id)

Update a Tag type

Update a Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TagtypeApi();
$tag_type_id = 789; // int | ID of tag type to update

try {
    $result = $api_instance->updateTagType($tag_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagtypeApi->updateTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

