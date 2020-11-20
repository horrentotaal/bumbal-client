# VehicleModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**vehicle_type_id** | **int** | Bumbal id for vehicle_type | [optional] 
**vehicle_type_name** | **string** | Bumbal id for vehicle_type | [optional] 
**name** | **string** | name | [optional] 
**registration_nr** | **string** | registration_nr | [optional] 
**speed_factor** | **double** | Speed Factor | [optional] 
**duration_factor** | **double** | Duration Factor | [optional] 
**cost_per_meter** | **double** | Cost per meter | [optional] 
**cost_per_route** | **double** | Cost per route | [optional] 
**cost_per_driving_minute** | **double** | Cost per driving minute | [optional] 
**cost_per_waiting_minute** | **double** | Cost per waiting minute | [optional] 
**cost_per_service_minute** | **double** | Cost per service minute | [optional] 
**applied_capacities** | **object** |  | [optional] 
**capacities** | [**\BumbalClient\Model\CapacityModel[]**](CapacityModel.md) |  | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**updated_by_name** | **string** | Vehicle updated by user full name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


