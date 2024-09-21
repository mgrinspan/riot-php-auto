<?php
/**
 * TournamentStubV5TournamentCodeV5DTO
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
 * TournamentStubV5TournamentCodeV5DTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TournamentStubV5TournamentCodeV5DTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'tournament-stub-v5.TournamentCodeV5DTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'spectators' => 'string',
        'lobby_name' => 'string',
        'meta_data' => 'string',
        'password' => 'string',
        'team_size' => 'int',
        'provider_id' => 'int',
        'pick_type' => 'string',
        'tournament_id' => 'int',
        'id' => 'int',
        'region' => 'string',
        'map' => 'string',
        'participants' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'spectators' => null,
        'lobby_name' => null,
        'meta_data' => null,
        'password' => null,
        'team_size' => 'int32',
        'provider_id' => 'int32',
        'pick_type' => null,
        'tournament_id' => 'int32',
        'id' => 'int32',
        'region' => null,
        'map' => null,
        'participants' => null
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
        'code' => 'code',
        'spectators' => 'spectators',
        'lobby_name' => 'lobbyName',
        'meta_data' => 'metaData',
        'password' => 'password',
        'team_size' => 'teamSize',
        'provider_id' => 'providerId',
        'pick_type' => 'pickType',
        'tournament_id' => 'tournamentId',
        'id' => 'id',
        'region' => 'region',
        'map' => 'map',
        'participants' => 'participants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'spectators' => 'setSpectators',
        'lobby_name' => 'setLobbyName',
        'meta_data' => 'setMetaData',
        'password' => 'setPassword',
        'team_size' => 'setTeamSize',
        'provider_id' => 'setProviderId',
        'pick_type' => 'setPickType',
        'tournament_id' => 'setTournamentId',
        'id' => 'setId',
        'region' => 'setRegion',
        'map' => 'setMap',
        'participants' => 'setParticipants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'spectators' => 'getSpectators',
        'lobby_name' => 'getLobbyName',
        'meta_data' => 'getMetaData',
        'password' => 'getPassword',
        'team_size' => 'getTeamSize',
        'provider_id' => 'getProviderId',
        'pick_type' => 'getPickType',
        'tournament_id' => 'getTournamentId',
        'id' => 'getId',
        'region' => 'getRegion',
        'map' => 'getMap',
        'participants' => 'getParticipants'
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

    const REGION_BR = 'BR';
    const REGION_EUNE = 'EUNE';
    const REGION_EUW = 'EUW';
    const REGION_JP = 'JP';
    const REGION_LAN = 'LAN';
    const REGION_LAS = 'LAS';
    const REGION_NA = 'NA';
    const REGION_OCE = 'OCE';
    const REGION_PBE = 'PBE';
    const REGION_RU = 'RU';
    const REGION_TR = 'TR';
    const REGION_KR = 'KR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_BR,
            self::REGION_EUNE,
            self::REGION_EUW,
            self::REGION_JP,
            self::REGION_LAN,
            self::REGION_LAS,
            self::REGION_NA,
            self::REGION_OCE,
            self::REGION_PBE,
            self::REGION_RU,
            self::REGION_TR,
            self::REGION_KR,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['spectators'] = isset($data['spectators']) ? $data['spectators'] : null;
        $this->container['lobby_name'] = isset($data['lobby_name']) ? $data['lobby_name'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['team_size'] = isset($data['team_size']) ? $data['team_size'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['pick_type'] = isset($data['pick_type']) ? $data['pick_type'] : null;
        $this->container['tournament_id'] = isset($data['tournament_id']) ? $data['tournament_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['map'] = isset($data['map']) ? $data['map'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['spectators'] === null) {
            $invalidProperties[] = "'spectators' can't be null";
        }
        if ($this->container['lobby_name'] === null) {
            $invalidProperties[] = "'lobby_name' can't be null";
        }
        if ($this->container['meta_data'] === null) {
            $invalidProperties[] = "'meta_data' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['team_size'] === null) {
            $invalidProperties[] = "'team_size' can't be null";
        }
        if ($this->container['provider_id'] === null) {
            $invalidProperties[] = "'provider_id' can't be null";
        }
        if ($this->container['pick_type'] === null) {
            $invalidProperties[] = "'pick_type' can't be null";
        }
        if ($this->container['tournament_id'] === null) {
            $invalidProperties[] = "'tournament_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'region', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['map'] === null) {
            $invalidProperties[] = "'map' can't be null";
        }
        if ($this->container['participants'] === null) {
            $invalidProperties[] = "'participants' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The tournament code.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets spectators
     *
     * @return string
     */
    public function getSpectators()
    {
        return $this->container['spectators'];
    }

    /**
     * Sets spectators
     *
     * @param string $spectators The spectator mode for the tournament code game.
     *
     * @return $this
     */
    public function setSpectators($spectators)
    {
        $this->container['spectators'] = $spectators;

        return $this;
    }

    /**
     * Gets lobby_name
     *
     * @return string
     */
    public function getLobbyName()
    {
        return $this->container['lobby_name'];
    }

    /**
     * Sets lobby_name
     *
     * @param string $lobby_name The lobby name for the tournament code game.
     *
     * @return $this
     */
    public function setLobbyName($lobby_name)
    {
        $this->container['lobby_name'] = $lobby_name;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return string
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param string $meta_data The metadata for tournament code.
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password for the tournament code game.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets team_size
     *
     * @return int
     */
    public function getTeamSize()
    {
        return $this->container['team_size'];
    }

    /**
     * Sets team_size
     *
     * @param int $team_size The team size for the tournament code game.
     *
     * @return $this
     */
    public function setTeamSize($team_size)
    {
        $this->container['team_size'] = $team_size;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return int
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param int $provider_id The provider's ID.
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets pick_type
     *
     * @return string
     */
    public function getPickType()
    {
        return $this->container['pick_type'];
    }

    /**
     * Sets pick_type
     *
     * @param string $pick_type The pick mode for tournament code game.
     *
     * @return $this
     */
    public function setPickType($pick_type)
    {
        $this->container['pick_type'] = $pick_type;

        return $this;
    }

    /**
     * Gets tournament_id
     *
     * @return int
     */
    public function getTournamentId()
    {
        return $this->container['tournament_id'];
    }

    /**
     * Sets tournament_id
     *
     * @param int $tournament_id The tournament's ID.
     *
     * @return $this
     */
    public function setTournamentId($tournament_id)
    {
        $this->container['tournament_id'] = $tournament_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The tournament code's ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region The tournament code's region.              (Legal values:  BR,  EUNE,  EUW,  JP,  LAN,  LAS,  NA,  OCE,  PBE,  RU,  TR,  KR)
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'region', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->container['map'];
    }

    /**
     * Sets map
     *
     * @param string $map The game map for the tournament code game
     *
     * @return $this
     */
    public function setMap($map)
    {
        $this->container['map'] = $map;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return string[]
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param string[] $participants The puuids of the participants (Encrypted)
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

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


