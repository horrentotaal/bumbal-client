# UsersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**uuid** | **string** | unique per user | [optional] 
**role_id** | **int** | id of the user role, 1: Guest, 2: Driver, 3: Planner, 4: Manager, 5: Admin | [optional] 
**role_name** | **string** | Role name | [optional] 
**party_id** | **int** | Associated Party ID | [optional] 
**first_name** | **string** | First name | [optional] 
**name_prefix** | **string** | Name prefix | [optional] 
**last_name** | **string** | Last name | [optional] 
**full_name** | **string** | Full name | [optional] 
**email** | **string** | user email (used for login) | [optional] 
**password** | **string** | user password (set only, no read) | [optional] 
**lang_code** | **string** | lang code (nl &#x3D; default) | [optional] 
**address_id** | **int** | id of the user address | [optional] 
**addresses** | [**\BumbalClient\Model\AddressModel[]**](AddressModel.md) | user address (mostly interesting for drivers) | [optional] 
**pause_id** | **int** | id of the pause to be applied by default for new user routes | [optional] 
**removed** | **bool** | Whether user is removed or not | [optional] 
**active** | **bool** | Whether user is still active or not | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**zones** | [**\BumbalClient\Model\ZoneModel[]**](ZoneModel.md) |  | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**driver_unavailabilities** | [**\BumbalClient\Model\DriverUnavailabilityModel[]**](DriverUnavailabilityModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


