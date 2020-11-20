# BumbalClient\WebhookApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**triggerWebHook**](WebhookApi.md#triggerWebHook) | **POST** /web-hook/trigger | Trigger a webhook


# **triggerWebHook**
> \BumbalClient\Model\ApiResponse triggerWebHook($object_id, $web_hook_name, $extra_payload)

Trigger a webhook

Manually trigger a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\WebhookApi();
$object_id = 56; // int | objectId
$web_hook_name = array("web_hook_name_example"); // string[] | Name of this Web Hook
$extra_payload = array(new \BumbalClient\Model\\BumbalClient\Model\PayloadItem()); // \BumbalClient\Model\PayloadItem[] | extra payload to be sent when the webhook is triggered

try {
    $result = $api_instance->triggerWebHook($object_id, $web_hook_name, $extra_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->triggerWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| objectId |
 **web_hook_name** | [**string[]**](../Model/string.md)| Name of this Web Hook |
 **extra_payload** | [**\BumbalClient\Model\PayloadItem[]**](../Model/\BumbalClient\Model\PayloadItem.md)| extra payload to be sent when the webhook is triggered | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

