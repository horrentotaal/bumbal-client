# CommunicationMappingFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int[]** | Bumbal communication mapping id&#39;s | [optional] 
**communication_template_id** | **int[]** | Bumbal communication template id&#39;s | [optional] 
**communication_template_name** | **string[]** | Bumbal communication template names | [optional] 
**communication_message_type_id** | **int[]** | Bumbal communication message type id&#39;s. Possible options: 1 (&#x3D;cancelled), 2 (&#x3D;invite), 3 (&#x3D;planned), 4 (&#x3D;eta), 5 (&#x3D;executed), 6 (&#x3D;pref_confirmation), 7 (&#x3D;reminder) | [optional] 
**communication_message_type_name** | **string[]** | Bumbal communication message type names. Possible options: cancelled, invite, planned, eta, executed, pref_confirmation, reminder | [optional] 
**communication_delivery_method_id** | **int[]** | Bumbal communication delivery method id&#39;s. possible optiones: 1 (&#x3D;email), 2 (&#x3D;sms) | [optional] 
**communication_delivery_method_name** | **string[]** | Bumbal communication delivery method names. possible optiones: email, sms | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**links** | **object[]** | Activity Link ids | [optional] 
**updated_at_since** | [**\DateTime**](\DateTime.md) | Show updated since | [optional] 
**updated_at_till** | [**\DateTime**](\DateTime.md) | Show updated till | [optional] 
**created_at_since** | [**\DateTime**](\DateTime.md) | Show created since | [optional] 
**created_at_till** | [**\DateTime**](\DateTime.md) | Show created till | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


