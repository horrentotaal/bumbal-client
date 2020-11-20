# BumbalClient\CommunicationtemplateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationTemplate**](CommunicationtemplateApi.md#createCommunicationTemplate) | **POST** /communication-template | Add a new CommunicationTemplate
[**deleteCommunicationTemplate**](CommunicationtemplateApi.md#deleteCommunicationTemplate) | **DELETE** /communication-template/{communicationTemplateId} | Delete a CommunicationTemplate
[**retrieveCommunicationTemplate**](CommunicationtemplateApi.md#retrieveCommunicationTemplate) | **GET** /communication-template/{communicationTemplateId} | Retrieve a CommunicationTemplate
[**retrieveListCommunicationTemplate**](CommunicationtemplateApi.md#retrieveListCommunicationTemplate) | **PUT** /communication-template | Retrieve List of CommunicationTemplates
[**setCommunicationTemplate**](CommunicationtemplateApi.md#setCommunicationTemplate) | **POST** /communication-template/set | Set (create or update) a CommunicationTemplate


# **createCommunicationTemplate**
> \BumbalClient\Model\ApiResponse createCommunicationTemplate($body)

Add a new CommunicationTemplate

Add a new CommunicationTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$body = new \BumbalClient\Model\CommunicationTemplateModel(); // \BumbalClient\Model\CommunicationTemplateModel | CommunicationTemplate object that needs to be created

try {
    $result = $api_instance->createCommunicationTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->createCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationTemplateModel**](../Model/CommunicationTemplateModel.md)| CommunicationTemplate object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommunicationTemplate**
> \BumbalClient\Model\ApiResponse deleteCommunicationTemplate($communication_template_id)

Delete a CommunicationTemplate

Delete a CommunicationTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$communication_template_id = 789; // int | ID of communication-template to delete

try {
    $result = $api_instance->deleteCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->deleteCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_template_id** | **int**| ID of communication-template to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationTemplate**
> \BumbalClient\Model\CommunicationTemplateModel retrieveCommunicationTemplate($communication_template_id)

Retrieve a CommunicationTemplate

Retrieve an CommunicationTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$communication_template_id = 789; // int | ID of communication-template to retrieve

try {
    $result = $api_instance->retrieveCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->retrieveCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_template_id** | **int**| ID of communication-template to retrieve |

### Return type

[**\BumbalClient\Model\CommunicationTemplateModel**](../Model/CommunicationTemplateModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListCommunicationTemplate**
> \BumbalClient\Model\CommunicationTemplateListResponse retrieveListCommunicationTemplate($arguments)

Retrieve List of CommunicationTemplates

Retrieve List of CommunicationTemplates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$arguments = new \BumbalClient\Model\CommunicationTemplateRetrieveListArguments(); // \BumbalClient\Model\CommunicationTemplateRetrieveListArguments | CommunicationTemplate RetrieveList Arguments

try {
    $result = $api_instance->retrieveListCommunicationTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->retrieveListCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationTemplateRetrieveListArguments**](../Model/CommunicationTemplateRetrieveListArguments.md)| CommunicationTemplate RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationTemplateListResponse**](../Model/CommunicationTemplateListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCommunicationTemplate**
> \BumbalClient\Model\ApiResponse setCommunicationTemplate($body)

Set (create or update) a CommunicationTemplate

Set (create or update) a CommunicationTemplate. If id or links are set in the data, and a corresponding communication-template is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$body = new \BumbalClient\Model\CommunicationTemplateModel(); // \BumbalClient\Model\CommunicationTemplateModel | CommunicationTemplate object

try {
    $result = $api_instance->setCommunicationTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->setCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationTemplateModel**](../Model/CommunicationTemplateModel.md)| CommunicationTemplate object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

