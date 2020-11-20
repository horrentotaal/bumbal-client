# ActivityFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int[]** | Unique Identifier(s) | [optional] 
**assignment_id** | **int[]** | Identifier(s) assignment(s) for activities | [optional] 
**shipment_activity_id** | **int[]** | Unique Identifier(s) partner shipment activity | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | DateTime From | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | DateTime To | [optional] 
**date_time_from_since** | [**\DateTime**](\DateTime.md) | filter activities with a DateTime From since this input | [optional] 
**date_time_from_till** | [**\DateTime**](\DateTime.md) | filter activities with a DateTime From till this input | [optional] 
**date_time_to_since** | [**\DateTime**](\DateTime.md) | filter activities with a DateTime To since this input | [optional] 
**date_time_to_till** | [**\DateTime**](\DateTime.md) | filter activities with a DateTime To till this input | [optional] 
**planned_date_time_from** | [**\DateTime**](\DateTime.md) | Planned DateTime From | [optional] 
**planned_date_time_to** | [**\DateTime**](\DateTime.md) | Planned DateTime To | [optional] 
**planned_date_time_from_since** | [**\DateTime**](\DateTime.md) | filter activities with a planned DateTime From since this input | [optional] 
**planned_date_time_from_till** | [**\DateTime**](\DateTime.md) | filter activities with a planned DateTime From till this input | [optional] 
**planned_date_time_to_since** | [**\DateTime**](\DateTime.md) | filter activities with a planned DateTime To since this input | [optional] 
**planned_date_time_to_till** | [**\DateTime**](\DateTime.md) | filter activities with a planned DateTime To till this input | [optional] 
**updated_at_since** | [**\DateTime**](\DateTime.md) | Show updated since | [optional] 
**updated_at_till** | [**\DateTime**](\DateTime.md) | Show updated till | [optional] 
**status** | **string[]** | Activity Status | [optional] 
**status_name** | **string[]** | Activity Status name | [optional] 
**active** | **int[]** | Active status of Activity, 0 values represent deleted activities | [optional] 
**status_id** | **int[]** | Activity Status id | [optional] 
**activity_type_id** | **int[]** | Activity type id | [optional] 
**locked** | **int[]** | Activity locked status. 0: not locked, 1: locked on route and time, 2: only locked on route | [optional] 
**activity_type_name** | **string[]** | Activity type name | [optional] 
**description** | **string[]** | Activity description (not visible in Bumbal interface) | [optional] 
**reference** | **string[]** | Activity reference | [optional] 
**search_text** | **string** | free search through text and numeric type columns | [optional] 
**route_id** | **int[]** | Route id | [optional] 
**user_id** | **int** | ID of the user who will execute this activity | [optional] 
**party_id** | **int** | Party ID | [optional] 
**recurrence_id** | **int** | Recurrence ID | [optional] 
**depot_address_links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**link** | **object[]** | Activity Link ids | [optional] 
**links** | **object[]** | Activity Link ids | [optional] 
**created_at_since** | [**\DateTime**](\DateTime.md) | Filter by activity created at since | [optional] 
**created_at_till** | [**\DateTime**](\DateTime.md) | Filter by activity created at till | [optional] 
**time_slots_created_at_since** | [**\DateTime**](\DateTime.md) | Filter by time_slots created at since | [optional] 
**time_slots_created_at_till** | [**\DateTime**](\DateTime.md) | Filter by time_slots created at till | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


