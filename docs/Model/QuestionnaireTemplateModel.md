# QuestionnaireTemplateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**active** | **bool** | if active&#x3D;0: QuestionnaireTemplate has been removed and is no longer visible in any bumbal interface | [optional] 
**brands** | [**\BumbalClient\Model\BrandModel[]**](BrandModel.md) |  | [optional] 
**brand_ids** | **int[]** | Brand ids | [optional] 
**brand_names** | **string[]** | Brand names | [optional] 
**zones** | [**\BumbalClient\Model\ZoneModel[]**](ZoneModel.md) |  | [optional] 
**zone_ids** | **int[]** | Zone ids | [optional] 
**zone_names** | **string[]** | Zone names | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**tag_ids** | **int[]** | Tag ids | [optional] 
**tag_names** | **string[]** | Tag names | [optional] 
**name** | **string** | Name of the questionnaire template | [optional] 
**questionnaire_type_id** | **int** | Questionnaire type id | [optional] 
**questionnaire_type_name** | **string** | Name of the questionnaire type | [optional] 
**no_tags** | **bool** | if no_tags&#x3D;1: no tags are used for matching | [optional] 
**no_zones** | **bool** | if no_zones&#x3D;1: no zones are used for matching | [optional] 
**questions** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionModel[]**](QuestionnaireTemplateQuestionModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


