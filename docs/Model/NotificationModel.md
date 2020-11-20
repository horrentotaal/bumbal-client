# NotificationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**object_type** | **object** | Object type IDs available for this notification | [optional] 
**object_type_name** | **object** | Object type names available for this notification | [optional] 
**object_id** | **int** | Object ID | [optional] 
**notification_category_id** | **int** | Notification category id | [optional] 
**notification_category_name** | **string** | Notification category name | [optional] 
**updated_by_name** | **string** | Notification updated by user full name | [optional] 
**content** | **string** | Notification content | [optional] 
**active** | **bool** | if active&#x3D;0: note has been removed and is no longer visible in any bumbal interface | [optional] 
**notification_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**notification_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**notification_created_by** | **int** | created_by user id | [optional] 
**notification_updated_by** | **int** | updated_by user id | [optional] 
**users** | [**\BumbalClient\Model\UserNotificationModel[]**](UserNotificationModel.md) |  | [optional] 
**role_names** | **string[]** | Roles to enable notification for, works only on create, ignored on update | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


