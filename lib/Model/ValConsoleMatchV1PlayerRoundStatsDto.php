<?php
/**
 * ValConsoleMatchV1PlayerRoundStatsDto
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
 * ValConsoleMatchV1PlayerRoundStatsDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValConsoleMatchV1PlayerRoundStatsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'val-console-match-v1.PlayerRoundStatsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'puuid' => 'string',
        'kills' => '\Swagger\Client\Model\ValConsoleMatchV1KillDto[]',
        'damage' => '\Swagger\Client\Model\ValConsoleMatchV1DamageDto[]',
        'score' => 'int',
        'economy' => '\Swagger\Client\Model\ValConsoleMatchV1EconomyDto',
        'ability' => '\Swagger\Client\Model\ValConsoleMatchV1AbilityDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'puuid' => null,
        'kills' => null,
        'damage' => null,
        'score' => 'int32',
        'economy' => null,
        'ability' => null
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
        'puuid' => 'puuid',
        'kills' => 'kills',
        'damage' => 'damage',
        'score' => 'score',
        'economy' => 'economy',
        'ability' => 'ability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'puuid' => 'setPuuid',
        'kills' => 'setKills',
        'damage' => 'setDamage',
        'score' => 'setScore',
        'economy' => 'setEconomy',
        'ability' => 'setAbility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'puuid' => 'getPuuid',
        'kills' => 'getKills',
        'damage' => 'getDamage',
        'score' => 'getScore',
        'economy' => 'getEconomy',
        'ability' => 'getAbility'
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
        $this->container['puuid'] = isset($data['puuid']) ? $data['puuid'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['damage'] = isset($data['damage']) ? $data['damage'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['economy'] = isset($data['economy']) ? $data['economy'] : null;
        $this->container['ability'] = isset($data['ability']) ? $data['ability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['puuid'] === null) {
            $invalidProperties[] = "'puuid' can't be null";
        }
        if ($this->container['kills'] === null) {
            $invalidProperties[] = "'kills' can't be null";
        }
        if ($this->container['damage'] === null) {
            $invalidProperties[] = "'damage' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['economy'] === null) {
            $invalidProperties[] = "'economy' can't be null";
        }
        if ($this->container['ability'] === null) {
            $invalidProperties[] = "'ability' can't be null";
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
     * Gets puuid
     *
     * @return string
     */
    public function getPuuid()
    {
        return $this->container['puuid'];
    }

    /**
     * Sets puuid
     *
     * @param string $puuid puuid
     *
     * @return $this
     */
    public function setPuuid($puuid)
    {
        $this->container['puuid'] = $puuid;

        return $this;
    }

    /**
     * Gets kills
     *
     * @return \Swagger\Client\Model\ValConsoleMatchV1KillDto[]
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     *
     * @param \Swagger\Client\Model\ValConsoleMatchV1KillDto[] $kills kills
     *
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets damage
     *
     * @return \Swagger\Client\Model\ValConsoleMatchV1DamageDto[]
     */
    public function getDamage()
    {
        return $this->container['damage'];
    }

    /**
     * Sets damage
     *
     * @param \Swagger\Client\Model\ValConsoleMatchV1DamageDto[] $damage damage
     *
     * @return $this
     */
    public function setDamage($damage)
    {
        $this->container['damage'] = $damage;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets economy
     *
     * @return \Swagger\Client\Model\ValConsoleMatchV1EconomyDto
     */
    public function getEconomy()
    {
        return $this->container['economy'];
    }

    /**
     * Sets economy
     *
     * @param \Swagger\Client\Model\ValConsoleMatchV1EconomyDto $economy economy
     *
     * @return $this
     */
    public function setEconomy($economy)
    {
        $this->container['economy'] = $economy;

        return $this;
    }

    /**
     * Gets ability
     *
     * @return \Swagger\Client\Model\ValConsoleMatchV1AbilityDto
     */
    public function getAbility()
    {
        return $this->container['ability'];
    }

    /**
     * Sets ability
     *
     * @param \Swagger\Client\Model\ValConsoleMatchV1AbilityDto $ability ability
     *
     * @return $this
     */
    public function setAbility($ability)
    {
        $this->container['ability'] = $ability;

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


