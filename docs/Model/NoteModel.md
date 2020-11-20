# NoteModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**object_type** | **object** | Object type IDs available for this note | [optional] 
**object_type_name** | **object** | Object type names available for this note | [optional] 
**object_id** | **int** | Object ID | [optional] 
**object_link** | [**\BumbalClient\Model\LinkModel**](LinkModel.md) |  | [optional] 
**note_category_id** | **int** | Note category id | [optional] 
**note_category_name** | **string** | Note category name | [optional] 
**visible_for_driver** | **bool** | Notition is visible in driver App | [optional] 
**title** | **string** | Note title | [optional] 
**updated_by_name** | **string** | Note updated by user full name | [optional] 
**content** | **string** | Note content | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**active** | **bool** | if active&#x3D;0: note has been removed and is no longer visible in any bumbal interface | [optional] 
**note_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**note_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**note_created_by** | **int** | created_by user id | [optional] 
**note_updated_by** | **int** | updated_by user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


