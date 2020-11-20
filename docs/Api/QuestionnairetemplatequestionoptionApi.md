# BumbalClient\QuestionnairetemplatequestionoptionApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#createQuestionnaireTemplateQuestionOption) | **POST** /questionnaire-template-question-option | Add a new QuestionnaireTemplateQuestionOption
[**deleteQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#deleteQuestionnaireTemplateQuestionOption) | **DELETE** /questionnaire-template-question-option/{questionnaire-template-question-optionId} | Delete an QuestionnaireTemplateQuestionOption entry
[**getPossibleFollowUpQuestions**](QuestionnairetemplatequestionoptionApi.md#getPossibleFollowUpQuestions) | **POST** /questionnaire-template-question-option/get-possible-followup-questions | get possible follow up questions
[**retrieveListQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#retrieveListQuestionnaireTemplateQuestionOption) | **PUT** /questionnaire-template-question-option | Retrieve List of QuestionnaireTemplateQuestionOption
[**retrieveQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#retrieveQuestionnaireTemplateQuestionOption) | **GET** /questionnaire-template-question-option/{questionnaire-template-question-optionId} | Retrieve a QuestionnaireTemplateQuestionOption
[**setQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#setQuestionnaireTemplateQuestionOption) | **POST** /questionnaire-template-question-option/set | Set (create or update) a QuestionnaireTemplateQuestionOption
[**updateQuestionnaireTemplateQuestionOption**](QuestionnairetemplatequestionoptionApi.md#updateQuestionnaireTemplateQuestionOption) | **PUT** /questionnaire-template-question-option/{questionnaire-template-question-optionId} | Update a specific QuestionnaireTemplateQuestionOption object


# **createQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\ApiResponse42 createQuestionnaireTemplateQuestionOption($body)

Add a new QuestionnaireTemplateQuestionOption

Add a new QuestionnaireTemplateQuestionOption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel | QuestionnaireTemplateQuestionOption object that needs to be created

try {
    $result = $api_instance->createQuestionnaireTemplateQuestionOption($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->createQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel**](../Model/QuestionnaireTemplateQuestionOptionModel.md)| QuestionnaireTemplateQuestionOption object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse42**](../Model/ApiResponse42.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\ApiResponse40 deleteQuestionnaireTemplateQuestionOption($questionnaire_template_question_option_id)

Delete an QuestionnaireTemplateQuestionOption entry

Delete an QuestionnaireTemplateQuestionOption entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$questionnaire_template_question_option_id = 789; // int | ID of QuestionnaireTemplateQuestionOption to delete

try {
    $result = $api_instance->deleteQuestionnaireTemplateQuestionOption($questionnaire_template_question_option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->deleteQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_question_option_id** | **int**| ID of QuestionnaireTemplateQuestionOption to delete |

### Return type

[**\BumbalClient\Model\ApiResponse40**](../Model/ApiResponse40.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPossibleFollowUpQuestions**
> \BumbalClient\Model\ApiResponse40 getPossibleFollowUpQuestions($questionnaire_template_question_id)

get possible follow up questions

get possible follow up questions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$questionnaire_template_question_id = 789; // int | ID of QuestionnaireTemplateQuestion

try {
    $result = $api_instance->getPossibleFollowUpQuestions($questionnaire_template_question_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->getPossibleFollowUpQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_question_id** | **int**| ID of QuestionnaireTemplateQuestion |

### Return type

[**\BumbalClient\Model\ApiResponse40**](../Model/ApiResponse40.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionListResponse retrieveListQuestionnaireTemplateQuestionOption($arguments)

Retrieve List of QuestionnaireTemplateQuestionOption

Retrieve List of QuestionnaireTemplateQuestionOption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$arguments = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionRetrieveListArguments | QuestionnaireTemplateQuestionOption RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireTemplateQuestionOption($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->retrieveListQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionRetrieveListArguments**](../Model/QuestionnaireTemplateQuestionOptionRetrieveListArguments.md)| QuestionnaireTemplateQuestionOption RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionListResponse**](../Model/QuestionnaireTemplateQuestionOptionListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel retrieveQuestionnaireTemplateQuestionOption($notification_id)

Retrieve a QuestionnaireTemplateQuestionOption

Retrieve an QuestionnaireTemplateQuestionOption

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestionOption to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireTemplateQuestionOption($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->retrieveQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestionOption to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel**](../Model/QuestionnaireTemplateQuestionOptionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplateQuestionOption($body)

Set (create or update) a QuestionnaireTemplateQuestionOption

Set (create or update) a d=QuestionnaireTemplateQuestionOption. If id or links are set in the data, and a corresponding QuestionnaireTemplateQuestionOption is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel | QuestionnaireTemplateQuestionOption object

try {
    $result = $api_instance->setQuestionnaireTemplateQuestionOption($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->setQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel**](../Model/QuestionnaireTemplateQuestionOptionModel.md)| QuestionnaireTemplateQuestionOption object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplateQuestionOption**
> \BumbalClient\Model\ApiResponse39 updateQuestionnaireTemplateQuestionOption($notification_id, $body)

Update a specific QuestionnaireTemplateQuestionOption object

Update a specific QuestionnaireTemplateQuestionOption object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionoptionApi();
$notification_id = 789; // int | ID of the QuestionnaireTemplateQuestionOption object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel | QuestionnaireTemplateQuestionOption object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireTemplateQuestionOption($notification_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionoptionApi->updateQuestionnaireTemplateQuestionOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of the QuestionnaireTemplateQuestionOption object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel**](../Model/QuestionnaireTemplateQuestionOptionModel.md)| QuestionnaireTemplateQuestionOption object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse39**](../Model/ApiResponse39.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

