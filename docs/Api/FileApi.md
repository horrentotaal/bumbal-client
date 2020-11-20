# BumbalClient\FileApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFile**](FileApi.md#deleteFile) | **DELETE** /file/{fileId} | Delete an File
[**fileCopy**](FileApi.md#fileCopy) | **POST** /file/copy | Copy File
[**retrieveFile**](FileApi.md#retrieveFile) | **GET** /file/{fileId} | Retrieve a File
[**retrieveListFile**](FileApi.md#retrieveListFile) | **PUT** /file | Retrieve List of Files
[**setFile**](FileApi.md#setFile) | **POST** /file/set | Create or Update a File Object


# **deleteFile**
> \BumbalClient\Model\ApiResponse deleteFile($file_id)

Delete an File

Delete an File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\FileApi();
$file_id = 789; // int | ID of file to update

try {
    $result = $api_instance->deleteFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileCopy**
> \BumbalClient\Model\ApiResponse fileCopy($arguments)

Copy File

Copy file from one object to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\FileApi();
$arguments = new \BumbalClient\Model\FileCopyArguments(); // \BumbalClient\Model\FileCopyArguments | Request Arguments

try {
    $result = $api_instance->fileCopy($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\FileCopyArguments**](../Model/FileCopyArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveFile**
> \BumbalClient\Model\FileModel retrieveFile($file_id)

Retrieve a File

Retrieve an File

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\FileApi();
$file_id = 789; // int | ID of file to retrieve

try {
    $result = $api_instance->retrieveFile($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->retrieveFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to retrieve |

### Return type

[**\BumbalClient\Model\FileModel**](../Model/FileModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListFile**
> \BumbalClient\Model\FileModel[] retrieveListFile($arguments)

Retrieve List of Files

Retrieve List of Files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\FileApi();
$arguments = new \BumbalClient\Model\FileRetrieveListArguments(); // \BumbalClient\Model\FileRetrieveListArguments | File RetrieveList Arguments

try {
    $result = $api_instance->retrieveListFile($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->retrieveListFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\FileRetrieveListArguments**](../Model/FileRetrieveListArguments.md)| File RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\FileModel[]**](../Model/FileModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFile**
> \BumbalClient\Model\ApiResponse setFile($body)

Create or Update a File Object

Create or Update a File Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\FileApi();
$body = new \BumbalClient\Model\FileModel(); // \BumbalClient\Model\FileModel | File object that needs to be set

try {
    $result = $api_instance->setFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->setFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\FileModel**](../Model/FileModel.md)| File object that needs to be set | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

