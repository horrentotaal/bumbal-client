# BumbalClient\QuestionnaireApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeLanguage**](QuestionnaireApi.md#changeLanguage) | **POST** /questionnaire/change-language | change language of a Questionnaire
[**deleteQuestionnaire**](QuestionnaireApi.md#deleteQuestionnaire) | **DELETE** /questionnaire/{questionnaireId} | Delete an Questionnaire entry
[**getNextQuestion**](QuestionnaireApi.md#getNextQuestion) | **POST** /questionnaire/get-next-question | getNextQuestion of an Questionnaire
[**getPreviousQuestion**](QuestionnaireApi.md#getPreviousQuestion) | **POST** /questionnaire/get-previous-question | getPreviousQuestion of an Questionnaire
[**retrieveListQuestionnaire**](QuestionnaireApi.md#retrieveListQuestionnaire) | **PUT** /questionnaire | Retrieve List of Questionnaire
[**retrieveQuestionnaire**](QuestionnaireApi.md#retrieveQuestionnaire) | **GET** /questionnaire/{questionnaireId} | Retrieve a Questionnaire


# **changeLanguage**
> \BumbalClient\Model\QuestionnaireChangeLanguageResponse changeLanguage($arguments)

change language of a Questionnaire

change language of a Questionnaire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$arguments = new \BumbalClient\Model\QuestionnaireChangeLanguageArguments(); // \BumbalClient\Model\QuestionnaireChangeLanguageArguments | Request Arguments

try {
    $result = $api_instance->changeLanguage($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->changeLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireChangeLanguageArguments**](../Model/QuestionnaireChangeLanguageArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireChangeLanguageResponse**](../Model/QuestionnaireChangeLanguageResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaire**
> \BumbalClient\Model\ApiResponse28 deleteQuestionnaire($notification_id)

Delete an Questionnaire entry

Delete an Questionnaire entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$notification_id = 789; // int | ID of Questionnaire to delete

try {
    $result = $api_instance->deleteQuestionnaire($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->deleteQuestionnaire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of Questionnaire to delete |

### Return type

[**\BumbalClient\Model\ApiResponse28**](../Model/ApiResponse28.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextQuestion**
> \BumbalClient\Model\QuestionnaireQuestionModel getNextQuestion($arguments)

getNextQuestion of an Questionnaire

getNextQuestion of an Questionnaire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$arguments = new \BumbalClient\Model\QuestionnaireGetNextQuestionArguments(); // \BumbalClient\Model\QuestionnaireGetNextQuestionArguments | Request Arguments

try {
    $result = $api_instance->getNextQuestion($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->getNextQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireGetNextQuestionArguments**](../Model/QuestionnaireGetNextQuestionArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionModel**](../Model/QuestionnaireQuestionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPreviousQuestion**
> \BumbalClient\Model\QuestionnaireQuestionModel getPreviousQuestion($arguments)

getPreviousQuestion of an Questionnaire

getPreviousQuestion of an Questionnaire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$arguments = new \BumbalClient\Model\QuestionnaireGetPreviousQuestionArguments(); // \BumbalClient\Model\QuestionnaireGetPreviousQuestionArguments | Request Arguments

try {
    $result = $api_instance->getPreviousQuestion($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->getPreviousQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireGetPreviousQuestionArguments**](../Model/QuestionnaireGetPreviousQuestionArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionModel**](../Model/QuestionnaireQuestionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaire**
> \BumbalClient\Model\QuestionnaireListResponse retrieveListQuestionnaire($arguments)

Retrieve List of Questionnaire

Retrieve List of Questionnaire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$arguments = new \BumbalClient\Model\QuestionnaireRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireRetrieveListArguments | Questionnaire RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaire($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->retrieveListQuestionnaire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireRetrieveListArguments**](../Model/QuestionnaireRetrieveListArguments.md)| Questionnaire RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireListResponse**](../Model/QuestionnaireListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaire**
> \BumbalClient\Model\QuestionnaireModel retrieveQuestionnaire($notification_id, $include_answers)

Retrieve a Questionnaire

Retrieve an Questionnaire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireApi();
$notification_id = 789; // int | ID of Questionnaire to retrieve
$include_answers = true; // bool | Include answers

try {
    $result = $api_instance->retrieveQuestionnaire($notification_id, $include_answers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireApi->retrieveQuestionnaire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of Questionnaire to retrieve |
 **include_answers** | **bool**| Include answers |

### Return type

[**\BumbalClient\Model\QuestionnaireModel**](../Model/QuestionnaireModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

