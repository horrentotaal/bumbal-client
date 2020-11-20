<?php
/**
 * NoteApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * NoteApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteApi
{
    /**
     * API Client
     *
     * @var \BumbalClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalClient\ApiClient $apiClient set the API client
     *
     * @return NoteApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteNote
     *
     * Delete an note
     *
     * @param int $note_id ID of the note to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function deleteNote($note_id)
    {
        list($response) = $this->deleteNoteWithHttpInfo($note_id);
        return $response;
    }

    /**
     * Operation deleteNoteWithHttpInfo
     *
     * Delete an note
     *
     * @param int $note_id ID of the note to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteNoteWithHttpInfo($note_id)
    {
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling deleteNote');
        }
        // parse inputs
        $resourcePath = "/note/{noteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/note/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListNote
     *
     * Retrieve List of Notes
     *
     * @param \BumbalClient\Model\NoteRetrieveListArguments $arguments Note RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\NoteModel[]
     */
    public function retrieveListNote($arguments)
    {
        list($response) = $this->retrieveListNoteWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListNoteWithHttpInfo
     *
     * Retrieve List of Notes
     *
     * @param \BumbalClient\Model\NoteRetrieveListArguments $arguments Note RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\NoteModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListNoteWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListNote');
        }
        // parse inputs
        $resourcePath = "/note";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\NoteModel[]',
                '/note'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\NoteModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\NoteModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveNote
     *
     * Find note by ID
     *
     * @param int $note_id ID of note to return (required)
     * @param bool $include_note_tags a list of tags bound to note (required)
     * @param bool $include_note_tag_type_link_ids link ids of the tag types (required)
     * @param bool $include_note_object_link_ids Include teh link ids bound to teh object where teh note belongs to (required)
     * @param bool $include_updated_by include updated_by_name (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\NoteModel
     */
    public function retrieveNote($note_id, $include_note_tags, $include_note_tag_type_link_ids, $include_note_object_link_ids, $include_updated_by)
    {
        list($response) = $this->retrieveNoteWithHttpInfo($note_id, $include_note_tags, $include_note_tag_type_link_ids, $include_note_object_link_ids, $include_updated_by);
        return $response;
    }

    /**
     * Operation retrieveNoteWithHttpInfo
     *
     * Find note by ID
     *
     * @param int $note_id ID of note to return (required)
     * @param bool $include_note_tags a list of tags bound to note (required)
     * @param bool $include_note_tag_type_link_ids link ids of the tag types (required)
     * @param bool $include_note_object_link_ids Include teh link ids bound to teh object where teh note belongs to (required)
     * @param bool $include_updated_by include updated_by_name (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\NoteModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveNoteWithHttpInfo($note_id, $include_note_tags, $include_note_tag_type_link_ids, $include_note_object_link_ids, $include_updated_by)
    {
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling retrieveNote');
        }
        // verify the required parameter 'include_note_tags' is set
        if ($include_note_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_note_tags when calling retrieveNote');
        }
        // verify the required parameter 'include_note_tag_type_link_ids' is set
        if ($include_note_tag_type_link_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_note_tag_type_link_ids when calling retrieveNote');
        }
        // verify the required parameter 'include_note_object_link_ids' is set
        if ($include_note_object_link_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_note_object_link_ids when calling retrieveNote');
        }
        // verify the required parameter 'include_updated_by' is set
        if ($include_updated_by === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_updated_by when calling retrieveNote');
        }
        // parse inputs
        $resourcePath = "/note/{noteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($include_note_tags !== null) {
            $queryParams['include_note_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_note_tags);
        }
        // query params
        if ($include_note_tag_type_link_ids !== null) {
            $queryParams['include_note_tag_type_link_ids'] = $this->apiClient->getSerializer()->toQueryValue($include_note_tag_type_link_ids);
        }
        // query params
        if ($include_note_object_link_ids !== null) {
            $queryParams['include_note_object_link_ids'] = $this->apiClient->getSerializer()->toQueryValue($include_note_object_link_ids);
        }
        // query params
        if ($include_updated_by !== null) {
            $queryParams['include_updated_by'] = $this->apiClient->getSerializer()->toQueryValue($include_updated_by);
        }
        // path params
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\NoteModel',
                '/note/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\NoteModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\NoteModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setNote
     *
     * Set (create or update) a note
     *
     * @param \BumbalClient\Model\NoteModel $body Note object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setNote($body = null)
    {
        list($response) = $this->setNoteWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setNoteWithHttpInfo
     *
     * Set (create or update) a note
     *
     * @param \BumbalClient\Model\NoteModel $body Note object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setNoteWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/note/set";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/note/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}