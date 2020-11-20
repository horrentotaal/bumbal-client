# BumbalClient\AuthenticateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateCheckToken**](AuthenticateApi.md#authenticateCheckToken) | **GET** /authenticate/check-token | Check a token for validity
[**authenticateSignIn**](AuthenticateApi.md#authenticateSignIn) | **POST** /authenticate/sign-in | Sign In with your user credentials
[**authenticateSignOut**](AuthenticateApi.md#authenticateSignOut) | **GET** /authenticate/sign-out | Sign out


# **authenticateCheckToken**
> \BumbalClient\Model\ApiResponse authenticateCheckToken()

Check a token for validity

Check a token for validity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AuthenticateApi();

try {
    $result = $api_instance->authenticateCheckToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticateCheckToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticateSignIn**
> \BumbalClient\Model\AuthenticateModel authenticateSignIn($body)

Sign In with your user credentials

Sign In with your user credentials, you will get a access token if successful

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AuthenticateApi();
$body = new \BumbalClient\Model\CredentialsModel(); // \BumbalClient\Model\CredentialsModel | Credentials object

try {
    $result = $api_instance->authenticateSignIn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticateSignIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CredentialsModel**](../Model/CredentialsModel.md)| Credentials object | [optional]

### Return type

[**\BumbalClient\Model\AuthenticateModel**](../Model/AuthenticateModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticateSignOut**
> \BumbalClient\Model\ApiResponse authenticateSignOut($token)

Sign out

Sign out using your access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AuthenticateApi();
$token = "token_example"; // string | Token

try {
    $result = $api_instance->authenticateSignOut($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticateApi->authenticateSignOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

