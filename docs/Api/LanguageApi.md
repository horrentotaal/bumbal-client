# BumbalClient\LanguageApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListLanguage**](LanguageApi.md#retrieveListLanguage) | **PUT** /language | Retrieve List of Language


# **retrieveListLanguage**
> \BumbalClient\Model\LanguageListResponse retrieveListLanguage($arguments)

Retrieve List of Language

Retrieve List of Language

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\LanguageApi();
$arguments = new \BumbalClient\Model\LanguageRetrieveListArguments(); // \BumbalClient\Model\LanguageRetrieveListArguments | Language RetrieveList Arguments

try {
    $result = $api_instance->retrieveListLanguage($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageApi->retrieveListLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\LanguageRetrieveListArguments**](../Model/LanguageRetrieveListArguments.md)| Language RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\LanguageListResponse**](../Model/LanguageListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

