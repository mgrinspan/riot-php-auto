<?php
/**
 * MatchV5MatchTimelineVictimDamage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Riot API
 *
 * OpenAPI/Swagger version of the [Riot API](https://developer.riotgames.com/). Automatically generated daily. ## OpenAPI Spec File The following versions of the Riot API spec file are available: - `openapi-3.0.0.json` ([view file](../openapi-3.0.0.json), [ui select](?url=../openapi-3.0.0.json)) - `openapi-3.0.0.min.json` ([view file](../openapi-3.0.0.min.json), [ui select](?url=../openapi-3.0.0.min.json)) - `openapi-3.0.0.yml` ([view file](../openapi-3.0.0.yml), [ui select](?url=../openapi-3.0.0.yml)) - `openapi-3.0.0.min.yml` ([view file](../openapi-3.0.0.min.yml), [ui select](?url=../openapi-3.0.0.min.yml)) - `swaggerspec-2.0.json` ([view file](../swaggerspec-2.0.json), [ui select](?url=../swaggerspec-2.0.json)) - `swaggerspec-2.0.min.json` ([view file](../swaggerspec-2.0.min.json), [ui select](?url=../swaggerspec-2.0.min.json)) - `swaggerspec-2.0.yml` ([view file](../swaggerspec-2.0.yml), [ui select](?url=../swaggerspec-2.0.yml)) - `swaggerspec-2.0.min.yml` ([view file](../swaggerspec-2.0.min.yml), [ui select](?url=../swaggerspec-2.0.min.yml)) ## Other Files - Missing DTOs: [`missing.json`](../missing.json) - Routes Table: [`routesTable.json`](../routesTable.json) - [Enum Files](../enums/) ## Source Code Source code on [GitHub](https://github.com/MingweiSamuel/riotapi-schema). Pull requests welcome! ## Automatically Generated Rebuilt on [Travis CI](https://travis-ci.com/MingweiSamuel/riotapi-schema/builds) daily. ***
 *
 * OpenAPI spec version: b7cd9f901117fa03f7c4e5f9c0a954dac569f75a
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * MatchV5MatchTimelineVictimDamage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchV5MatchTimelineVictimDamage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'match-v5.MatchTimelineVictimDamage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'basic' => 'bool',
        'magic_damage' => 'int',
        'name' => 'string',
        'participant_id' => 'int',
        'physical_damage' => 'int',
        'spell_name' => 'string',
        'spell_slot' => 'int',
        'true_damage' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'basic' => null,
        'magic_damage' => 'int32',
        'name' => null,
        'participant_id' => 'int32',
        'physical_damage' => 'int32',
        'spell_name' => null,
        'spell_slot' => 'int32',
        'true_damage' => 'int32',
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'basic' => 'basic',
        'magic_damage' => 'magicDamage',
        'name' => 'name',
        'participant_id' => 'participantId',
        'physical_damage' => 'physicalDamage',
        'spell_name' => 'spellName',
        'spell_slot' => 'spellSlot',
        'true_damage' => 'trueDamage',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basic' => 'setBasic',
        'magic_damage' => 'setMagicDamage',
        'name' => 'setName',
        'participant_id' => 'setParticipantId',
        'physical_damage' => 'setPhysicalDamage',
        'spell_name' => 'setSpellName',
        'spell_slot' => 'setSpellSlot',
        'true_damage' => 'setTrueDamage',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basic' => 'getBasic',
        'magic_damage' => 'getMagicDamage',
        'name' => 'getName',
        'participant_id' => 'getParticipantId',
        'physical_damage' => 'getPhysicalDamage',
        'spell_name' => 'getSpellName',
        'spell_slot' => 'getSpellSlot',
        'true_damage' => 'getTrueDamage',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['magic_damage'] = isset($data['magic_damage']) ? $data['magic_damage'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['participant_id'] = isset($data['participant_id']) ? $data['participant_id'] : null;
        $this->container['physical_damage'] = isset($data['physical_damage']) ? $data['physical_damage'] : null;
        $this->container['spell_name'] = isset($data['spell_name']) ? $data['spell_name'] : null;
        $this->container['spell_slot'] = isset($data['spell_slot']) ? $data['spell_slot'] : null;
        $this->container['true_damage'] = isset($data['true_damage']) ? $data['true_damage'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['basic'] === null) {
            $invalidProperties[] = "'basic' can't be null";
        }
        if ($this->container['magic_damage'] === null) {
            $invalidProperties[] = "'magic_damage' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['participant_id'] === null) {
            $invalidProperties[] = "'participant_id' can't be null";
        }
        if ($this->container['physical_damage'] === null) {
            $invalidProperties[] = "'physical_damage' can't be null";
        }
        if ($this->container['spell_name'] === null) {
            $invalidProperties[] = "'spell_name' can't be null";
        }
        if ($this->container['spell_slot'] === null) {
            $invalidProperties[] = "'spell_slot' can't be null";
        }
        if ($this->container['true_damage'] === null) {
            $invalidProperties[] = "'true_damage' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets basic
     *
     * @return bool
     */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
     * Sets basic
     *
     * @param bool $basic basic
     *
     * @return $this
     */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;

        return $this;
    }

    /**
     * Gets magic_damage
     *
     * @return int
     */
    public function getMagicDamage()
    {
        return $this->container['magic_damage'];
    }

    /**
     * Sets magic_damage
     *
     * @param int $magic_damage magic_damage
     *
     * @return $this
     */
    public function setMagicDamage($magic_damage)
    {
        $this->container['magic_damage'] = $magic_damage;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets participant_id
     *
     * @return int
     */
    public function getParticipantId()
    {
        return $this->container['participant_id'];
    }

    /**
     * Sets participant_id
     *
     * @param int $participant_id participant_id
     *
     * @return $this
     */
    public function setParticipantId($participant_id)
    {
        $this->container['participant_id'] = $participant_id;

        return $this;
    }

    /**
     * Gets physical_damage
     *
     * @return int
     */
    public function getPhysicalDamage()
    {
        return $this->container['physical_damage'];
    }

    /**
     * Sets physical_damage
     *
     * @param int $physical_damage physical_damage
     *
     * @return $this
     */
    public function setPhysicalDamage($physical_damage)
    {
        $this->container['physical_damage'] = $physical_damage;

        return $this;
    }

    /**
     * Gets spell_name
     *
     * @return string
     */
    public function getSpellName()
    {
        return $this->container['spell_name'];
    }

    /**
     * Sets spell_name
     *
     * @param string $spell_name spell_name
     *
     * @return $this
     */
    public function setSpellName($spell_name)
    {
        $this->container['spell_name'] = $spell_name;

        return $this;
    }

    /**
     * Gets spell_slot
     *
     * @return int
     */
    public function getSpellSlot()
    {
        return $this->container['spell_slot'];
    }

    /**
     * Sets spell_slot
     *
     * @param int $spell_slot spell_slot
     *
     * @return $this
     */
    public function setSpellSlot($spell_slot)
    {
        $this->container['spell_slot'] = $spell_slot;

        return $this;
    }

    /**
     * Gets true_damage
     *
     * @return int
     */
    public function getTrueDamage()
    {
        return $this->container['true_damage'];
    }

    /**
     * Sets true_damage
     *
     * @param int $true_damage true_damage
     *
     * @return $this
     */
    public function setTrueDamage($true_damage)
    {
        $this->container['true_damage'] = $true_damage;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


