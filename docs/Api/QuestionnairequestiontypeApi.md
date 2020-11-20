# BumbalClient\QuestionnairequestiontypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListQuestionnaireQuestionType**](QuestionnairequestiontypeApi.md#retrieveListQuestionnaireQuestionType) | **PUT** /questionnaire-question-type | Retrieve List of QuestionnaireQuestionType
[**retrieveQuestionnaireQuestionType**](QuestionnairequestiontypeApi.md#retrieveQuestionnaireQuestionType) | **GET** /questionnaire-question-type/{questionnaire-question-typeId} | Retrieve a QuestionnaireQuestionType


# **retrieveListQuestionnaireQuestionType**
> \BumbalClient\Model\QuestionnaireQuestionTypeListResponse retrieveListQuestionnaireQuestionType($arguments)

Retrieve List of QuestionnaireQuestionType

Retrieve List of QuestionnaireQuestionType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairequestiontypeApi();
$arguments = new \BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments | QuestionnaireQuestionType RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireQuestionType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairequestiontypeApi->retrieveListQuestionnaireQuestionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments**](../Model/QuestionnaireQuestionTypeRetrieveListArguments.md)| QuestionnaireQuestionType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionTypeListResponse**](../Model/QuestionnaireQuestionTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireQuestionType**
> \BumbalClient\Model\QuestionnaireQuestionTypeModel retrieveQuestionnaireQuestionType($notification_id)

Retrieve a QuestionnaireQuestionType

Retrieve an QuestionnaireQuestionType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairequestiontypeApi();
$notification_id = 789; // int | ID of QuestionnaireQuestionType to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireQuestionType($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairequestiontypeApi->retrieveQuestionnaireQuestionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireQuestionType to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionTypeModel**](../Model/QuestionnaireQuestionTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

