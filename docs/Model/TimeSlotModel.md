# TimeSlotModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**time_slot_type** | **string** | Time Slot Type. first-entry (:1), planned (:2), actual (:3) | [optional] 
**time_slot_type_id** | **int** | Time Slot Type ID, by default 1 if left out of the request. 1: first-entry, 2: planned, 3: actual | [optional] 
**activity_id** | **int** | Activity ID to which this TimeSlot belongs | [optional] 
**date_from** | [**\DateTime**](Date.md) |  | [optional] 
**time_from** | **string** |  | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_to** | [**\DateTime**](Date.md) |  | [optional] 
**time_to** | **string** |  | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**planned** | **bool** | true if this time_slot was used to plan the activity within | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


