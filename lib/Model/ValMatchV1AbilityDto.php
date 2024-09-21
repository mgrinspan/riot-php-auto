<?php
/**
 * ValMatchV1AbilityDto
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
 * ValMatchV1AbilityDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValMatchV1AbilityDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'val-match-v1.AbilityDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'grenade_effects' => 'string',
        'ability1_effects' => 'string',
        'ability2_effects' => 'string',
        'ultimate_effects' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'grenade_effects' => null,
        'ability1_effects' => null,
        'ability2_effects' => null,
        'ultimate_effects' => null
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
        'grenade_effects' => 'grenadeEffects',
        'ability1_effects' => 'ability1Effects',
        'ability2_effects' => 'ability2Effects',
        'ultimate_effects' => 'ultimateEffects'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grenade_effects' => 'setGrenadeEffects',
        'ability1_effects' => 'setAbility1Effects',
        'ability2_effects' => 'setAbility2Effects',
        'ultimate_effects' => 'setUltimateEffects'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grenade_effects' => 'getGrenadeEffects',
        'ability1_effects' => 'getAbility1Effects',
        'ability2_effects' => 'getAbility2Effects',
        'ultimate_effects' => 'getUltimateEffects'
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
        $this->container['grenade_effects'] = isset($data['grenade_effects']) ? $data['grenade_effects'] : null;
        $this->container['ability1_effects'] = isset($data['ability1_effects']) ? $data['ability1_effects'] : null;
        $this->container['ability2_effects'] = isset($data['ability2_effects']) ? $data['ability2_effects'] : null;
        $this->container['ultimate_effects'] = isset($data['ultimate_effects']) ? $data['ultimate_effects'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets grenade_effects
     *
     * @return string
     */
    public function getGrenadeEffects()
    {
        return $this->container['grenade_effects'];
    }

    /**
     * Sets grenade_effects
     *
     * @param string $grenade_effects grenade_effects
     *
     * @return $this
     */
    public function setGrenadeEffects($grenade_effects)
    {
        $this->container['grenade_effects'] = $grenade_effects;

        return $this;
    }

    /**
     * Gets ability1_effects
     *
     * @return string
     */
    public function getAbility1Effects()
    {
        return $this->container['ability1_effects'];
    }

    /**
     * Sets ability1_effects
     *
     * @param string $ability1_effects ability1_effects
     *
     * @return $this
     */
    public function setAbility1Effects($ability1_effects)
    {
        $this->container['ability1_effects'] = $ability1_effects;

        return $this;
    }

    /**
     * Gets ability2_effects
     *
     * @return string
     */
    public function getAbility2Effects()
    {
        return $this->container['ability2_effects'];
    }

    /**
     * Sets ability2_effects
     *
     * @param string $ability2_effects ability2_effects
     *
     * @return $this
     */
    public function setAbility2Effects($ability2_effects)
    {
        $this->container['ability2_effects'] = $ability2_effects;

        return $this;
    }

    /**
     * Gets ultimate_effects
     *
     * @return string
     */
    public function getUltimateEffects()
    {
        return $this->container['ultimate_effects'];
    }

    /**
     * Sets ultimate_effects
     *
     * @param string $ultimate_effects ultimate_effects
     *
     * @return $this
     */
    public function setUltimateEffects($ultimate_effects)
    {
        $this->container['ultimate_effects'] = $ultimate_effects;

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


