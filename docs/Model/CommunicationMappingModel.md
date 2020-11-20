# CommunicationMappingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID | [optional] 
**name** | **string** | name of communication template | [optional] 
**subject** | **string** | subject of communication template (about 190 chars max, depending on type of chars) | [optional] 
**description** | **string** | description of communication template (about 190 chars max, depending on type of chars) | [optional] 
**content_html** | **string** | html content of communication template for e-mails (Longtext) | [optional] 
**content_text** | **string** | text content of communication template for mobile text messaging (Longtext) | [optional] 
**include_attachments** | **bool** | Whether or not an email should be accompanied with an attachment | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**communication_template_created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**communication_template_updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**communication_template_created_by** | **int** | created_by user id | [optional] 
**communication_template_updated_by** | **int** | updated_by user id | [optional] 
**communication_template_created_by_user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 
**communication_template_updated_by_user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


