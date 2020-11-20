# BumbalClient\QuestionnairetypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListQuestionnaireType**](QuestionnairetypeApi.md#retrieveListQuestionnaireType) | **PUT** /questionnaire-type | Retrieve List of QuestionnaireType
[**retrieveQuestionnaireType**](QuestionnairetypeApi.md#retrieveQuestionnaireType) | **GET** /questionnaire-type/{questionnaire-typeId} | Retrieve a QuestionnaireType


# **retrieveListQuestionnaireType**
> \BumbalClient\Model\QuestionnaireTypeListResponse retrieveListQuestionnaireType($arguments)

Retrieve List of QuestionnaireType

Retrieve List of QuestionnaireType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetypeApi();
$arguments = new \BumbalClient\Model\QuestionnaireTypeRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTypeRetrieveListArguments | QuestionnaireType RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetypeApi->retrieveListQuestionnaireType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTypeRetrieveListArguments**](../Model/QuestionnaireTypeRetrieveListArguments.md)| QuestionnaireType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTypeListResponse**](../Model/QuestionnaireTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireType**
> \BumbalClient\Model\QuestionnaireTypeModel retrieveQuestionnaireType($notification_id)

Retrieve a QuestionnaireType

Retrieve an QuestionnaireType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetypeApi();
$notification_id = 789; // int | ID of QuestionnaireType to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireType($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetypeApi->retrieveQuestionnaireType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireType to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTypeModel**](../Model/QuestionnaireTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

