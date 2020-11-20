<?php
/**
 * NotificationModel
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
 * NotificationModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificationModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NotificationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'object_type' => 'object',
        'object_type_name' => 'object',
        'object_id' => 'int',
        'notification_category_id' => 'int',
        'notification_category_name' => 'string',
        'updated_by_name' => 'string',
        'content' => 'string',
        'active' => 'bool',
        'notification_created_at' => '\DateTime',
        'notification_updated_at' => '\DateTime',
        'notification_created_by' => 'int',
        'notification_updated_by' => 'int',
        'users' => '\BumbalClient\Model\UserNotificationModel[]',
        'role_names' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'object_type' => null,
        'object_type_name' => null,
        'object_id' => null,
        'notification_category_id' => null,
        'notification_category_name' => null,
        'updated_by_name' => null,
        'content' => null,
        'active' => null,
        'notification_created_at' => 'date-time',
        'notification_updated_at' => 'date-time',
        'notification_created_by' => null,
        'notification_updated_by' => null,
        'users' => null,
        'role_names' => null
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
        'object_type' => 'object_type',
        'object_type_name' => 'object_type_name',
        'object_id' => 'object_id',
        'notification_category_id' => 'notification_category_id',
        'notification_category_name' => 'notification_category_name',
        'updated_by_name' => 'updated_by_name',
        'content' => 'content',
        'active' => 'active',
        'notification_created_at' => 'notification_created_at',
        'notification_updated_at' => 'notification_updated_at',
        'notification_created_by' => 'notification_created_by',
        'notification_updated_by' => 'notification_updated_by',
        'users' => 'users',
        'role_names' => 'role_names'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_type' => 'setObjectType',
        'object_type_name' => 'setObjectTypeName',
        'object_id' => 'setObjectId',
        'notification_category_id' => 'setNotificationCategoryId',
        'notification_category_name' => 'setNotificationCategoryName',
        'updated_by_name' => 'setUpdatedByName',
        'content' => 'setContent',
        'active' => 'setActive',
        'notification_created_at' => 'setNotificationCreatedAt',
        'notification_updated_at' => 'setNotificationUpdatedAt',
        'notification_created_by' => 'setNotificationCreatedBy',
        'notification_updated_by' => 'setNotificationUpdatedBy',
        'users' => 'setUsers',
        'role_names' => 'setRoleNames'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_type' => 'getObjectType',
        'object_type_name' => 'getObjectTypeName',
        'object_id' => 'getObjectId',
        'notification_category_id' => 'getNotificationCategoryId',
        'notification_category_name' => 'getNotificationCategoryName',
        'updated_by_name' => 'getUpdatedByName',
        'content' => 'getContent',
        'active' => 'getActive',
        'notification_created_at' => 'getNotificationCreatedAt',
        'notification_updated_at' => 'getNotificationUpdatedAt',
        'notification_created_by' => 'getNotificationCreatedBy',
        'notification_updated_by' => 'getNotificationUpdatedBy',
        'users' => 'getUsers',
        'role_names' => 'getRoleNames'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_type_name'] = isset($data['object_type_name']) ? $data['object_type_name'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['notification_category_id'] = isset($data['notification_category_id']) ? $data['notification_category_id'] : null;
        $this->container['notification_category_name'] = isset($data['notification_category_name']) ? $data['notification_category_name'] : null;
        $this->container['updated_by_name'] = isset($data['updated_by_name']) ? $data['updated_by_name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['notification_created_at'] = isset($data['notification_created_at']) ? $data['notification_created_at'] : null;
        $this->container['notification_updated_at'] = isset($data['notification_updated_at']) ? $data['notification_updated_at'] : null;
        $this->container['notification_created_by'] = isset($data['notification_created_by']) ? $data['notification_created_by'] : null;
        $this->container['notification_updated_by'] = isset($data['notification_updated_by']) ? $data['notification_updated_by'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['role_names'] = isset($data['role_names']) ? $data['role_names'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_type
     * @return object
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param object $object_type Object type IDs available for this notification
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_type_name
     * @return object
     */
    public function getObjectTypeName()
    {
        return $this->container['object_type_name'];
    }

    /**
     * Sets object_type_name
     * @param object $object_type_name Object type names available for this notification
     * @return $this
     */
    public function setObjectTypeName($object_type_name)
    {
        $this->container['object_type_name'] = $object_type_name;

        return $this;
    }

    /**
     * Gets object_id
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param int $object_id Object ID
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets notification_category_id
     * @return int
     */
    public function getNotificationCategoryId()
    {
        return $this->container['notification_category_id'];
    }

    /**
     * Sets notification_category_id
     * @param int $notification_category_id Notification category id
     * @return $this
     */
    public function setNotificationCategoryId($notification_category_id)
    {
        $this->container['notification_category_id'] = $notification_category_id;

        return $this;
    }

    /**
     * Gets notification_category_name
     * @return string
     */
    public function getNotificationCategoryName()
    {
        return $this->container['notification_category_name'];
    }

    /**
     * Sets notification_category_name
     * @param string $notification_category_name Notification category name
     * @return $this
     */
    public function setNotificationCategoryName($notification_category_name)
    {
        $this->container['notification_category_name'] = $notification_category_name;

        return $this;
    }

    /**
     * Gets updated_by_name
     * @return string
     */
    public function getUpdatedByName()
    {
        return $this->container['updated_by_name'];
    }

    /**
     * Sets updated_by_name
     * @param string $updated_by_name Notification updated by user full name
     * @return $this
     */
    public function setUpdatedByName($updated_by_name)
    {
        $this->container['updated_by_name'] = $updated_by_name;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Notification content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active if active=0: note has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets notification_created_at
     * @return \DateTime
     */
    public function getNotificationCreatedAt()
    {
        return $this->container['notification_created_at'];
    }

    /**
     * Sets notification_created_at
     * @param \DateTime $notification_created_at created_at date time
     * @return $this
     */
    public function setNotificationCreatedAt($notification_created_at)
    {
        $this->container['notification_created_at'] = $notification_created_at;

        return $this;
    }

    /**
     * Gets notification_updated_at
     * @return \DateTime
     */
    public function getNotificationUpdatedAt()
    {
        return $this->container['notification_updated_at'];
    }

    /**
     * Sets notification_updated_at
     * @param \DateTime $notification_updated_at updated_at date time
     * @return $this
     */
    public function setNotificationUpdatedAt($notification_updated_at)
    {
        $this->container['notification_updated_at'] = $notification_updated_at;

        return $this;
    }

    /**
     * Gets notification_created_by
     * @return int
     */
    public function getNotificationCreatedBy()
    {
        return $this->container['notification_created_by'];
    }

    /**
     * Sets notification_created_by
     * @param int $notification_created_by created_by user id
     * @return $this
     */
    public function setNotificationCreatedBy($notification_created_by)
    {
        $this->container['notification_created_by'] = $notification_created_by;

        return $this;
    }

    /**
     * Gets notification_updated_by
     * @return int
     */
    public function getNotificationUpdatedBy()
    {
        return $this->container['notification_updated_by'];
    }

    /**
     * Sets notification_updated_by
     * @param int $notification_updated_by updated_by user id
     * @return $this
     */
    public function setNotificationUpdatedBy($notification_updated_by)
    {
        $this->container['notification_updated_by'] = $notification_updated_by;

        return $this;
    }

    /**
     * Gets users
     * @return \BumbalClient\Model\UserNotificationModel[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     * @param \BumbalClient\Model\UserNotificationModel[] $users 
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets role_names
     * @return string[]
     */
    public function getRoleNames()
    {
        return $this->container['role_names'];
    }

    /**
     * Sets role_names
     * @param string[] $role_names Roles to enable notification for, works only on create, ignored on update
     * @return $this
     */
    public function setRoleNames($role_names)
    {
        $this->container['role_names'] = $role_names;

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

