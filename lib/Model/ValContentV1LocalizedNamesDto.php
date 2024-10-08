<?php
/**
 * ValContentV1LocalizedNamesDto
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
 * ValContentV1LocalizedNamesDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValContentV1LocalizedNamesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'val-content-v1.LocalizedNamesDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ar_ae' => 'string',
        'de_de' => 'string',
        'en_gb' => 'string',
        'en_us' => 'string',
        'es_es' => 'string',
        'es_mx' => 'string',
        'fr_fr' => 'string',
        'id_id' => 'string',
        'it_it' => 'string',
        'ja_jp' => 'string',
        'ko_kr' => 'string',
        'pl_pl' => 'string',
        'pt_br' => 'string',
        'ru_ru' => 'string',
        'th_th' => 'string',
        'tr_tr' => 'string',
        'vi_vn' => 'string',
        'zh_cn' => 'string',
        'zh_tw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ar_ae' => null,
        'de_de' => null,
        'en_gb' => null,
        'en_us' => null,
        'es_es' => null,
        'es_mx' => null,
        'fr_fr' => null,
        'id_id' => null,
        'it_it' => null,
        'ja_jp' => null,
        'ko_kr' => null,
        'pl_pl' => null,
        'pt_br' => null,
        'ru_ru' => null,
        'th_th' => null,
        'tr_tr' => null,
        'vi_vn' => null,
        'zh_cn' => null,
        'zh_tw' => null
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
        'ar_ae' => 'ar-AE',
        'de_de' => 'de-DE',
        'en_gb' => 'en-GB',
        'en_us' => 'en-US',
        'es_es' => 'es-ES',
        'es_mx' => 'es-MX',
        'fr_fr' => 'fr-FR',
        'id_id' => 'id-ID',
        'it_it' => 'it-IT',
        'ja_jp' => 'ja-JP',
        'ko_kr' => 'ko-KR',
        'pl_pl' => 'pl-PL',
        'pt_br' => 'pt-BR',
        'ru_ru' => 'ru-RU',
        'th_th' => 'th-TH',
        'tr_tr' => 'tr-TR',
        'vi_vn' => 'vi-VN',
        'zh_cn' => 'zh-CN',
        'zh_tw' => 'zh-TW'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ar_ae' => 'setArAe',
        'de_de' => 'setDeDe',
        'en_gb' => 'setEnGb',
        'en_us' => 'setEnUs',
        'es_es' => 'setEsEs',
        'es_mx' => 'setEsMx',
        'fr_fr' => 'setFrFr',
        'id_id' => 'setIdId',
        'it_it' => 'setItIt',
        'ja_jp' => 'setJaJp',
        'ko_kr' => 'setKoKr',
        'pl_pl' => 'setPlPl',
        'pt_br' => 'setPtBr',
        'ru_ru' => 'setRuRu',
        'th_th' => 'setThTh',
        'tr_tr' => 'setTrTr',
        'vi_vn' => 'setViVn',
        'zh_cn' => 'setZhCn',
        'zh_tw' => 'setZhTw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ar_ae' => 'getArAe',
        'de_de' => 'getDeDe',
        'en_gb' => 'getEnGb',
        'en_us' => 'getEnUs',
        'es_es' => 'getEsEs',
        'es_mx' => 'getEsMx',
        'fr_fr' => 'getFrFr',
        'id_id' => 'getIdId',
        'it_it' => 'getItIt',
        'ja_jp' => 'getJaJp',
        'ko_kr' => 'getKoKr',
        'pl_pl' => 'getPlPl',
        'pt_br' => 'getPtBr',
        'ru_ru' => 'getRuRu',
        'th_th' => 'getThTh',
        'tr_tr' => 'getTrTr',
        'vi_vn' => 'getViVn',
        'zh_cn' => 'getZhCn',
        'zh_tw' => 'getZhTw'
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
        $this->container['ar_ae'] = isset($data['ar_ae']) ? $data['ar_ae'] : null;
        $this->container['de_de'] = isset($data['de_de']) ? $data['de_de'] : null;
        $this->container['en_gb'] = isset($data['en_gb']) ? $data['en_gb'] : null;
        $this->container['en_us'] = isset($data['en_us']) ? $data['en_us'] : null;
        $this->container['es_es'] = isset($data['es_es']) ? $data['es_es'] : null;
        $this->container['es_mx'] = isset($data['es_mx']) ? $data['es_mx'] : null;
        $this->container['fr_fr'] = isset($data['fr_fr']) ? $data['fr_fr'] : null;
        $this->container['id_id'] = isset($data['id_id']) ? $data['id_id'] : null;
        $this->container['it_it'] = isset($data['it_it']) ? $data['it_it'] : null;
        $this->container['ja_jp'] = isset($data['ja_jp']) ? $data['ja_jp'] : null;
        $this->container['ko_kr'] = isset($data['ko_kr']) ? $data['ko_kr'] : null;
        $this->container['pl_pl'] = isset($data['pl_pl']) ? $data['pl_pl'] : null;
        $this->container['pt_br'] = isset($data['pt_br']) ? $data['pt_br'] : null;
        $this->container['ru_ru'] = isset($data['ru_ru']) ? $data['ru_ru'] : null;
        $this->container['th_th'] = isset($data['th_th']) ? $data['th_th'] : null;
        $this->container['tr_tr'] = isset($data['tr_tr']) ? $data['tr_tr'] : null;
        $this->container['vi_vn'] = isset($data['vi_vn']) ? $data['vi_vn'] : null;
        $this->container['zh_cn'] = isset($data['zh_cn']) ? $data['zh_cn'] : null;
        $this->container['zh_tw'] = isset($data['zh_tw']) ? $data['zh_tw'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ar_ae'] === null) {
            $invalidProperties[] = "'ar_ae' can't be null";
        }
        if ($this->container['de_de'] === null) {
            $invalidProperties[] = "'de_de' can't be null";
        }
        if ($this->container['en_us'] === null) {
            $invalidProperties[] = "'en_us' can't be null";
        }
        if ($this->container['es_es'] === null) {
            $invalidProperties[] = "'es_es' can't be null";
        }
        if ($this->container['es_mx'] === null) {
            $invalidProperties[] = "'es_mx' can't be null";
        }
        if ($this->container['fr_fr'] === null) {
            $invalidProperties[] = "'fr_fr' can't be null";
        }
        if ($this->container['id_id'] === null) {
            $invalidProperties[] = "'id_id' can't be null";
        }
        if ($this->container['it_it'] === null) {
            $invalidProperties[] = "'it_it' can't be null";
        }
        if ($this->container['ja_jp'] === null) {
            $invalidProperties[] = "'ja_jp' can't be null";
        }
        if ($this->container['ko_kr'] === null) {
            $invalidProperties[] = "'ko_kr' can't be null";
        }
        if ($this->container['pl_pl'] === null) {
            $invalidProperties[] = "'pl_pl' can't be null";
        }
        if ($this->container['pt_br'] === null) {
            $invalidProperties[] = "'pt_br' can't be null";
        }
        if ($this->container['ru_ru'] === null) {
            $invalidProperties[] = "'ru_ru' can't be null";
        }
        if ($this->container['th_th'] === null) {
            $invalidProperties[] = "'th_th' can't be null";
        }
        if ($this->container['tr_tr'] === null) {
            $invalidProperties[] = "'tr_tr' can't be null";
        }
        if ($this->container['vi_vn'] === null) {
            $invalidProperties[] = "'vi_vn' can't be null";
        }
        if ($this->container['zh_cn'] === null) {
            $invalidProperties[] = "'zh_cn' can't be null";
        }
        if ($this->container['zh_tw'] === null) {
            $invalidProperties[] = "'zh_tw' can't be null";
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
     * Gets ar_ae
     *
     * @return string
     */
    public function getArAe()
    {
        return $this->container['ar_ae'];
    }

    /**
     * Sets ar_ae
     *
     * @param string $ar_ae ar_ae
     *
     * @return $this
     */
    public function setArAe($ar_ae)
    {
        $this->container['ar_ae'] = $ar_ae;

        return $this;
    }

    /**
     * Gets de_de
     *
     * @return string
     */
    public function getDeDe()
    {
        return $this->container['de_de'];
    }

    /**
     * Sets de_de
     *
     * @param string $de_de de_de
     *
     * @return $this
     */
    public function setDeDe($de_de)
    {
        $this->container['de_de'] = $de_de;

        return $this;
    }

    /**
     * Gets en_gb
     *
     * @return string
     */
    public function getEnGb()
    {
        return $this->container['en_gb'];
    }

    /**
     * Sets en_gb
     *
     * @param string $en_gb en_gb
     *
     * @return $this
     */
    public function setEnGb($en_gb)
    {
        $this->container['en_gb'] = $en_gb;

        return $this;
    }

    /**
     * Gets en_us
     *
     * @return string
     */
    public function getEnUs()
    {
        return $this->container['en_us'];
    }

    /**
     * Sets en_us
     *
     * @param string $en_us en_us
     *
     * @return $this
     */
    public function setEnUs($en_us)
    {
        $this->container['en_us'] = $en_us;

        return $this;
    }

    /**
     * Gets es_es
     *
     * @return string
     */
    public function getEsEs()
    {
        return $this->container['es_es'];
    }

    /**
     * Sets es_es
     *
     * @param string $es_es es_es
     *
     * @return $this
     */
    public function setEsEs($es_es)
    {
        $this->container['es_es'] = $es_es;

        return $this;
    }

    /**
     * Gets es_mx
     *
     * @return string
     */
    public function getEsMx()
    {
        return $this->container['es_mx'];
    }

    /**
     * Sets es_mx
     *
     * @param string $es_mx es_mx
     *
     * @return $this
     */
    public function setEsMx($es_mx)
    {
        $this->container['es_mx'] = $es_mx;

        return $this;
    }

    /**
     * Gets fr_fr
     *
     * @return string
     */
    public function getFrFr()
    {
        return $this->container['fr_fr'];
    }

    /**
     * Sets fr_fr
     *
     * @param string $fr_fr fr_fr
     *
     * @return $this
     */
    public function setFrFr($fr_fr)
    {
        $this->container['fr_fr'] = $fr_fr;

        return $this;
    }

    /**
     * Gets id_id
     *
     * @return string
     */
    public function getIdId()
    {
        return $this->container['id_id'];
    }

    /**
     * Sets id_id
     *
     * @param string $id_id id_id
     *
     * @return $this
     */
    public function setIdId($id_id)
    {
        $this->container['id_id'] = $id_id;

        return $this;
    }

    /**
     * Gets it_it
     *
     * @return string
     */
    public function getItIt()
    {
        return $this->container['it_it'];
    }

    /**
     * Sets it_it
     *
     * @param string $it_it it_it
     *
     * @return $this
     */
    public function setItIt($it_it)
    {
        $this->container['it_it'] = $it_it;

        return $this;
    }

    /**
     * Gets ja_jp
     *
     * @return string
     */
    public function getJaJp()
    {
        return $this->container['ja_jp'];
    }

    /**
     * Sets ja_jp
     *
     * @param string $ja_jp ja_jp
     *
     * @return $this
     */
    public function setJaJp($ja_jp)
    {
        $this->container['ja_jp'] = $ja_jp;

        return $this;
    }

    /**
     * Gets ko_kr
     *
     * @return string
     */
    public function getKoKr()
    {
        return $this->container['ko_kr'];
    }

    /**
     * Sets ko_kr
     *
     * @param string $ko_kr ko_kr
     *
     * @return $this
     */
    public function setKoKr($ko_kr)
    {
        $this->container['ko_kr'] = $ko_kr;

        return $this;
    }

    /**
     * Gets pl_pl
     *
     * @return string
     */
    public function getPlPl()
    {
        return $this->container['pl_pl'];
    }

    /**
     * Sets pl_pl
     *
     * @param string $pl_pl pl_pl
     *
     * @return $this
     */
    public function setPlPl($pl_pl)
    {
        $this->container['pl_pl'] = $pl_pl;

        return $this;
    }

    /**
     * Gets pt_br
     *
     * @return string
     */
    public function getPtBr()
    {
        return $this->container['pt_br'];
    }

    /**
     * Sets pt_br
     *
     * @param string $pt_br pt_br
     *
     * @return $this
     */
    public function setPtBr($pt_br)
    {
        $this->container['pt_br'] = $pt_br;

        return $this;
    }

    /**
     * Gets ru_ru
     *
     * @return string
     */
    public function getRuRu()
    {
        return $this->container['ru_ru'];
    }

    /**
     * Sets ru_ru
     *
     * @param string $ru_ru ru_ru
     *
     * @return $this
     */
    public function setRuRu($ru_ru)
    {
        $this->container['ru_ru'] = $ru_ru;

        return $this;
    }

    /**
     * Gets th_th
     *
     * @return string
     */
    public function getThTh()
    {
        return $this->container['th_th'];
    }

    /**
     * Sets th_th
     *
     * @param string $th_th th_th
     *
     * @return $this
     */
    public function setThTh($th_th)
    {
        $this->container['th_th'] = $th_th;

        return $this;
    }

    /**
     * Gets tr_tr
     *
     * @return string
     */
    public function getTrTr()
    {
        return $this->container['tr_tr'];
    }

    /**
     * Sets tr_tr
     *
     * @param string $tr_tr tr_tr
     *
     * @return $this
     */
    public function setTrTr($tr_tr)
    {
        $this->container['tr_tr'] = $tr_tr;

        return $this;
    }

    /**
     * Gets vi_vn
     *
     * @return string
     */
    public function getViVn()
    {
        return $this->container['vi_vn'];
    }

    /**
     * Sets vi_vn
     *
     * @param string $vi_vn vi_vn
     *
     * @return $this
     */
    public function setViVn($vi_vn)
    {
        $this->container['vi_vn'] = $vi_vn;

        return $this;
    }

    /**
     * Gets zh_cn
     *
     * @return string
     */
    public function getZhCn()
    {
        return $this->container['zh_cn'];
    }

    /**
     * Sets zh_cn
     *
     * @param string $zh_cn zh_cn
     *
     * @return $this
     */
    public function setZhCn($zh_cn)
    {
        $this->container['zh_cn'] = $zh_cn;

        return $this;
    }

    /**
     * Gets zh_tw
     *
     * @return string
     */
    public function getZhTw()
    {
        return $this->container['zh_tw'];
    }

    /**
     * Sets zh_tw
     *
     * @param string $zh_tw zh_tw
     *
     * @return $this
     */
    public function setZhTw($zh_tw)
    {
        $this->container['zh_tw'] = $zh_tw;

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


