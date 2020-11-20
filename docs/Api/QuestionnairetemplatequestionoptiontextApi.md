# BumbalClient\QuestionnairetemplatequestionoptiontextApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#createQuestionnaireTemplateQuestionOptionText) | **POST** /questionnaire-template-question-option-text | Add a new QuestionnaireTemplateQuestionOptionText
[**deleteQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#deleteQuestionnaireTemplateQuestionOptionText) | **DELETE** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Delete an QuestionnaireTemplateQuestionOptionText entry
[**retrieveListQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#retrieveListQuestionnaireTemplateQuestionOptionText) | **PUT** /questionnaire-template-question-option-text | Retrieve List of QuestionnaireTemplateQuestionOptionText
[**retrieveQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#retrieveQuestionnaireTemplateQuestionOptionText) | **GET** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Retrieve a QuestionnaireTemplateQuestionOptionText
[**setQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#setQuestionnaireTemplateQuestionOptionText) | **POST** /questionnaire-template-question-option-text/set | Set (create or update) a QuestionnaireTemplateQuestionOptionText
[**updateQuestionnaireTemplateQuestionOptionText**](QuestionnairetemplatequestionoptiontextApi.md#updateQuestionnaireTemplateQuestionOptionText) | **PUT** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Update a specific QuestionnaireTemplateQuestionOptionText object


# **createQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse46 createQuestionnaireTemplateQuestionOptionText($body)

Add a new QuestionnaireTemplateQuestionOptionText

Add a new QuestionnaireTemplateQuestionOptionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object that needs to be created

try {
    $result = $api_instance->createQuestionnaireTemplateQuestionOptionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->createQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse46**](../Model/ApiResponse46.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse45 deleteQuestionnaireTemplateQuestionOptionText($notification_id)

Delete an QuestionnaireTemplateQuestionOptionText entry

Delete an QuestionnaireTemplateQuestionOptionText entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestionOptionText to delete

try {
    $result = $api_instance->deleteQuestionnaireTemplateQuestionOptionText($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->deleteQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestionOptionText to delete |

### Return type

[**\BumbalClient\Model\ApiResponse45**](../Model/ApiResponse45.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse retrieveListQuestionnaireTemplateQuestionOptionText($arguments)

Retrieve List of QuestionnaireTemplateQuestionOptionText

Retrieve List of QuestionnaireTemplateQuestionOptionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$arguments = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments | QuestionnaireTemplateQuestionOptionText RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireTemplateQuestionOptionText($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->retrieveListQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments**](../Model/QuestionnaireTemplateQuestionOptionTextRetrieveListArguments.md)| QuestionnaireTemplateQuestionOptionText RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse**](../Model/QuestionnaireTemplateQuestionOptionTextListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel retrieveQuestionnaireTemplateQuestionOptionText($notification_id)

Retrieve a QuestionnaireTemplateQuestionOptionText

Retrieve an QuestionnaireTemplateQuestionOptionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestionOptionText to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireTemplateQuestionOptionText($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->retrieveQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestionOptionText to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplateQuestionOptionText($body)

Set (create or update) a QuestionnaireTemplateQuestionOptionText

Set (create or update) a d=QuestionnaireTemplateQuestionOptionText. If id or links are set in the data, and a corresponding QuestionnaireTemplateQuestionOptionText is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object

try {
    $result = $api_instance->setQuestionnaireTemplateQuestionOptionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->setQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse44 updateQuestionnaireTemplateQuestionOptionText($notification_id, $body)

Update a specific QuestionnaireTemplateQuestionOptionText object

Update a specific QuestionnaireTemplateQuestionOptionText object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptiontextApi();
$notification_id = 789; // int | ID of the QuestionnaireTemplateQuestionOptionText object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireTemplateQuestionOptionText($notification_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptiontextApi->updateQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of the QuestionnaireTemplateQuestionOptionText object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse44**](../Model/ApiResponse44.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

