# BumbalClient\PartyApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createParty**](PartyApi.md#createParty) | **POST** /party | Create or update an Party
[**deleteParty**](PartyApi.md#deleteParty) | **DELETE** /party/{partyId} | Delete an party
[**retrieveListParty**](PartyApi.md#retrieveListParty) | **PUT** /party | Retrieve List of Parties
[**retrieveParty**](PartyApi.md#retrieveParty) | **GET** /party/{partyId} | Find party by ID
[**setParty**](PartyApi.md#setParty) | **POST** /party/set | Set (create or update) an Party
[**updateParty**](PartyApi.md#updateParty) | **PUT** /party/{partyId} | Update a party


# **createParty**
> \BumbalClient\Model\ApiResponse createParty($body)

Create or update an Party

Create or update an Party. If id or links are set in the data, and a corresponding party    *     is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$body = new \BumbalClient\Model\PartyModel(); // \BumbalClient\Model\PartyModel | Party object

try {
    $result = $api_instance->createParty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->createParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PartyModel**](../Model/PartyModel.md)| Party object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParty**
> \BumbalClient\Model\ApiResponse deleteParty($party_id)

Delete an party

Delete an party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of the party to delete

try {
    $result = $api_instance->deleteParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->deleteParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of the party to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListParty**
> \BumbalClient\Model\PartyListResponse retrieveListParty($arguments)

Retrieve List of Parties

Retrieve List of Parties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$arguments = new \BumbalClient\Model\PartyRetrieveListArguments(); // \BumbalClient\Model\PartyRetrieveListArguments | Party RetrieveList Arguments

try {
    $result = $api_instance->retrieveListParty($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->retrieveListParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\PartyRetrieveListArguments**](../Model/PartyRetrieveListArguments.md)| Party RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\PartyListResponse**](../Model/PartyListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveParty**
> \BumbalClient\Model\PartyModel retrieveParty($party_id)

Find party by ID

Returns a single party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of party to return

try {
    $result = $api_instance->retrieveParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->retrieveParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of party to return |

### Return type

[**\BumbalClient\Model\PartyModel**](../Model/PartyModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParty**
> \BumbalClient\Model\ApiResponse setParty($body)

Set (create or update) an Party

Set (create or update) an Party. If id or links are set in the data, and a corresponding party             is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$body = new \BumbalClient\Model\PartyModel(); // \BumbalClient\Model\PartyModel | Party object

try {
    $result = $api_instance->setParty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->setParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\PartyModel**](../Model/PartyModel.md)| Party object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParty**
> \BumbalClient\Model\ApiResponse updateParty($party_id, $body)

Update a party

Update a party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of party to update
$body = new \BumbalClient\Model\PartyModel(); // \BumbalClient\Model\PartyModel | Party object that needs to be updated

try {
    $result = $api_instance->updateParty($party_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->updateParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of party to update |
 **body** | [**\BumbalClient\Model\PartyModel**](../Model/PartyModel.md)| Party object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

