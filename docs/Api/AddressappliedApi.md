# BumbalClient\AddressappliedApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAddressApplied**](AddressappliedApi.md#retrieveAddressApplied) | **GET** /address-applied/{addressId} | Retrieve an Applied Address
[**updateAddressApplied**](AddressappliedApi.md#updateAddressApplied) | **PUT** /address-applied/{addressId} | Update a AddressApplied


# **retrieveAddressApplied**
> \BumbalClient\Model\AddressAppliedModel retrieveAddressApplied($address_id)

Retrieve an Applied Address

Retrieve an Applied Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressappliedApi();
$address_id = 789; // int | ID of the applied address to retrieve

try {
    $result = $api_instance->retrieveAddressApplied($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressappliedApi->retrieveAddressApplied: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of the applied address to retrieve |

### Return type

[**\BumbalClient\Model\AddressAppliedModel**](../Model/AddressAppliedModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddressApplied**
> \BumbalClient\Model\ApiResponse updateAddressApplied($address_id, $body)

Update a AddressApplied

Update an AddressApplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressappliedApi();
$address_id = 789; // int | ID of address to update
$body = new \BumbalClient\Model\AddressAppliedModel(); // \BumbalClient\Model\AddressAppliedModel | AddressApplied object that needs to be updated

try {
    $result = $api_instance->updateAddressApplied($address_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressappliedApi->updateAddressApplied: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to update |
 **body** | [**\BumbalClient\Model\AddressAppliedModel**](../Model/AddressAppliedModel.md)| AddressApplied object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

