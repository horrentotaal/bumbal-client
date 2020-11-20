# BumbalClient\TransactionApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTransaction**](TransactionApi.md#createTransaction) | **POST** /transaction | Add a new Transaction
[**deleteTransaction**](TransactionApi.md#deleteTransaction) | **DELETE** /transaction/{transactionId} | Delete an Transaction entry
[**retrieveListTransaction**](TransactionApi.md#retrieveListTransaction) | **PUT** /transaction | Retrieve List of Transaction
[**retrieveTransaction**](TransactionApi.md#retrieveTransaction) | **GET** /transaction/{transactionId} | Retrieve a Transaction
[**setTransaction**](TransactionApi.md#setTransaction) | **POST** /transaction/set | Set (create or update) a Transaction
[**token**](TransactionApi.md#token) | **POST** /transaction/token | get a transaction token
[**token_0**](TransactionApi.md#token_0) | **POST** /transaction/token-is-paid | set a transaction to paid with token
[**token_1**](TransactionApi.md#token_1) | **POST** /transaction/token-is-cancelled | set a transaction to cancelled with token
[**token_2**](TransactionApi.md#token_2) | **POST** /transaction/token-has-failed | set a transaction to failed with token
[**updateTransaction**](TransactionApi.md#updateTransaction) | **PUT** /transaction/{transactionId} | Update a specific Transaction object


# **createTransaction**
> \BumbalClient\Model\TransactionCreateResponse createTransaction($body)

Add a new Transaction

Add a new Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$body = new \BumbalClient\Model\TransactionModel(); // \BumbalClient\Model\TransactionModel | Transaction object that needs to be created

try {
    $result = $api_instance->createTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TransactionModel**](../Model/TransactionModel.md)| Transaction object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\TransactionCreateResponse**](../Model/TransactionCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransaction**
> \BumbalClient\Model\TransactionDeleteResponse deleteTransaction($transaction_id)

Delete an Transaction entry

Delete an Transaction entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$transaction_id = 789; // int | ID of Transaction to delete

try {
    $result = $api_instance->deleteTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| ID of Transaction to delete |

### Return type

[**\BumbalClient\Model\TransactionDeleteResponse**](../Model/TransactionDeleteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTransaction**
> \BumbalClient\Model\TransactionListResponse retrieveListTransaction($arguments)

Retrieve List of Transaction

Retrieve List of Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$arguments = new \BumbalClient\Model\TransactionRetrieveListArguments(); // \BumbalClient\Model\TransactionRetrieveListArguments | Transaction RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTransaction($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->retrieveListTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TransactionRetrieveListArguments**](../Model/TransactionRetrieveListArguments.md)| Transaction RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransaction**
> \BumbalClient\Model\TransactionModel retrieveTransaction($transaction_id)

Retrieve a Transaction

Retrieve an Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$transaction_id = 789; // int | ID of Transaction to retrieve

try {
    $result = $api_instance->retrieveTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->retrieveTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| ID of Transaction to retrieve |

### Return type

[**\BumbalClient\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTransaction**
> \BumbalClient\Model\TransactionSetResponse setTransaction($body)

Set (create or update) a Transaction

Set (create or update) a d=Transaction. If id or links are set in the data, and a corresponding Transaction is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$body = new \BumbalClient\Model\TransactionModel(); // \BumbalClient\Model\TransactionModel | Transaction object

try {
    $result = $api_instance->setTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->setTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TransactionModel**](../Model/TransactionModel.md)| Transaction object | [optional]

### Return type

[**\BumbalClient\Model\TransactionSetResponse**](../Model/TransactionSetResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token**
> \BumbalClient\Model\TransactionTokenResponse token($arguments)

get a transaction token

get a transaction token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$arguments = new \BumbalClient\Model\TransactionTokenArguments(); // \BumbalClient\Model\TransactionTokenArguments | Request Arguments

try {
    $result = $api_instance->token($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->token: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TransactionTokenArguments**](../Model/TransactionTokenArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\TransactionTokenResponse**](../Model/TransactionTokenResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token_0**
> \BumbalClient\Model\TransactionTokenIsPaidResponse token_0($arguments)

set a transaction to paid with token

set a transaction to paid with token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TransactionApi();
$arguments = new \BumbalClient\Model\TransactionTokenIsPaidArguments(); // \BumbalClient\Model\TransactionTokenIsPaidArguments | Request Arguments

try {
    $result = $api_instance->token_0($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->token_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TransactionTokenIsPaidArguments**](../Model/TransactionTokenIsPaidArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\TransactionTokenIsPaidResponse**](../Model/TransactionTokenIsPaidResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token_1**
> \BumbalClient\Model\TransactionTokenIsCancelledResponse token_1($arguments)

set a transaction to cancelled with token

set a transaction to cancelled with token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TransactionApi();
$arguments = new \BumbalClient\Model\TransactionTokenIsCancelledArguments(); // \BumbalClient\Model\TransactionTokenIsCancelledArguments | Request Arguments

try {
    $result = $api_instance->token_1($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->token_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TransactionTokenIsCancelledArguments**](../Model/TransactionTokenIsCancelledArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\TransactionTokenIsCancelledResponse**](../Model/TransactionTokenIsCancelledResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **token_2**
> \BumbalClient\Model\TransactionTokenHasFailedResponse token_2($arguments)

set a transaction to failed with token

set a transaction to failed with token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\TransactionApi();
$arguments = new \BumbalClient\Model\TransactionTokenHasFailedArguments(); // \BumbalClient\Model\TransactionTokenHasFailedArguments | Request Arguments

try {
    $result = $api_instance->token_2($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->token_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TransactionTokenHasFailedArguments**](../Model/TransactionTokenHasFailedArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\TransactionTokenHasFailedResponse**](../Model/TransactionTokenHasFailedResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \BumbalClient\Model\TransactionUpdateResponse updateTransaction($transaction_id, $body)

Update a specific Transaction object

Update a specific Transaction object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\TransactionApi();
$transaction_id = 789; // int | ID of the Transaction object to update
$body = new \BumbalClient\Model\TransactionModel(); // \BumbalClient\Model\TransactionModel | Transaction object that needs to be updated

try {
    $result = $api_instance->updateTransaction($transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **int**| ID of the Transaction object to update |
 **body** | [**\BumbalClient\Model\TransactionModel**](../Model/TransactionModel.md)| Transaction object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\TransactionUpdateResponse**](../Model/TransactionUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

