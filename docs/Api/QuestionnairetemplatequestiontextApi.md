# BumbalClient\QuestionnairetemplatequestiontextApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#createQuestionnaireTemplateQuestionText) | **POST** /questionnaire-template-question-text | Add a new QuestionnaireTemplateQuestionText
[**deleteQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#deleteQuestionnaireTemplateQuestionText) | **DELETE** /questionnaire-template-question-text/{questionnaire-template-question-textId} | Delete an QuestionnaireTemplateQuestionText entry
[**retrieveListQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#retrieveListQuestionnaireTemplateQuestionText) | **PUT** /questionnaire-template-question-text | Retrieve List of QuestionnaireTemplateQuestionText
[**retrieveQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#retrieveQuestionnaireTemplateQuestionText) | **GET** /questionnaire-template-question-text/{questionnaire-template-question-textId} | Retrieve a QuestionnaireTemplateQuestionText
[**setQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#setQuestionnaireTemplateQuestionText) | **POST** /questionnaire-template-question-text/set | Set (create or update) a QuestionnaireTemplateQuestionText
[**updateQuestionnaireTemplateQuestionText**](QuestionnairetemplatequestiontextApi.md#updateQuestionnaireTemplateQuestionText) | **PUT** /questionnaire-template-question-text/{questionnaire-template-question-textId} | Update a specific QuestionnaireTemplateQuestionText object


# **createQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\ApiResponse49 createQuestionnaireTemplateQuestionText($body)

Add a new QuestionnaireTemplateQuestionText

Add a new QuestionnaireTemplateQuestionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel | QuestionnaireTemplateQuestionText object that needs to be created

try {
    $result = $api_instance->createQuestionnaireTemplateQuestionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->createQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel**](../Model/QuestionnaireTemplateQuestionTextModel.md)| QuestionnaireTemplateQuestionText object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse49**](../Model/ApiResponse49.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\ApiResponse48 deleteQuestionnaireTemplateQuestionText($notification_id)

Delete an QuestionnaireTemplateQuestionText entry

Delete an QuestionnaireTemplateQuestionText entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestionText to delete

try {
    $result = $api_instance->deleteQuestionnaireTemplateQuestionText($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->deleteQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestionText to delete |

### Return type

[**\BumbalClient\Model\ApiResponse48**](../Model/ApiResponse48.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse retrieveListQuestionnaireTemplateQuestionText($arguments)

Retrieve List of QuestionnaireTemplateQuestionText

Retrieve List of QuestionnaireTemplateQuestionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$arguments = new \BumbalClient\Model\QuestionnaireTemplateQuestionTextRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateQuestionTextRetrieveListArguments | QuestionnaireTemplateQuestionText RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireTemplateQuestionText($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->retrieveListQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionTextRetrieveListArguments**](../Model/QuestionnaireTemplateQuestionTextRetrieveListArguments.md)| QuestionnaireTemplateQuestionText RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse**](../Model/QuestionnaireTemplateQuestionTextListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel retrieveQuestionnaireTemplateQuestionText($notification_id)

Retrieve a QuestionnaireTemplateQuestionText

Retrieve an QuestionnaireTemplateQuestionText

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestionText to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireTemplateQuestionText($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->retrieveQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestionText to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel**](../Model/QuestionnaireTemplateQuestionTextModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplateQuestionText($body)

Set (create or update) a QuestionnaireTemplateQuestionText

Set (create or update) a d=QuestionnaireTemplateQuestionText. If id or links are set in the data, and a corresponding QuestionnaireTemplateQuestionText is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel | QuestionnaireTemplateQuestionText object

try {
    $result = $api_instance->setQuestionnaireTemplateQuestionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->setQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel**](../Model/QuestionnaireTemplateQuestionTextModel.md)| QuestionnaireTemplateQuestionText object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplateQuestionText**
> \BumbalClient\Model\ApiResponse47 updateQuestionnaireTemplateQuestionText($notification_id, $body)

Update a specific QuestionnaireTemplateQuestionText object

Update a specific QuestionnaireTemplateQuestionText object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestiontextApi();
$notification_id = 789; // int | ID of the QuestionnaireTemplateQuestionText object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel | QuestionnaireTemplateQuestionText object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireTemplateQuestionText($notification_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestiontextApi->updateQuestionnaireTemplateQuestionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of the QuestionnaireTemplateQuestionText object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel**](../Model/QuestionnaireTemplateQuestionTextModel.md)| QuestionnaireTemplateQuestionText object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse47**](../Model/ApiResponse47.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

