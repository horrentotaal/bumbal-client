# BumbalClient\PaymentApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaymentApi.md#createPayment) | **POST** /payment | Add a new Payment
[**deletePayment**](PaymentApi.md#deletePayment) | **DELETE** /payment/{paymentId} | Delete an Payment entry
[**retrieveListPayment**](PaymentApi.md#retrieveListPayment) | **PUT** /payment | Retrieve List of Payment
[**retrievePayment**](PaymentApi.md#retrievePayment) | **GET** /payment/{paymentId} | Retrieve a Payment
[**setPayment**](PaymentApi.md#setPayment) | **POST** /payment/set | Set (create or update) a Payment
[**updatePayment**](PaymentApi.md#updatePayment) | **PUT** /payment/{paymentId} | Update a specific Payment object


# **createPayment**
> \BumbalClient\Model\PaymentCreateResponse createPayment($body)

Add a new Payment

Add a new Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$body = new \BumbalClient\Model\PaymentModel(); // \BumbalClient\Model\PaymentModel | Payment object that needs to be created

try {
    $result = $api_instance->createPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PaymentModel**](../Model/PaymentModel.md)| Payment object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\PaymentCreateResponse**](../Model/PaymentCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePayment**
> \BumbalClient\Model\PaymentDeleteResponse deletePayment($payment_id)

Delete an Payment entry

Delete an Payment entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$payment_id = 789; // int | ID of Payment to delete

try {
    $result = $api_instance->deletePayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->deletePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**| ID of Payment to delete |

### Return type

[**\BumbalClient\Model\PaymentDeleteResponse**](../Model/PaymentDeleteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListPayment**
> \BumbalClient\Model\PaymentListResponse retrieveListPayment($arguments)

Retrieve List of Payment

Retrieve List of Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$arguments = new \BumbalClient\Model\PaymentRetrieveListArguments(); // \BumbalClient\Model\PaymentRetrieveListArguments | Payment RetrieveList Arguments

try {
    $result = $api_instance->retrieveListPayment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->retrieveListPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PaymentRetrieveListArguments**](../Model/PaymentRetrieveListArguments.md)| Payment RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PaymentListResponse**](../Model/PaymentListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePayment**
> \BumbalClient\Model\PaymentModel retrievePayment($payment_id)

Retrieve a Payment

Retrieve an Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$payment_id = 789; // int | ID of Payment to retrieve

try {
    $result = $api_instance->retrievePayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->retrievePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**| ID of Payment to retrieve |

### Return type

[**\BumbalClient\Model\PaymentModel**](../Model/PaymentModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPayment**
> \BumbalClient\Model\PaymentSetResponse setPayment($body)

Set (create or update) a Payment

Set (create or update) a d=Payment. If id or links are set in the data, and a corresponding Payment is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$body = new \BumbalClient\Model\PaymentModel(); // \BumbalClient\Model\PaymentModel | Payment object

try {
    $result = $api_instance->setPayment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->setPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PaymentModel**](../Model/PaymentModel.md)| Payment object | [optional]

### Return type

[**\BumbalClient\Model\PaymentSetResponse**](../Model/PaymentSetResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayment**
> \BumbalClient\Model\PaymentUpdateResponse updatePayment($payment_id, $body)

Update a specific Payment object

Update a specific Payment object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PaymentApi();
$payment_id = 789; // int | ID of the Payment object to update
$body = new \BumbalClient\Model\PaymentModel(); // \BumbalClient\Model\PaymentModel | Payment object that needs to be updated

try {
    $result = $api_instance->updatePayment($payment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **int**| ID of the Payment object to update |
 **body** | [**\BumbalClient\Model\PaymentModel**](../Model/PaymentModel.md)| Payment object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\PaymentUpdateResponse**](../Model/PaymentUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

