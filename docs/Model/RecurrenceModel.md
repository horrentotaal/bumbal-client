# RecurrenceModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**name** | **string** | Recurrence name | [optional] 
**type_id** | **int** | recurrence type_id, 11:activity, 24:route | [optional] 
**type_name** | **int** | recurrence type_name, activity, route | [optional] 
**recurrence_type_name** | **string** | recurrence typename, activity or route | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date | [optional] 
**period_id** | **int** | recurrence period_id, 1:day, 2:week, 3:month | [optional] 
**recurrence_period_name** | **string** | recurrence period name: day, week or month | [optional] 
**frequency** | **int** | period frequency of recurrence (2 &#x3D; repeat each 2 days/weeks/months) | [optional] 
**count** | **int** | nr of last recurrence to be created | [optional] 
**show_ahead** | **int** | nr of recurrences to show ahead in system | [optional] 
**current** | **int** | last created recurrence nr | [optional] 
**summary** | **string** | summary of recurrence | [optional] 
**next_run** | [**\DateTime**](\DateTime.md) | Next date on which a new recurrence will be added | [optional] 
**last_run** | [**\DateTime**](\DateTime.md) | Last date on which a new recurrence was added | [optional] 
**active** | **bool** | if active&#x3D;0: recurrence has been removed and is no longer visible in any bumbal interface | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**updated_by_name** | **string** | Recurrence updated by user full name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


