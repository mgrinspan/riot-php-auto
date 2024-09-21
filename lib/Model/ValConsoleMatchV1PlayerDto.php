<?php
/**
 * ValConsoleMatchV1PlayerDto
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
 * ValConsoleMatchV1PlayerDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValConsoleMatchV1PlayerDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'val-console-match-v1.PlayerDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'puuid' => 'string',
        'game_name' => 'string',
        'tag_line' => 'string',
        'team_id' => 'string',
        'party_id' => 'string',
        'character_id' => 'string',
        'stats' => '\Swagger\Client\Model\ValConsoleMatchV1PlayerStatsDto',
        'competitive_tier' => 'int',
        'player_card' => 'string',
        'player_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'puuid' => null,
        'game_name' => null,
        'tag_line' => null,
        'team_id' => null,
        'party_id' => null,
        'character_id' => null,
        'stats' => null,
        'competitive_tier' => 'int32',
        'player_card' => null,
        'player_title' => null
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
        'game_name' => 'gameName',
        'tag_line' => 'tagLine',
        'team_id' => 'teamId',
        'party_id' => 'partyId',
        'character_id' => 'characterId',
        'stats' => 'stats',
        'competitive_tier' => 'competitiveTier',
        'player_card' => 'playerCard',
        'player_title' => 'playerTitle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'puuid' => 'setPuuid',
        'game_name' => 'setGameName',
        'tag_line' => 'setTagLine',
        'team_id' => 'setTeamId',
        'party_id' => 'setPartyId',
        'character_id' => 'setCharacterId',
        'stats' => 'setStats',
        'competitive_tier' => 'setCompetitiveTier',
        'player_card' => 'setPlayerCard',
        'player_title' => 'setPlayerTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'puuid' => 'getPuuid',
        'game_name' => 'getGameName',
        'tag_line' => 'getTagLine',
        'team_id' => 'getTeamId',
        'party_id' => 'getPartyId',
        'character_id' => 'getCharacterId',
        'stats' => 'getStats',
        'competitive_tier' => 'getCompetitiveTier',
        'player_card' => 'getPlayerCard',
        'player_title' => 'getPlayerTitle'
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
        $this->container['game_name'] = isset($data['game_name']) ? $data['game_name'] : null;
        $this->container['tag_line'] = isset($data['tag_line']) ? $data['tag_line'] : null;
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['competitive_tier'] = isset($data['competitive_tier']) ? $data['competitive_tier'] : null;
        $this->container['player_card'] = isset($data['player_card']) ? $data['player_card'] : null;
        $this->container['player_title'] = isset($data['player_title']) ? $data['player_title'] : null;
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
        if ($this->container['game_name'] === null) {
            $invalidProperties[] = "'game_name' can't be null";
        }
        if ($this->container['tag_line'] === null) {
            $invalidProperties[] = "'tag_line' can't be null";
        }
        if ($this->container['team_id'] === null) {
            $invalidProperties[] = "'team_id' can't be null";
        }
        if ($this->container['party_id'] === null) {
            $invalidProperties[] = "'party_id' can't be null";
        }
        if ($this->container['character_id'] === null) {
            $invalidProperties[] = "'character_id' can't be null";
        }
        if ($this->container['stats'] === null) {
            $invalidProperties[] = "'stats' can't be null";
        }
        if ($this->container['competitive_tier'] === null) {
            $invalidProperties[] = "'competitive_tier' can't be null";
        }
        if ($this->container['player_card'] === null) {
            $invalidProperties[] = "'player_card' can't be null";
        }
        if ($this->container['player_title'] === null) {
            $invalidProperties[] = "'player_title' can't be null";
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
     * Gets game_name
     *
     * @return string
     */
    public function getGameName()
    {
        return $this->container['game_name'];
    }

    /**
     * Sets game_name
     *
     * @param string $game_name game_name
     *
     * @return $this
     */
    public function setGameName($game_name)
    {
        $this->container['game_name'] = $game_name;

        return $this;
    }

    /**
     * Gets tag_line
     *
     * @return string
     */
    public function getTagLine()
    {
        return $this->container['tag_line'];
    }

    /**
     * Sets tag_line
     *
     * @param string $tag_line tag_line
     *
     * @return $this
     */
    public function setTagLine($tag_line)
    {
        $this->container['tag_line'] = $tag_line;

        return $this;
    }

    /**
     * Gets team_id
     *
     * @return string
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     *
     * @param string $team_id team_id
     *
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

        return $this;
    }

    /**
     * Gets party_id
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     *
     * @param string $party_id party_id
     *
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets character_id
     *
     * @return string
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param string $character_id character_id
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Swagger\Client\Model\ValConsoleMatchV1PlayerStatsDto
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Swagger\Client\Model\ValConsoleMatchV1PlayerStatsDto $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets competitive_tier
     *
     * @return int
     */
    public function getCompetitiveTier()
    {
        return $this->container['competitive_tier'];
    }

    /**
     * Sets competitive_tier
     *
     * @param int $competitive_tier competitive_tier
     *
     * @return $this
     */
    public function setCompetitiveTier($competitive_tier)
    {
        $this->container['competitive_tier'] = $competitive_tier;

        return $this;
    }

    /**
     * Gets player_card
     *
     * @return string
     */
    public function getPlayerCard()
    {
        return $this->container['player_card'];
    }

    /**
     * Sets player_card
     *
     * @param string $player_card player_card
     *
     * @return $this
     */
    public function setPlayerCard($player_card)
    {
        $this->container['player_card'] = $player_card;

        return $this;
    }

    /**
     * Gets player_title
     *
     * @return string
     */
    public function getPlayerTitle()
    {
        return $this->container['player_title'];
    }

    /**
     * Sets player_title
     *
     * @param string $player_title player_title
     *
     * @return $this
     */
    public function setPlayerTitle($player_title)
    {
        $this->container['player_title'] = $player_title;

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


