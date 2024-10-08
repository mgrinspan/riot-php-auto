<?php
/**
 * TournamentStubV5TournamentCodeParametersV5
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
 * TournamentStubV5TournamentCodeParametersV5 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TournamentStubV5TournamentCodeParametersV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'tournament-stub-v5.TournamentCodeParametersV5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_participants' => 'string[]',
        'metadata' => 'string',
        'team_size' => 'int',
        'pick_type' => 'string',
        'map_type' => 'string',
        'spectator_type' => 'string',
        'enough_players' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_participants' => null,
        'metadata' => null,
        'team_size' => 'int32',
        'pick_type' => null,
        'map_type' => null,
        'spectator_type' => null,
        'enough_players' => null
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
        'allowed_participants' => 'allowedParticipants',
        'metadata' => 'metadata',
        'team_size' => 'teamSize',
        'pick_type' => 'pickType',
        'map_type' => 'mapType',
        'spectator_type' => 'spectatorType',
        'enough_players' => 'enoughPlayers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed_participants' => 'setAllowedParticipants',
        'metadata' => 'setMetadata',
        'team_size' => 'setTeamSize',
        'pick_type' => 'setPickType',
        'map_type' => 'setMapType',
        'spectator_type' => 'setSpectatorType',
        'enough_players' => 'setEnoughPlayers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed_participants' => 'getAllowedParticipants',
        'metadata' => 'getMetadata',
        'team_size' => 'getTeamSize',
        'pick_type' => 'getPickType',
        'map_type' => 'getMapType',
        'spectator_type' => 'getSpectatorType',
        'enough_players' => 'getEnoughPlayers'
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

    const PICK_TYPE_BLIND_PICK = 'BLIND_PICK';
    const PICK_TYPE_DRAFT_MODE = 'DRAFT_MODE';
    const PICK_TYPE_ALL_RANDOM = 'ALL_RANDOM';
    const PICK_TYPE_TOURNAMENT_DRAFT = 'TOURNAMENT_DRAFT';
    const MAP_TYPE_SUMMONERS_RIFT = 'SUMMONERS_RIFT';
    const MAP_TYPE_HOWLING_ABYSS = 'HOWLING_ABYSS';
    const SPECTATOR_TYPE_NONE = 'NONE';
    const SPECTATOR_TYPE_LOBBYONLY = 'LOBBYONLY';
    const SPECTATOR_TYPE_ALL = 'ALL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPickTypeAllowableValues()
    {
        return [
            self::PICK_TYPE_BLIND_PICK,
            self::PICK_TYPE_DRAFT_MODE,
            self::PICK_TYPE_ALL_RANDOM,
            self::PICK_TYPE_TOURNAMENT_DRAFT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMapTypeAllowableValues()
    {
        return [
            self::MAP_TYPE_SUMMONERS_RIFT,
            self::MAP_TYPE_HOWLING_ABYSS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpectatorTypeAllowableValues()
    {
        return [
            self::SPECTATOR_TYPE_NONE,
            self::SPECTATOR_TYPE_LOBBYONLY,
            self::SPECTATOR_TYPE_ALL,
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
        $this->container['allowed_participants'] = isset($data['allowed_participants']) ? $data['allowed_participants'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['team_size'] = isset($data['team_size']) ? $data['team_size'] : null;
        $this->container['pick_type'] = isset($data['pick_type']) ? $data['pick_type'] : null;
        $this->container['map_type'] = isset($data['map_type']) ? $data['map_type'] : null;
        $this->container['spectator_type'] = isset($data['spectator_type']) ? $data['spectator_type'] : null;
        $this->container['enough_players'] = isset($data['enough_players']) ? $data['enough_players'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['team_size'] === null) {
            $invalidProperties[] = "'team_size' can't be null";
        }
        if (($this->container['team_size'] > 5)) {
            $invalidProperties[] = "invalid value for 'team_size', must be smaller than or equal to 5.";
        }

        if (($this->container['team_size'] < 1)) {
            $invalidProperties[] = "invalid value for 'team_size', must be bigger than or equal to 1.";
        }

        if ($this->container['pick_type'] === null) {
            $invalidProperties[] = "'pick_type' can't be null";
        }
        $allowedValues = $this->getPickTypeAllowableValues();
        if (!is_null($this->container['pick_type']) && !in_array($this->container['pick_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pick_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['map_type'] === null) {
            $invalidProperties[] = "'map_type' can't be null";
        }
        $allowedValues = $this->getMapTypeAllowableValues();
        if (!is_null($this->container['map_type']) && !in_array($this->container['map_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'map_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['spectator_type'] === null) {
            $invalidProperties[] = "'spectator_type' can't be null";
        }
        $allowedValues = $this->getSpectatorTypeAllowableValues();
        if (!is_null($this->container['spectator_type']) && !in_array($this->container['spectator_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'spectator_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['enough_players'] === null) {
            $invalidProperties[] = "'enough_players' can't be null";
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
     * Gets allowed_participants
     *
     * @return string[]
     */
    public function getAllowedParticipants()
    {
        return $this->container['allowed_participants'];
    }

    /**
     * Sets allowed_participants
     *
     * @param string[] $allowed_participants Optional list of encrypted puuids in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future.
     *
     * @return $this
     */
    public function setAllowedParticipants($allowed_participants)
    {
        $this->container['allowed_participants'] = $allowed_participants;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string $metadata Optional string that may contain any data in any format, if specified at all. Used to denote any custom information about the game.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * @param int $team_size The team size of the game. Valid values are 1-5.
     *
     * @return $this
     */
    public function setTeamSize($team_size)
    {

        if (($team_size > 5)) {
            throw new \InvalidArgumentException('invalid value for $team_size when calling TournamentStubV5TournamentCodeParametersV5., must be smaller than or equal to 5.');
        }
        if (($team_size < 1)) {
            throw new \InvalidArgumentException('invalid value for $team_size when calling TournamentStubV5TournamentCodeParametersV5., must be bigger than or equal to 1.');
        }

        $this->container['team_size'] = $team_size;

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
     * @param string $pick_type The pick type of the game.              (Legal values:  BLIND_PICK,  DRAFT_MODE,  ALL_RANDOM,  TOURNAMENT_DRAFT)
     *
     * @return $this
     */
    public function setPickType($pick_type)
    {
        $allowedValues = $this->getPickTypeAllowableValues();
        if (!in_array($pick_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pick_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pick_type'] = $pick_type;

        return $this;
    }

    /**
     * Gets map_type
     *
     * @return string
     */
    public function getMapType()
    {
        return $this->container['map_type'];
    }

    /**
     * Sets map_type
     *
     * @param string $map_type The map type of the game.              (Legal values:  SUMMONERS_RIFT,  HOWLING_ABYSS)
     *
     * @return $this
     */
    public function setMapType($map_type)
    {
        $allowedValues = $this->getMapTypeAllowableValues();
        if (!in_array($map_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'map_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['map_type'] = $map_type;

        return $this;
    }

    /**
     * Gets spectator_type
     *
     * @return string
     */
    public function getSpectatorType()
    {
        return $this->container['spectator_type'];
    }

    /**
     * Sets spectator_type
     *
     * @param string $spectator_type The spectator type of the game.              (Legal values:  NONE,  LOBBYONLY,  ALL)
     *
     * @return $this
     */
    public function setSpectatorType($spectator_type)
    {
        $allowedValues = $this->getSpectatorTypeAllowableValues();
        if (!in_array($spectator_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'spectator_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spectator_type'] = $spectator_type;

        return $this;
    }

    /**
     * Gets enough_players
     *
     * @return bool
     */
    public function getEnoughPlayers()
    {
        return $this->container['enough_players'];
    }

    /**
     * Sets enough_players
     *
     * @param bool $enough_players Checks if allowed participants are enough to make full teams.
     *
     * @return $this
     */
    public function setEnoughPlayers($enough_players)
    {
        $this->container['enough_players'] = $enough_players;

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


