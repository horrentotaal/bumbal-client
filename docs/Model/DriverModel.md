# DriverModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**pause_id** | **int** | id of pause scheme to apply | [optional] 
**uuid** | **string** | unique per user | [optional] 
**addresses** | [**\BumbalClient\Model\AddressModel[]**](AddressModel.md) | user address (mostly interesting for drivers) | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**first_name** | **string** | First Name | [optional] 
**last_name** | **string** | Last Name | [optional] 
**prefix** | **string** | Name Prefix | [optional] 
**full_name** | **string** | Full name | [optional] 
**email** | **string** | Email | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**removed** | **bool** | Whether user is removed or not | [optional] 
**active** | **bool** | Whether user is still active or not | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**driver_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**driver_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**driver_created_by** | **int** | created_by user id | [optional] 
**driver_updated_by** | **int** | created_by user id | [optional] 
**updated_by_name** | **string** | Driver updated by user full name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


