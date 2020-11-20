# BumbalClient\QuestionnairetemplatequestionApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#createQuestionnaireTemplateQuestion) | **POST** /questionnaire-template-question | Add a new QuestionnaireTemplateQuestion
[**deleteQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#deleteQuestionnaireTemplateQuestion) | **DELETE** /questionnaire-template-question/{questionnaire-template-questionId} | Delete an QuestionnaireTemplateQuestion entry
[**retrieveListQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#retrieveListQuestionnaireTemplateQuestion) | **PUT** /questionnaire-template-question | Retrieve List of QuestionnaireTemplateQuestion
[**retrieveQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#retrieveQuestionnaireTemplateQuestion) | **GET** /questionnaire-template-question/{questionnaire-template-questionId} | Retrieve a QuestionnaireTemplateQuestion
[**setQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#setQuestionnaireTemplateQuestion) | **POST** /questionnaire-template-question/set | Set (create or update) a QuestionnaireTemplateQuestion
[**updateQuestionnaireTemplateQuestion**](QuestionnairetemplatequestionApi.md#updateQuestionnaireTemplateQuestion) | **PUT** /questionnaire-template-question/{questionnaire-template-questionId} | Update a specific QuestionnaireTemplateQuestion object


# **createQuestionnaireTemplateQuestion**
> \BumbalClient\Model\ApiResponse38 createQuestionnaireTemplateQuestion($body)

Add a new QuestionnaireTemplateQuestion

Add a new QuestionnaireTemplateQuestion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionModel | QuestionnaireTemplateQuestion object that needs to be created

try {
    $result = $api_instance->createQuestionnaireTemplateQuestion($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->createQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionModel**](../Model/QuestionnaireTemplateQuestionModel.md)| QuestionnaireTemplateQuestion object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse38**](../Model/ApiResponse38.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplateQuestion**
> \BumbalClient\Model\ApiResponse37 deleteQuestionnaireTemplateQuestion($notification_id)

Delete an QuestionnaireTemplateQuestion entry

Delete an QuestionnaireTemplateQuestion entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestion to delete

try {
    $result = $api_instance->deleteQuestionnaireTemplateQuestion($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->deleteQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestion to delete |

### Return type

[**\BumbalClient\Model\ApiResponse37**](../Model/ApiResponse37.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplateQuestion**
> \BumbalClient\Model\QuestionnaireTemplateQuestionListResponse retrieveListQuestionnaireTemplateQuestion($arguments)

Retrieve List of QuestionnaireTemplateQuestion

Retrieve List of QuestionnaireTemplateQuestion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$arguments = new \BumbalClient\Model\QuestionnaireTemplateQuestionRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateQuestionRetrieveListArguments | QuestionnaireTemplateQuestion RetrieveList Arguments

try {
    $result = $api_instance->retrieveListQuestionnaireTemplateQuestion($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->retrieveListQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionRetrieveListArguments**](../Model/QuestionnaireTemplateQuestionRetrieveListArguments.md)| QuestionnaireTemplateQuestion RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionListResponse**](../Model/QuestionnaireTemplateQuestionListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplateQuestion**
> \BumbalClient\Model\QuestionnaireTemplateQuestionModel retrieveQuestionnaireTemplateQuestion($notification_id)

Retrieve a QuestionnaireTemplateQuestion

Retrieve an QuestionnaireTemplateQuestion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$notification_id = 789; // int | ID of QuestionnaireTemplateQuestion to retrieve

try {
    $result = $api_instance->retrieveQuestionnaireTemplateQuestion($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->retrieveQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of QuestionnaireTemplateQuestion to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionModel**](../Model/QuestionnaireTemplateQuestionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplateQuestion**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplateQuestion($body)

Set (create or update) a QuestionnaireTemplateQuestion

Set (create or update) a d=QuestionnaireTemplateQuestion. If id or links are set in the data, and a corresponding QuestionnaireTemplateQuestion is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionModel | QuestionnaireTemplateQuestion object

try {
    $result = $api_instance->setQuestionnaireTemplateQuestion($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->setQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionModel**](../Model/QuestionnaireTemplateQuestionModel.md)| QuestionnaireTemplateQuestion object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplateQuestion**
> \BumbalClient\Model\ApiResponse36 updateQuestionnaireTemplateQuestion($notification_id, $body)

Update a specific QuestionnaireTemplateQuestion object

Update a specific QuestionnaireTemplateQuestion object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplatequestionApi();
$notification_id = 789; // int | ID of the QuestionnaireTemplateQuestion object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionModel | QuestionnaireTemplateQuestion object that needs to be updated

try {
    $result = $api_instance->updateQuestionnaireTemplateQuestion($notification_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplatequestionApi->updateQuestionnaireTemplateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **int**| ID of the QuestionnaireTemplateQuestion object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionModel**](../Model/QuestionnaireTemplateQuestionModel.md)| QuestionnaireTemplateQuestion object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse36**](../Model/ApiResponse36.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

