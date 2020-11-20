# BumbalClient\AddressApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAddress**](AddressApi.md#retrieveAddress) | **GET** /address/{addressId} | Retrieve a Address
[**retrieveListAddress**](AddressApi.md#retrieveListAddress) | **PUT** /address | Retrieve List of Addresses
[**reverseGeoCodeAddress**](AddressApi.md#reverseGeoCodeAddress) | **POST** /address/reverse-geo-code | Reverse Geo Code a address
[**setAddress**](AddressApi.md#setAddress) | **POST** /address/set | Add a new Address


# **retrieveAddress**
> \BumbalClient\Model\AddressModel retrieveAddress($address_id)

Retrieve a Address

Retrieve an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to retrieve

try {
    $result = $api_instance->retrieveAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to retrieve |

### Return type

[**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAddress**
> \BumbalClient\Model\AddressListResponse retrieveListAddress($arguments)

Retrieve List of Addresses

Retrieve List of Addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressRetrieveListArguments(); // \BumbalClient\Model\AddressRetrieveListArguments | Address RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveListAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressRetrieveListArguments**](../Model/AddressRetrieveListArguments.md)| Address RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\AddressListResponse**](../Model/AddressListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reverseGeoCodeAddress**
> \BumbalClient\Model\AddressReverseGeoCodeResponse reverseGeoCodeAddress($arguments)

Reverse Geo Code a address

Reverse Geo Code a address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressReverseGeoCodeArguments(); // \BumbalClient\Model\AddressReverseGeoCodeArguments | Address Reverse GeoCode Arguments

try {
    $result = $api_instance->reverseGeoCodeAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->reverseGeoCodeAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressReverseGeoCodeArguments**](../Model/AddressReverseGeoCodeArguments.md)| Address Reverse GeoCode Arguments |

### Return type

[**\BumbalClient\Model\AddressReverseGeoCodeResponse**](../Model/AddressReverseGeoCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAddress**
> \BumbalClient\Model\ApiResponse setAddress($body)

Add a new Address

Add a new Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$body = new \BumbalClient\Model\AddressModel(); // \BumbalClient\Model\AddressModel | Address object that needs to be created

try {
    $result = $api_instance->setAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->setAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)| Address object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

