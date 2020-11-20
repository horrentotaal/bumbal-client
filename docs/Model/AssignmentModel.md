# AssignmentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of this Assignment | [optional] 
**party_id** | **int** | Party ID | [optional] 
**booking_account_id** | **int** | Booking account ID | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**tag_ids** | **int[]** | Tag ids | [optional] 
**activities** | [**\BumbalClient\Model\ActivityModel[]**](ActivityModel.md) |  | [optional] 
**booking_account** | [**\BumbalClient\Model\PartyModel**](PartyModel.md) |  | [optional] 
**status_id** | **int** | Status ID of this Assignment | [optional] 
**nr** | **string** | Non-Unique number of this Assignment | [optional] 
**party_link** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**account_name** | **string** | Account Name associated with this Assignment | [optional] 
**party_name** | **string** | Party Name associated with this Assignment | [optional] 
**reference** | **string** | Reference text of this Assignment | [optional] 
**description** | **string** | Description text of this Assignment | [optional] 
**remarks** | **string** | Remarks about this Assignment | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Earliest start time of all Activities is this Assignment | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | Latest end time of all Activities is this Assignment | [optional] 
**multi_day** | **bool** | Multi day type assignment | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**assignment_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**assignment_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**assignment_created_by** | **int** | created_by user id | [optional] 
**assignment_updated_by** | **int** | updated_by user id | [optional] 
**assignment_created_by_user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 
**assignment_updated_by_user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 
**assignment_active** | **bool** | Assignment is active (&#x3D;true). Inactive assignments are not automatically considered in any of the application algorithms and will not be shown in the Bumbal Gui. | [optional] 
**assignment_removed** | **bool** | Assignment is removed (&#x3D;true). Removed assignments are not automatically considered in any of the application algorithms and will not be shown in the Bumbal Gui. Removed assignments are usually irrepairable. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


