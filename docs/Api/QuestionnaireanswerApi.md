# BumbalClient\QuestionnaireanswerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireAnswer**](QuestionnaireanswerApi.md#createQuestionnaireAnswer) | **POST** /questionnaire-answer | Add a new QuestionnaireAnswer
[**deleteQuestionnaireAnswer**](QuestionnaireanswerApi.md#deleteQuestionnaireAnswer) | **DELETE** /questionnaire-answer/{questionnaire-answerId} | Delete an QuestionnaireAnswer entry
[**retrieveListQuestionnaireAnswer**](QuestionnaireanswerApi.md#retrieveListQuestionnaireAnswer) | **PUT** /questionnaire-answer | Retrieve List of QuestionnaireAnswer
[**retrieveQuestionnaireAnswer**](QuestionnaireanswerApi.md#retrieveQuestionnaireAnswer) | **GET** /questionnaire-answer/{questionnaire-answerId} | Retrieve a QuestionnaireAnswer
[**setQuestionnaireAnswer**](QuestionnaireanswerApi.md#setQuestionnaireAnswer) | **POST** /questionnaire-answer/set | Set (create or update) a QuestionnaireAnswer
[**updateQuestionnaireAnswer**](QuestionnaireanswerApi.md#updateQuestionnaireAnswer) | **PUT** /questionnaire-answer/{questionnaire-answerId} | Update a specific QuestionnaireAnswer object


# **createQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse27 createQuestionnaireAnswer($body)

Add a new QuestionnaireAnswer

Add a new QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object that needs to be created

try {
    $result = $api_instance->createQuestionnaireAnswer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->createQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse27**](../Model/ApiResponse27.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse25 deleteQuestionnaireAnswer($questionnaire_answer_id)

Delete an QuestionnaireAnswer entry

Delete an QuestionnaireAnswer entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$questionnaire_answer_id = 789; // int | ID of QuestionnaireAnswer to delete

try {
    $result = $api_instance->deleteQuestionnaireAnswer($questionnaire_answer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->deleteQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of QuestionnaireAnswer to delete |

### Return type

[**\BumbalClient\Model\ApiResponse25**](../Model/ApiResponse25.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireAnswer**
> \BumbalClient\Model\QuestionnaireAnswerListResponse retrieveListQuestionnaireAnswer($arguments)

Retrieve List of QuestionnaireAnswer

Retrieve List of QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$arguments = new \BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments | QuestionnaireAnswer RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireAnswer($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->retrieveListQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments**](../Model/QuestionnaireAnswerRetrieveListArguments.md)| QuestionnaireAnswer RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireAnswerListResponse**](../Model/QuestionnaireAnswerListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireAnswer**
> \BumbalClient\Model\QuestionnaireAnswerModel retrieveQuestionnaireAnswer($questionnaire_answer_id)

Retrieve a QuestionnaireAnswer

Retrieve an QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$questionnaire_answer_id = 789; // int | ID of QuestionnaireAnswer to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireAnswer($questionnaire_answer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->retrieveQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of QuestionnaireAnswer to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse setQuestionnaireAnswer($body)

Set (create or update) a QuestionnaireAnswer

Set (create or update) a d=QuestionnaireAnswer. If id or links are set in the data, and a corresponding QuestionnaireAnswer is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object

try {
    $result = $api_instance->setQuestionnaireAnswer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->setQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse24 updateQuestionnaireAnswer($questionnaire_answer_id, $body)

Update a specific QuestionnaireAnswer object

Update a specific QuestionnaireAnswer object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnaireanswerApi();
$questionnaire_answer_id = 789; // int | ID of the QuestionnaireAnswer object to update
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireAnswer($questionnaire_answer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireanswerApi->updateQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of the QuestionnaireAnswer object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse24**](../Model/ApiResponse24.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

