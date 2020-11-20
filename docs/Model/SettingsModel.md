# SettingsModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**settings_group_id** | **int** | SettingsGroup id of this setting. Possible values: 1: general, 2: address, 3: package, 4: activity, 5: equipment, 6: note, 7: optimisation, 8: filters | [optional] 
**settings_group_name** | **string** | SettingsGroup name of this setting | [optional] 
**key** | **string** | Unique string key for setting identification | [optional] 
**value** | **string** | Set value for setting | [optional] 
**setting_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**setting_updated_by** | **int** | updated_by user id | [optional] 
**setting_updated_by_user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


