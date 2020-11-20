# PackageTypeFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updated_at_since** | [**\DateTime**](\DateTime.md) | Show updated since | [optional] 
**updated_at_till** | [**\DateTime**](\DateTime.md) | Show updated till | [optional] 
**id** | **int[]** | Bumbal package line id&#39;s | [optional] 
**nr** | **string[]** | PackageType numbers | [optional] 
**status_id** | **int[]** | StatusIds of PackageType, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed | [optional] 
**status_name** | **string[]** | PackageType Status | [optional] 
**nr_of_packages** | **float** | Number of packages in package line | [optional] 
**package_type_name** | **string[]** | Type of the Packages | [optional] 
**package_type_id** | **int[]** | ID of the package type for the packages | [optional] 
**applied_capacities** | **object** |  | [optional] 
**capacities** | [**\BumbalClient\Model\CapacityModel[]**](CapacityModel.md) |  | [optional] 
**barcode** | **string[]** | barcode for packages | [optional] 
**adr** | **bool** | boolean for whether or not the packages in package line should be considered as ADR | [optional] 
**adr_class** | **int[]** | ADR class of packages in package line | [optional] 
**adr_un_nr** | **int[]** | ADR UN Nr of packages in package line | [optional] 
**temp** | **bool** | boolean for whether or not the packages in package line should be considered as temperature dependent | [optional] 
**temp_min** | **float** | minimum temperature for packages in package line | [optional] 
**temp_max** | **float** | maximum temperature for packages in package line | [optional] 
**hs_code** | **string[]** | Harmonized System code for packages | [optional] 
**description** | **string** | description of this package_line | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**activity_links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**activity_id** | **int[]** | Activity id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


