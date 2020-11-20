# PackageLineModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**activity_id** | **int** | Unique Identifier for activity where this packageline is related to | [optional] 
**activity_ids** | **int[]** | Unique Identifier for activities where this packageline is related to | [optional] 
**nr** | **string** | Number of this PackageLine | [optional] 
**status_id** | **int** | StatusId of this PackageLine, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed | [optional] 
**status_name** | **string** | PackageLine Status | [optional] 
**nr_of_packages** | **float** | Number of packages in package line | [optional] 
**package_type_name** | **string** | Type of the Packages in the package line | [optional] 
**package_type_id** | **int** | ID of the package type for the packages in this PackageLine | [optional] 
**barcode** | **string** | Barcode of this packageline | [optional] 
**barcodes** | **string[]** | For every barcode in this array, a seperate packageline will be created | [optional] 
**action_type_id** | **string** | Action type name, 1:inbound, 2:outbound, 3:assess | [optional] 
**action_type_name** | **string** | Action type name | [optional] 
**checked_by_driver** | **bool** | boolean for whether or not the packages have been checked by the driver | [optional] 
**adr** | **bool** | boolean for whether or not the packages in this package line should be considered as ADR | [optional] 
**adr_class** | **int** | ADR class of packages in package line | [optional] 
**adr_un_nr** | **int** | ADR UN Nr of packages in package line | [optional] 
**temp** | **bool** | boolean for whether or not the packages in this package line should be considered as temperature dependent | [optional] 
**temp_min** | **float** | minimum temperature for packages in package line | [optional] 
**temp_max** | **float** | maximum temperature for packages in package line | [optional] 
**hs_code** | **string** | Harmonized System code for packages in this package line | [optional] 
**description** | **string** | description of this package_line | [optional] 
**compartments** | [**\BumbalClient\Model\CompartmentModel[]**](CompartmentModel.md) |  | [optional] 
**active** | **bool** | if active&#x3D;0: package line has been removed and is no longer visible in any bumbal interface | [optional] 
**applied_capacities** | **object** |  | [optional] 
**capacities** | [**\BumbalClient\Model\CapacityModel[]**](CapacityModel.md) |  | [optional] 
**activity_links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) | links to activities connected to this package_line | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**package_line_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**package_line_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**package_line_created_by** | **int** | created_by user id | [optional] 
**package_line_updated_by** | **int** | updated_by user id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


