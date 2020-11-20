<?php
/**
 * AddressOptionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
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

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * AddressOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddressOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddressOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_phone_nrs' => 'bool',
        'include_emails' => 'bool',
        'include_address_tags' => 'bool',
        'include_party_info' => 'bool',
        'include_address_type_names' => 'bool',
        'include_address_meta_data' => 'bool',
        'include_address_files' => 'bool',
        'include_address_notes' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_phone_nrs' => null,
        'include_emails' => null,
        'include_address_tags' => null,
        'include_party_info' => null,
        'include_address_type_names' => null,
        'include_address_meta_data' => null,
        'include_address_files' => null,
        'include_address_notes' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'include_phone_nrs' => 'include_phone_nrs',
        'include_emails' => 'include_emails',
        'include_address_tags' => 'include_address_tags',
        'include_party_info' => 'include_party_info',
        'include_address_type_names' => 'include_address_type_names',
        'include_address_meta_data' => 'include_address_meta_data',
        'include_address_files' => 'include_address_files',
        'include_address_notes' => 'include_address_notes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_phone_nrs' => 'setIncludePhoneNrs',
        'include_emails' => 'setIncludeEmails',
        'include_address_tags' => 'setIncludeAddressTags',
        'include_party_info' => 'setIncludePartyInfo',
        'include_address_type_names' => 'setIncludeAddressTypeNames',
        'include_address_meta_data' => 'setIncludeAddressMetaData',
        'include_address_files' => 'setIncludeAddressFiles',
        'include_address_notes' => 'setIncludeAddressNotes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_phone_nrs' => 'getIncludePhoneNrs',
        'include_emails' => 'getIncludeEmails',
        'include_address_tags' => 'getIncludeAddressTags',
        'include_party_info' => 'getIncludePartyInfo',
        'include_address_type_names' => 'getIncludeAddressTypeNames',
        'include_address_meta_data' => 'getIncludeAddressMetaData',
        'include_address_files' => 'getIncludeAddressFiles',
        'include_address_notes' => 'getIncludeAddressNotes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['include_phone_nrs'] = isset($data['include_phone_nrs']) ? $data['include_phone_nrs'] : null;
        $this->container['include_emails'] = isset($data['include_emails']) ? $data['include_emails'] : null;
        $this->container['include_address_tags'] = isset($data['include_address_tags']) ? $data['include_address_tags'] : null;
        $this->container['include_party_info'] = isset($data['include_party_info']) ? $data['include_party_info'] : null;
        $this->container['include_address_type_names'] = isset($data['include_address_type_names']) ? $data['include_address_type_names'] : null;
        $this->container['include_address_meta_data'] = isset($data['include_address_meta_data']) ? $data['include_address_meta_data'] : null;
        $this->container['include_address_files'] = isset($data['include_address_files']) ? $data['include_address_files'] : null;
        $this->container['include_address_notes'] = isset($data['include_address_notes']) ? $data['include_address_notes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets include_phone_nrs
     * @return bool
     */
    public function getIncludePhoneNrs()
    {
        return $this->container['include_phone_nrs'];
    }

    /**
     * Sets include_phone_nrs
     * @param bool $include_phone_nrs 
     * @return $this
     */
    public function setIncludePhoneNrs($include_phone_nrs)
    {
        $this->container['include_phone_nrs'] = $include_phone_nrs;

        return $this;
    }

    /**
     * Gets include_emails
     * @return bool
     */
    public function getIncludeEmails()
    {
        return $this->container['include_emails'];
    }

    /**
     * Sets include_emails
     * @param bool $include_emails 
     * @return $this
     */
    public function setIncludeEmails($include_emails)
    {
        $this->container['include_emails'] = $include_emails;

        return $this;
    }

    /**
     * Gets include_address_tags
     * @return bool
     */
    public function getIncludeAddressTags()
    {
        return $this->container['include_address_tags'];
    }

    /**
     * Sets include_address_tags
     * @param bool $include_address_tags 
     * @return $this
     */
    public function setIncludeAddressTags($include_address_tags)
    {
        $this->container['include_address_tags'] = $include_address_tags;

        return $this;
    }

    /**
     * Gets include_party_info
     * @return bool
     */
    public function getIncludePartyInfo()
    {
        return $this->container['include_party_info'];
    }

    /**
     * Sets include_party_info
     * @param bool $include_party_info 
     * @return $this
     */
    public function setIncludePartyInfo($include_party_info)
    {
        $this->container['include_party_info'] = $include_party_info;

        return $this;
    }

    /**
     * Gets include_address_type_names
     * @return bool
     */
    public function getIncludeAddressTypeNames()
    {
        return $this->container['include_address_type_names'];
    }

    /**
     * Sets include_address_type_names
     * @param bool $include_address_type_names 
     * @return $this
     */
    public function setIncludeAddressTypeNames($include_address_type_names)
    {
        $this->container['include_address_type_names'] = $include_address_type_names;

        return $this;
    }

    /**
     * Gets include_address_meta_data
     * @return bool
     */
    public function getIncludeAddressMetaData()
    {
        return $this->container['include_address_meta_data'];
    }

    /**
     * Sets include_address_meta_data
     * @param bool $include_address_meta_data 
     * @return $this
     */
    public function setIncludeAddressMetaData($include_address_meta_data)
    {
        $this->container['include_address_meta_data'] = $include_address_meta_data;

        return $this;
    }

    /**
     * Gets include_address_files
     * @return bool
     */
    public function getIncludeAddressFiles()
    {
        return $this->container['include_address_files'];
    }

    /**
     * Sets include_address_files
     * @param bool $include_address_files 
     * @return $this
     */
    public function setIncludeAddressFiles($include_address_files)
    {
        $this->container['include_address_files'] = $include_address_files;

        return $this;
    }

    /**
     * Gets include_address_notes
     * @return bool
     */
    public function getIncludeAddressNotes()
    {
        return $this->container['include_address_notes'];
    }

    /**
     * Sets include_address_notes
     * @param bool $include_address_notes 
     * @return $this
     */
    public function setIncludeAddressNotes($include_address_notes)
    {
        $this->container['include_address_notes'] = $include_address_notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


