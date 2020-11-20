<?php
/**
 * DriverunavailabilityApi
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
 * DriverunavailabilityApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DriverunavailabilityApi
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
     * @return DriverunavailabilityApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createDriverUnavailability
     *
     * Add a new DriverUnavailability
     *
     * @param \BumbalClient\Model\DriverUnavailabilityModel $body DriverUnavailability object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse4
     */
    public function createDriverUnavailability($body = null)
    {
        list($response) = $this->createDriverUnavailabilityWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createDriverUnavailabilityWithHttpInfo
     *
     * Add a new DriverUnavailability
     *
     * @param \BumbalClient\Model\DriverUnavailabilityModel $body DriverUnavailability object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse4, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDriverUnavailabilityWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/driver-unavailability";
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
                '\BumbalClient\Model\ApiResponse4',
                '/driver-unavailability'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse4', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse4', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteDriverUnavailability
     *
     * Delete a DriverUnavailability entry
     *
     * @param int $driverunavailability_id ID of DriverUnavailability to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse2
     */
    public function deleteDriverUnavailability($driverunavailability_id)
    {
        list($response) = $this->deleteDriverUnavailabilityWithHttpInfo($driverunavailability_id);
        return $response;
    }

    /**
     * Operation deleteDriverUnavailabilityWithHttpInfo
     *
     * Delete a DriverUnavailability entry
     *
     * @param int $driverunavailability_id ID of DriverUnavailability to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse2, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDriverUnavailabilityWithHttpInfo($driverunavailability_id)
    {
        // verify the required parameter 'driverunavailability_id' is set
        if ($driverunavailability_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $driverunavailability_id when calling deleteDriverUnavailability');
        }
        // parse inputs
        $resourcePath = "/driver-unavailability/{driverunavailabilityId}";
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
        if ($driverunavailability_id !== null) {
            $resourcePath = str_replace(
                "{" . "driverunavailabilityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($driverunavailability_id),
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
                '\BumbalClient\Model\ApiResponse2',
                '/driver-unavailability/{driverunavailabilityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse2', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse2', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse3', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveDriverUnavailability
     *
     * Retrieve a DriverUnavailability
     *
     * @param int $driverunavailability_id ID of DriverUnavailability to retrieve (required)
     * @param bool $include_object_type_name Show the name of the object type (optional, default to false)
     * @param bool $include_record_info Show the record info (optional, default to false)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\DriverUnavailabilityModel
     */
    public function retrieveDriverUnavailability($driverunavailability_id, $include_object_type_name = 'false', $include_record_info = 'false')
    {
        list($response) = $this->retrieveDriverUnavailabilityWithHttpInfo($driverunavailability_id, $include_object_type_name, $include_record_info);
        return $response;
    }

    /**
     * Operation retrieveDriverUnavailabilityWithHttpInfo
     *
     * Retrieve a DriverUnavailability
     *
     * @param int $driverunavailability_id ID of DriverUnavailability to retrieve (required)
     * @param bool $include_object_type_name Show the name of the object type (optional, default to false)
     * @param bool $include_record_info Show the record info (optional, default to false)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\DriverUnavailabilityModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveDriverUnavailabilityWithHttpInfo($driverunavailability_id, $include_object_type_name = 'false', $include_record_info = 'false')
    {
        // verify the required parameter 'driverunavailability_id' is set
        if ($driverunavailability_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $driverunavailability_id when calling retrieveDriverUnavailability');
        }
        // parse inputs
        $resourcePath = "/driver-unavailability/{driverunavailabilityId}";
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
        if ($include_object_type_name !== null) {
            $queryParams['include_object_type_name'] = $this->apiClient->getSerializer()->toQueryValue($include_object_type_name);
        }
        // query params
        if ($include_record_info !== null) {
            $queryParams['include_record_info'] = $this->apiClient->getSerializer()->toQueryValue($include_record_info);
        }
        // path params
        if ($driverunavailability_id !== null) {
            $resourcePath = str_replace(
                "{" . "driverunavailabilityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($driverunavailability_id),
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
                '\BumbalClient\Model\DriverUnavailabilityModel',
                '/driver-unavailability/{driverunavailabilityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\DriverUnavailabilityModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\DriverUnavailabilityModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListDriverUnavailability
     *
     * Retrieve List of DriverUnavailability
     *
     * @param \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments $arguments DriverUnavailability RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\DriverUnavailabilityListResponse
     */
    public function retrieveListDriverUnavailability($arguments)
    {
        list($response) = $this->retrieveListDriverUnavailabilityWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListDriverUnavailabilityWithHttpInfo
     *
     * Retrieve List of DriverUnavailability
     *
     * @param \BumbalClient\Model\DriverUnavailabilityRetrieveListArguments $arguments DriverUnavailability RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\DriverUnavailabilityListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListDriverUnavailabilityWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListDriverUnavailability');
        }
        // parse inputs
        $resourcePath = "/driver-unavailability";
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
                '\BumbalClient\Model\DriverUnavailabilityListResponse',
                '/driver-unavailability'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\DriverUnavailabilityListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\DriverUnavailabilityListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateDriverUnavailability
     *
     * Update a specific DriverUnavailability object
     *
     * @param int $driverunavailability_id ID of the DriverUnavailability object to update (required)
     * @param \BumbalClient\Model\DriverUnavailabilityModel $body DriverUnavailability object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse1
     */
    public function updateDriverUnavailability($driverunavailability_id, $body = null)
    {
        list($response) = $this->updateDriverUnavailabilityWithHttpInfo($driverunavailability_id, $body);
        return $response;
    }

    /**
     * Operation updateDriverUnavailabilityWithHttpInfo
     *
     * Update a specific DriverUnavailability object
     *
     * @param int $driverunavailability_id ID of the DriverUnavailability object to update (required)
     * @param \BumbalClient\Model\DriverUnavailabilityModel $body DriverUnavailability object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDriverUnavailabilityWithHttpInfo($driverunavailability_id, $body = null)
    {
        // verify the required parameter 'driverunavailability_id' is set
        if ($driverunavailability_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $driverunavailability_id when calling updateDriverUnavailability');
        }
        // parse inputs
        $resourcePath = "/driver-unavailability/{driverunavailabilityId}";
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
        if ($driverunavailability_id !== null) {
            $resourcePath = str_replace(
                "{" . "driverunavailabilityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($driverunavailability_id),
                $resourcePath
            );
        }
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse1',
                '/driver-unavailability/{driverunavailabilityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}