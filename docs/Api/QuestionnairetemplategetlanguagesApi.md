# BumbalClient\QuestionnairetemplategetlanguagesApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getQuestionnaireTemplateLanguages**](QuestionnairetemplategetlanguagesApi.md#getQuestionnaireTemplateLanguages) | **GET** /questionnaire-template/get-languages/{questionnaire-templateId} | Retrieves all set languages for an QuestionnaireTemplate entry


# **getQuestionnaireTemplateLanguages**
> \BumbalClient\Model\ApiResponse35 getQuestionnaireTemplateLanguages($questionnaire_template_id)

Retrieves all set languages for an QuestionnaireTemplate entry

Retrieves all set languages for an QuestionnaireTemplate entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\QuestionnairetemplategetlanguagesApi();
$questionnaire_template_id = 789; // int | ID of QuestionnaireTemplate

try {
    $result = $api_instance->getQuestionnaireTemplateLanguages($questionnaire_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnairetemplategetlanguagesApi->getQuestionnaireTemplateLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_id** | **int**| ID of QuestionnaireTemplate |

### Return type

[**\BumbalClient\Model\ApiResponse35**](../Model/ApiResponse35.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

