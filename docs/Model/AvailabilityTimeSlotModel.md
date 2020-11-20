# AvailabilityTimeSlotModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**key** | **string** | unique key per analyzed time slot, uuid type | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**proposed_plan_date_time_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**proposed_plan_date_time_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**proposed_driver** | [**\BumbalClient\Model\DriverModel**](DriverModel.md) |  | [optional] 
**impact** | [**\BumbalClient\Model\AvailabilityTimeSlotImpactModel[]**](AvailabilityTimeSlotImpactModel.md) |  | [optional] 
**follow_up_time_slots** | [**\BumbalClient\Model\AvailabilityFollowUpTimeSlotModel[]**](AvailabilityFollowUpTimeSlotModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


