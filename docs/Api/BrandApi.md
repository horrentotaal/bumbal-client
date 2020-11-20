# BumbalClient\BrandApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrand**](BrandApi.md#createBrand) | **POST** /brand | Add a new Brand
[**deleteBrand**](BrandApi.md#deleteBrand) | **DELETE** /brand/{brandId} | Delete a Brand
[**retrieveBrand**](BrandApi.md#retrieveBrand) | **GET** /brand/{brandId} | Retrieve a Brand
[**retrieveListBrand**](BrandApi.md#retrieveListBrand) | **PUT** /brand | Retrieve List of Brands
[**setBrand**](BrandApi.md#setBrand) | **POST** /brand/set | Set (create or update) a Brand
[**updateBrand**](BrandApi.md#updateBrand) | **PUT** /brand/{brandId} | Update a Brand


# **createBrand**
> \BumbalClient\Model\ApiResponse createBrand($body)

Add a new Brand

Add a new Brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$body = new \BumbalClient\Model\BrandModel(); // \BumbalClient\Model\BrandModel | Brand object that needs to be created

try {
    $result = $api_instance->createBrand($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->createBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\BrandModel**](../Model/BrandModel.md)| Brand object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBrand**
> \BumbalClient\Model\ApiResponse deleteBrand($brand_id)

Delete a Brand

Delete a Brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$brand_id = 789; // int | ID of brand to delete

try {
    $result = $api_instance->deleteBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->deleteBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| ID of brand to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveBrand**
> \BumbalClient\Model\BrandModel retrieveBrand($brand_id)

Retrieve a Brand

Retrieve an Brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$brand_id = 789; // int | ID of brand to retrieve

try {
    $result = $api_instance->retrieveBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->retrieveBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| ID of brand to retrieve |

### Return type

[**\BumbalClient\Model\BrandModel**](../Model/BrandModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListBrand**
> \BumbalClient\Model\BrandListResponse retrieveListBrand($arguments)

Retrieve List of Brands

Retrieve List of Brands

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$arguments = new \BumbalClient\Model\BrandRetrieveListArguments(); // \BumbalClient\Model\BrandRetrieveListArguments | Brand RetrieveList Arguments

try {
    $result = $api_instance->retrieveListBrand($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->retrieveListBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\BrandRetrieveListArguments**](../Model/BrandRetrieveListArguments.md)| Brand RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\BrandListResponse**](../Model/BrandListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBrand**
> \BumbalClient\Model\ApiResponse setBrand($body)

Set (create or update) a Brand

Set (create or update) a Brand. If id or links are set in the data, and a corresponding brand is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$body = new \BumbalClient\Model\BrandModel(); // \BumbalClient\Model\BrandModel | Brand object

try {
    $result = $api_instance->setBrand($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->setBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\BrandModel**](../Model/BrandModel.md)| Brand object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBrand**
> \BumbalClient\Model\ApiResponse updateBrand($brand_id)

Update a Brand

Update an Brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\BrandApi();
$brand_id = 789; // int | ID of brand to update

try {
    $result = $api_instance->updateBrand($brand_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->updateBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| ID of brand to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

