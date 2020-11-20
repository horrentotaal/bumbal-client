<?php
/**
 * CommunicationModel
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
 * CommunicationModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'saywhen' => 'bool',
        'bumbal' => 'bool',
        'send_invite' => 'bool',
        'send_reminder' => 'bool',
        'send_pref_confirmation' => 'bool',
        'send_planned' => 'bool',
        'send_eta' => 'bool',
        'send_executed' => 'bool',
        'send_cancelled' => 'bool',
        'email' => 'string',
        'phone_nr' => 'string',
        'saywhen_status_id' => 'int',
        'saywhen_status_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'saywhen' => null,
        'bumbal' => null,
        'send_invite' => null,
        'send_reminder' => null,
        'send_pref_confirmation' => null,
        'send_planned' => null,
        'send_eta' => null,
        'send_executed' => null,
        'send_cancelled' => null,
        'email' => null,
        'phone_nr' => null,
        'saywhen_status_id' => null,
        'saywhen_status_name' => null
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
        'id' => 'id',
        'saywhen' => 'saywhen',
        'bumbal' => 'bumbal',
        'send_invite' => 'send_invite',
        'send_reminder' => 'send_reminder',
        'send_pref_confirmation' => 'send_pref_confirmation',
        'send_planned' => 'send_planned',
        'send_eta' => 'send_eta',
        'send_executed' => 'send_executed',
        'send_cancelled' => 'send_cancelled',
        'email' => 'email',
        'phone_nr' => 'phone_nr',
        'saywhen_status_id' => 'saywhen_status_id',
        'saywhen_status_name' => 'saywhen_status_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'saywhen' => 'setSaywhen',
        'bumbal' => 'setBumbal',
        'send_invite' => 'setSendInvite',
        'send_reminder' => 'setSendReminder',
        'send_pref_confirmation' => 'setSendPrefConfirmation',
        'send_planned' => 'setSendPlanned',
        'send_eta' => 'setSendEta',
        'send_executed' => 'setSendExecuted',
        'send_cancelled' => 'setSendCancelled',
        'email' => 'setEmail',
        'phone_nr' => 'setPhoneNr',
        'saywhen_status_id' => 'setSaywhenStatusId',
        'saywhen_status_name' => 'setSaywhenStatusName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'saywhen' => 'getSaywhen',
        'bumbal' => 'getBumbal',
        'send_invite' => 'getSendInvite',
        'send_reminder' => 'getSendReminder',
        'send_pref_confirmation' => 'getSendPrefConfirmation',
        'send_planned' => 'getSendPlanned',
        'send_eta' => 'getSendEta',
        'send_executed' => 'getSendExecuted',
        'send_cancelled' => 'getSendCancelled',
        'email' => 'getEmail',
        'phone_nr' => 'getPhoneNr',
        'saywhen_status_id' => 'getSaywhenStatusId',
        'saywhen_status_name' => 'getSaywhenStatusName'
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

    const SAYWHEN_STATUS_NAME_CANCELLED = 'cancelled';
    const SAYWHEN_STATUS_NAME_OFFERED = 'offered';
    const SAYWHEN_STATUS_NAME_PREFFED = 'preffed';
    const SAYWHEN_STATUS_NAME_CONFIRMED = 'confirmed';
    const SAYWHEN_STATUS_NAME_ACCEPTED = 'accepted';
    const SAYWHEN_STATUS_NAME_PLANNED = 'planned';
    const SAYWHEN_STATUS_NAME_SCHEDULED = 'scheduled';
    const SAYWHEN_STATUS_NAME_STARTED = 'started';
    const SAYWHEN_STATUS_NAME_COMPLETED = 'completed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSaywhenStatusNameAllowableValues()
    {
        return [
            self::SAYWHEN_STATUS_NAME_CANCELLED,
            self::SAYWHEN_STATUS_NAME_OFFERED,
            self::SAYWHEN_STATUS_NAME_PREFFED,
            self::SAYWHEN_STATUS_NAME_CONFIRMED,
            self::SAYWHEN_STATUS_NAME_ACCEPTED,
            self::SAYWHEN_STATUS_NAME_PLANNED,
            self::SAYWHEN_STATUS_NAME_SCHEDULED,
            self::SAYWHEN_STATUS_NAME_STARTED,
            self::SAYWHEN_STATUS_NAME_COMPLETED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['saywhen'] = isset($data['saywhen']) ? $data['saywhen'] : null;
        $this->container['bumbal'] = isset($data['bumbal']) ? $data['bumbal'] : null;
        $this->container['send_invite'] = isset($data['send_invite']) ? $data['send_invite'] : null;
        $this->container['send_reminder'] = isset($data['send_reminder']) ? $data['send_reminder'] : null;
        $this->container['send_pref_confirmation'] = isset($data['send_pref_confirmation']) ? $data['send_pref_confirmation'] : null;
        $this->container['send_planned'] = isset($data['send_planned']) ? $data['send_planned'] : null;
        $this->container['send_eta'] = isset($data['send_eta']) ? $data['send_eta'] : null;
        $this->container['send_executed'] = isset($data['send_executed']) ? $data['send_executed'] : null;
        $this->container['send_cancelled'] = isset($data['send_cancelled']) ? $data['send_cancelled'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_nr'] = isset($data['phone_nr']) ? $data['phone_nr'] : null;
        $this->container['saywhen_status_id'] = isset($data['saywhen_status_id']) ? $data['saywhen_status_id'] : null;
        $this->container['saywhen_status_name'] = isset($data['saywhen_status_name']) ? $data['saywhen_status_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSaywhenStatusNameAllowableValues();
        if (!in_array($this->container['saywhen_status_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'saywhen_status_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getSaywhenStatusNameAllowableValues();
        if (!in_array($this->container['saywhen_status_name'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets saywhen
     * @return bool
     */
    public function getSaywhen()
    {
        return $this->container['saywhen'];
    }

    /**
     * Sets saywhen
     * @param bool $saywhen Whether or not activity should be synced with Saywhen
     * @return $this
     */
    public function setSaywhen($saywhen)
    {
        $this->container['saywhen'] = $saywhen;

        return $this;
    }

    /**
     * Gets bumbal
     * @return bool
     */
    public function getBumbal()
    {
        return $this->container['bumbal'];
    }

    /**
     * Sets bumbal
     * @param bool $bumbal Whether or not activity is handled by Bumbal Communication Server
     * @return $this
     */
    public function setBumbal($bumbal)
    {
        $this->container['bumbal'] = $bumbal;

        return $this;
    }

    /**
     * Gets send_invite
     * @return bool
     */
    public function getSendInvite()
    {
        return $this->container['send_invite'];
    }

    /**
     * Sets send_invite
     * @param bool $send_invite Send invite
     * @return $this
     */
    public function setSendInvite($send_invite)
    {
        $this->container['send_invite'] = $send_invite;

        return $this;
    }

    /**
     * Gets send_reminder
     * @return bool
     */
    public function getSendReminder()
    {
        return $this->container['send_reminder'];
    }

    /**
     * Sets send_reminder
     * @param bool $send_reminder Send reminder
     * @return $this
     */
    public function setSendReminder($send_reminder)
    {
        $this->container['send_reminder'] = $send_reminder;

        return $this;
    }

    /**
     * Gets send_pref_confirmation
     * @return bool
     */
    public function getSendPrefConfirmation()
    {
        return $this->container['send_pref_confirmation'];
    }

    /**
     * Sets send_pref_confirmation
     * @param bool $send_pref_confirmation Send confirmation on preferences received
     * @return $this
     */
    public function setSendPrefConfirmation($send_pref_confirmation)
    {
        $this->container['send_pref_confirmation'] = $send_pref_confirmation;

        return $this;
    }

    /**
     * Gets send_planned
     * @return bool
     */
    public function getSendPlanned()
    {
        return $this->container['send_planned'];
    }

    /**
     * Sets send_planned
     * @param bool $send_planned Send planned notice
     * @return $this
     */
    public function setSendPlanned($send_planned)
    {
        $this->container['send_planned'] = $send_planned;

        return $this;
    }

    /**
     * Gets send_eta
     * @return bool
     */
    public function getSendEta()
    {
        return $this->container['send_eta'];
    }

    /**
     * Sets send_eta
     * @param bool $send_eta Send eta notice
     * @return $this
     */
    public function setSendEta($send_eta)
    {
        $this->container['send_eta'] = $send_eta;

        return $this;
    }

    /**
     * Gets send_executed
     * @return bool
     */
    public function getSendExecuted()
    {
        return $this->container['send_executed'];
    }

    /**
     * Sets send_executed
     * @param bool $send_executed Send executed notice
     * @return $this
     */
    public function setSendExecuted($send_executed)
    {
        $this->container['send_executed'] = $send_executed;

        return $this;
    }

    /**
     * Gets send_cancelled
     * @return bool
     */
    public function getSendCancelled()
    {
        return $this->container['send_cancelled'];
    }

    /**
     * Sets send_cancelled
     * @param bool $send_cancelled Send cancelled notice
     * @return $this
     */
    public function setSendCancelled($send_cancelled)
    {
        $this->container['send_cancelled'] = $send_cancelled;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email for customer communication
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_nr
     * @return string
     */
    public function getPhoneNr()
    {
        return $this->container['phone_nr'];
    }

    /**
     * Sets phone_nr
     * @param string $phone_nr Phone nr for customer communication
     * @return $this
     */
    public function setPhoneNr($phone_nr)
    {
        $this->container['phone_nr'] = $phone_nr;

        return $this;
    }

    /**
     * Gets saywhen_status_id
     * @return int
     */
    public function getSaywhenStatusId()
    {
        return $this->container['saywhen_status_id'];
    }

    /**
     * Sets saywhen_status_id
     * @param int $saywhen_status_id Saywhen StatusId of this Activity, 1:cancelled, 2:offered, 3:preffed, 4:confirmed, 5:accepted, 6:planned, 7:scheduled, 8:started, 9:completed
     * @return $this
     */
    public function setSaywhenStatusId($saywhen_status_id)
    {
        $this->container['saywhen_status_id'] = $saywhen_status_id;

        return $this;
    }

    /**
     * Gets saywhen_status_name
     * @return string
     */
    public function getSaywhenStatusName()
    {
        return $this->container['saywhen_status_name'];
    }

    /**
     * Sets saywhen_status_name
     * @param string $saywhen_status_name Saywhen Status name
     * @return $this
     */
    public function setSaywhenStatusName($saywhen_status_name)
    {
        $allowed_values = $this->getSaywhenStatusNameAllowableValues();
        if (!is_null($saywhen_status_name) && !in_array($saywhen_status_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'saywhen_status_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['saywhen_status_name'] = $saywhen_status_name;

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

