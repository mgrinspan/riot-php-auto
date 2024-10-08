<?php
/**
 * LorMatchV1InfoDto
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
 * LorMatchV1InfoDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LorMatchV1InfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lor-match-v1.InfoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'game_mode' => 'string',
        'game_type' => 'string',
        'game_start_time_utc' => 'string',
        'game_version' => 'string',
        'game_format' => 'string',
        'players' => '\Swagger\Client\Model\LorMatchV1PlayerDto[]',
        'total_turn_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'game_mode' => null,
        'game_type' => null,
        'game_start_time_utc' => null,
        'game_version' => null,
        'game_format' => null,
        'players' => null,
        'total_turn_count' => 'int32'
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
        'game_mode' => 'game_mode',
        'game_type' => 'game_type',
        'game_start_time_utc' => 'game_start_time_utc',
        'game_version' => 'game_version',
        'game_format' => 'game_format',
        'players' => 'players',
        'total_turn_count' => 'total_turn_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'game_mode' => 'setGameMode',
        'game_type' => 'setGameType',
        'game_start_time_utc' => 'setGameStartTimeUtc',
        'game_version' => 'setGameVersion',
        'game_format' => 'setGameFormat',
        'players' => 'setPlayers',
        'total_turn_count' => 'setTotalTurnCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'game_mode' => 'getGameMode',
        'game_type' => 'getGameType',
        'game_start_time_utc' => 'getGameStartTimeUtc',
        'game_version' => 'getGameVersion',
        'game_format' => 'getGameFormat',
        'players' => 'getPlayers',
        'total_turn_count' => 'getTotalTurnCount'
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

    const GAME_MODE_CONSTRUCTED = 'Constructed';
    const GAME_MODE_EXPEDITIONS = 'Expeditions';
    const GAME_MODE_TUTORIAL = 'Tutorial';
    const GAME_TYPE_RANKED = 'Ranked';
    const GAME_TYPE_NORMAL = 'Normal';
    const GAME_TYPE_AI = 'AI';
    const GAME_TYPE_TUTORIAL = 'Tutorial';
    const GAME_TYPE_VANILLA_TRIAL = 'VanillaTrial';
    const GAME_TYPE_SINGLETON = 'Singleton';
    const GAME_TYPE_STANDARD_GAUNTLET = 'StandardGauntlet';
    const GAME_FORMAT_STANDARD = 'standard';
    const GAME_FORMAT_ETERNAL = 'eternal';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGameModeAllowableValues()
    {
        return [
            self::GAME_MODE_CONSTRUCTED,
            self::GAME_MODE_EXPEDITIONS,
            self::GAME_MODE_TUTORIAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGameTypeAllowableValues()
    {
        return [
            self::GAME_TYPE_RANKED,
            self::GAME_TYPE_NORMAL,
            self::GAME_TYPE_AI,
            self::GAME_TYPE_TUTORIAL,
            self::GAME_TYPE_VANILLA_TRIAL,
            self::GAME_TYPE_SINGLETON,
            self::GAME_TYPE_STANDARD_GAUNTLET,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGameFormatAllowableValues()
    {
        return [
            self::GAME_FORMAT_STANDARD,
            self::GAME_FORMAT_ETERNAL,
        ];
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
        $this->container['game_mode'] = isset($data['game_mode']) ? $data['game_mode'] : null;
        $this->container['game_type'] = isset($data['game_type']) ? $data['game_type'] : null;
        $this->container['game_start_time_utc'] = isset($data['game_start_time_utc']) ? $data['game_start_time_utc'] : null;
        $this->container['game_version'] = isset($data['game_version']) ? $data['game_version'] : null;
        $this->container['game_format'] = isset($data['game_format']) ? $data['game_format'] : null;
        $this->container['players'] = isset($data['players']) ? $data['players'] : null;
        $this->container['total_turn_count'] = isset($data['total_turn_count']) ? $data['total_turn_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['game_mode'] === null) {
            $invalidProperties[] = "'game_mode' can't be null";
        }
        $allowedValues = $this->getGameModeAllowableValues();
        if (!is_null($this->container['game_mode']) && !in_array($this->container['game_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'game_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['game_type'] === null) {
            $invalidProperties[] = "'game_type' can't be null";
        }
        $allowedValues = $this->getGameTypeAllowableValues();
        if (!is_null($this->container['game_type']) && !in_array($this->container['game_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'game_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['game_start_time_utc'] === null) {
            $invalidProperties[] = "'game_start_time_utc' can't be null";
        }
        if ($this->container['game_version'] === null) {
            $invalidProperties[] = "'game_version' can't be null";
        }
        if ($this->container['game_format'] === null) {
            $invalidProperties[] = "'game_format' can't be null";
        }
        $allowedValues = $this->getGameFormatAllowableValues();
        if (!is_null($this->container['game_format']) && !in_array($this->container['game_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'game_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['players'] === null) {
            $invalidProperties[] = "'players' can't be null";
        }
        if ($this->container['total_turn_count'] === null) {
            $invalidProperties[] = "'total_turn_count' can't be null";
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
     * Gets game_mode
     *
     * @return string
     */
    public function getGameMode()
    {
        return $this->container['game_mode'];
    }

    /**
     * Sets game_mode
     *
     * @param string $game_mode (Legal values:  Constructed,  Expeditions,  Tutorial)
     *
     * @return $this
     */
    public function setGameMode($game_mode)
    {
        $allowedValues = $this->getGameModeAllowableValues();
        if (!in_array($game_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'game_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['game_mode'] = $game_mode;

        return $this;
    }

    /**
     * Gets game_type
     *
     * @return string
     */
    public function getGameType()
    {
        return $this->container['game_type'];
    }

    /**
     * Sets game_type
     *
     * @param string $game_type (Legal values:  Ranked,  Normal,  AI,  Tutorial,  VanillaTrial,  Singleton,  StandardGauntlet)
     *
     * @return $this
     */
    public function setGameType($game_type)
    {
        $allowedValues = $this->getGameTypeAllowableValues();
        if (!in_array($game_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'game_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['game_type'] = $game_type;

        return $this;
    }

    /**
     * Gets game_start_time_utc
     *
     * @return string
     */
    public function getGameStartTimeUtc()
    {
        return $this->container['game_start_time_utc'];
    }

    /**
     * Sets game_start_time_utc
     *
     * @param string $game_start_time_utc game_start_time_utc
     *
     * @return $this
     */
    public function setGameStartTimeUtc($game_start_time_utc)
    {
        $this->container['game_start_time_utc'] = $game_start_time_utc;

        return $this;
    }

    /**
     * Gets game_version
     *
     * @return string
     */
    public function getGameVersion()
    {
        return $this->container['game_version'];
    }

    /**
     * Sets game_version
     *
     * @param string $game_version game_version
     *
     * @return $this
     */
    public function setGameVersion($game_version)
    {
        $this->container['game_version'] = $game_version;

        return $this;
    }

    /**
     * Gets game_format
     *
     * @return string
     */
    public function getGameFormat()
    {
        return $this->container['game_format'];
    }

    /**
     * Sets game_format
     *
     * @param string $game_format (Legal values:  standard,  eternal)
     *
     * @return $this
     */
    public function setGameFormat($game_format)
    {
        $allowedValues = $this->getGameFormatAllowableValues();
        if (!in_array($game_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'game_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['game_format'] = $game_format;

        return $this;
    }

    /**
     * Gets players
     *
     * @return \Swagger\Client\Model\LorMatchV1PlayerDto[]
     */
    public function getPlayers()
    {
        return $this->container['players'];
    }

    /**
     * Sets players
     *
     * @param \Swagger\Client\Model\LorMatchV1PlayerDto[] $players players
     *
     * @return $this
     */
    public function setPlayers($players)
    {
        $this->container['players'] = $players;

        return $this;
    }

    /**
     * Gets total_turn_count
     *
     * @return int
     */
    public function getTotalTurnCount()
    {
        return $this->container['total_turn_count'];
    }

    /**
     * Sets total_turn_count
     *
     * @param int $total_turn_count Total turns taken by both players.
     *
     * @return $this
     */
    public function setTotalTurnCount($total_turn_count)
    {
        $this->container['total_turn_count'] = $total_turn_count;

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


