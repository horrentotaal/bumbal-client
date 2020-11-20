# BumbalClient\QuestionnairetemplateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplate**](QuestionnairetemplateApi.md#createQuestionnaireTemplate) | **POST** /questionnaire-template | Add a new QuestionnaireTemplate
[**deleteQuestionnaireTemplate**](QuestionnairetemplateApi.md#deleteQuestionnaireTemplate) | **DELETE** /questionnaire-template/{questionnaire-templateId} | Delete an QuestionnaireTemplate entry
[**retrieveListQuestionnaireTemplate**](QuestionnairetemplateApi.md#retrieveListQuestionnaireTemplate) | **PUT** /questionnaire-template | Retrieve List of QuestionnaireTemplate
[**retrieveQuestionnaireTemplate**](QuestionnairetemplateApi.md#retrieveQuestionnaireTemplate) | **GET** /questionnaire-template/{questionnaire-templateId} | Retrieve a QuestionnaireTemplate
[**setQuestionnaireTemplate**](QuestionnairetemplateApi.md#setQuestionnaireTemplate) | **POST** /questionnaire-template/set | Set (create or update) a QuestionnaireTemplate
[**updateQuestionnaireTemplate**](QuestionnairetemplateApi.md#updateQuestionnaireTemplate) | **PUT** /questionnaire-template/{questionnaire-templateId} | Update a specific QuestionnaireTemplate object


# **createQuestionnaireTemplate**
> \BumbalClient\Model\ApiResponse34 createQuestionnaireTemplate($body)

Add a new QuestionnaireTemplate

Add a new QuestionnaireTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateModel(); // \BumbalClient\Model\QuestionnaireTemplateModel | QuestionnaireTemplate object that needs to be created

try {
    $result = $api_instance->createQuestionnaireTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->createQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateModel**](../Model/QuestionnaireTemplateModel.md)| QuestionnaireTemplate object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse34**](../Model/ApiResponse34.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplate**
> \BumbalClient\Model\ApiResponse32 deleteQuestionnaireTemplate($notification_id)

Delete an QuestionnaireTemplate entry

Delete an QuestionnaireTemplate entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$notification_id = 789; // int | ID of QuestionnaireTemplate to delete

try {
    $result = $api_instance->deleteQuestionnaireTemplate($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->deleteQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplate to delete |

### Return type

[**\BumbalClient\Model\ApiResponse32**](../Model/ApiResponse32.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplate**
> \BumbalClient\Model\QuestionnaireTemplateListResponse retrieveListQuestionnaireTemplate($arguments)

Retrieve List of QuestionnaireTemplate

Retrieve List of QuestionnaireTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$arguments = new \BumbalClient\Model\QuestionnaireTemplateRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateRetrieveListArguments | QuestionnaireTemplate RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->retrieveListQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateRetrieveListArguments**](../Model/QuestionnaireTemplateRetrieveListArguments.md)| QuestionnaireTemplate RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateListResponse**](../Model/QuestionnaireTemplateListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplate**
> \BumbalClient\Model\QuestionnaireTemplateModel retrieveQuestionnaireTemplate($questionnaire_template_id)

Retrieve a QuestionnaireTemplate

Retrieve an QuestionnaireTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$questionnaire_template_id = 789; // int | ID of QuestionnaireTemplate to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireTemplate($questionnaire_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->retrieveQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_id** | **int**| ID of QuestionnaireTemplate to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateModel**](../Model/QuestionnaireTemplateModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplate**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplate($body)

Set (create or update) a QuestionnaireTemplate

Set (create or update) a d=QuestionnaireTemplate. If id or links are set in the data, and a corresponding QuestionnaireTemplate is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateModel(); // \BumbalClient\Model\QuestionnaireTemplateModel | QuestionnaireTemplate object

try {
    $result = $api_instance->setQuestionnaireTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->setQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateModel**](../Model/QuestionnaireTemplateModel.md)| QuestionnaireTemplate object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplate**
> \BumbalClient\Model\ApiResponse31 updateQuestionnaireTemplate($questionnaire_template_id, $body)

Update a specific QuestionnaireTemplate object

Update a specific QuestionnaireTemplate object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplateApi();
$questionnaire_template_id = 789; // int | ID of the QuestionnaireTemplate object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateModel(); // \BumbalClient\Model\QuestionnaireTemplateModel | QuestionnaireTemplate object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireTemplate($questionnaire_template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplateApi->updateQuestionnaireTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_id** | **int**| ID of the QuestionnaireTemplate object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateModel**](../Model/QuestionnaireTemplateModel.md)| QuestionnaireTemplate object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse31**](../Model/ApiResponse31.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

