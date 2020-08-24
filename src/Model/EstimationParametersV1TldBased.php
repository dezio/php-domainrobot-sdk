<?php
/**
 * EstimationParametersV1TldBased
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Service Pricer API
 *
 * The documentation for the internal price estimation API.<br> Every request expects the following headers:<ul><li>Content-Type: application/json</li><li>Accept: application/json</li></ul>
 *
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * EstimationParametersV1TldBased Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EstimationParametersV1TldBased implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EstimationParametersV1_tldBased';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tld' => 'string',
        'subtld' => 'string',
        'average_tld_frequency' => 'float',
        'average_tld_price' => 'float',
        'averag_subt_tld_frequency' => 'float',
        'average_subtld_price' => 'float',
        'tld_num_domains' => 'float',
        'tld_globale_rank' => 'float',
        'subtld_num_domains' => 'float',
        'subtld_globale_rank' => 'float',
        'language_tld_match' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tld' => null,
        'subtld' => null,
        'average_tld_frequency' => null,
        'average_tld_price' => null,
        'averag_subt_tld_frequency' => null,
        'average_subtld_price' => null,
        'tld_num_domains' => null,
        'tld_globale_rank' => null,
        'subtld_num_domains' => null,
        'subtld_globale_rank' => null,
        'language_tld_match' => null
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
        'tld' => 'tld',
        'subtld' => 'subtld',
        'average_tld_frequency' => 'averageTldFrequency',
        'average_tld_price' => 'averageTldPrice',
        'averag_subt_tld_frequency' => 'averagSubtTldFrequency',
        'average_subtld_price' => 'averageSubtldPrice',
        'tld_num_domains' => 'tldNumDomains',
        'tld_globale_rank' => 'tldGlobaleRank',
        'subtld_num_domains' => 'subtldNumDomains',
        'subtld_globale_rank' => 'subtldGlobaleRank',
        'language_tld_match' => 'languageTldMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tld' => 'setTld',
        'subtld' => 'setSubtld',
        'average_tld_frequency' => 'setAverageTldFrequency',
        'average_tld_price' => 'setAverageTldPrice',
        'averag_subt_tld_frequency' => 'setAveragSubtTldFrequency',
        'average_subtld_price' => 'setAverageSubtldPrice',
        'tld_num_domains' => 'setTldNumDomains',
        'tld_globale_rank' => 'setTldGlobaleRank',
        'subtld_num_domains' => 'setSubtldNumDomains',
        'subtld_globale_rank' => 'setSubtldGlobaleRank',
        'language_tld_match' => 'setLanguageTldMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tld' => 'getTld',
        'subtld' => 'getSubtld',
        'average_tld_frequency' => 'getAverageTldFrequency',
        'average_tld_price' => 'getAverageTldPrice',
        'averag_subt_tld_frequency' => 'getAveragSubtTldFrequency',
        'average_subtld_price' => 'getAverageSubtldPrice',
        'tld_num_domains' => 'getTldNumDomains',
        'tld_globale_rank' => 'getTldGlobaleRank',
        'subtld_num_domains' => 'getSubtldNumDomains',
        'subtld_globale_rank' => 'getSubtldGlobaleRank',
        'language_tld_match' => 'getLanguageTldMatch'
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
        $this->container['tld'] = isset($data['tld']) ? $this->createData($data['tld'], 'tld')  : null;
        $this->container['subtld'] = isset($data['subtld']) ? $this->createData($data['subtld'], 'subtld')  : null;
        $this->container['average_tld_frequency'] = isset($data['average_tld_frequency']) ? $this->createData($data['average_tld_frequency'], 'average_tld_frequency')  : null;
        $this->container['average_tld_price'] = isset($data['average_tld_price']) ? $this->createData($data['average_tld_price'], 'average_tld_price')  : null;
        $this->container['averag_subt_tld_frequency'] = isset($data['averag_subt_tld_frequency']) ? $this->createData($data['averag_subt_tld_frequency'], 'averag_subt_tld_frequency')  : null;
        $this->container['average_subtld_price'] = isset($data['average_subtld_price']) ? $this->createData($data['average_subtld_price'], 'average_subtld_price')  : null;
        $this->container['tld_num_domains'] = isset($data['tld_num_domains']) ? $this->createData($data['tld_num_domains'], 'tld_num_domains')  : null;
        $this->container['tld_globale_rank'] = isset($data['tld_globale_rank']) ? $this->createData($data['tld_globale_rank'], 'tld_globale_rank')  : null;
        $this->container['subtld_num_domains'] = isset($data['subtld_num_domains']) ? $this->createData($data['subtld_num_domains'], 'subtld_num_domains')  : null;
        $this->container['subtld_globale_rank'] = isset($data['subtld_globale_rank']) ? $this->createData($data['subtld_globale_rank'], 'subtld_globale_rank')  : null;
        $this->container['language_tld_match'] = isset($data['language_tld_match']) ? $this->createData($data['language_tld_match'], 'language_tld_match')  : null;
    }

    /**
    *
    * @param mixed[] $data
    * @param string $property
    * @return mixed
    */
    public function createData($data = null, $property){
        if($data === null){
            return '';
        }
        $swaggerType = self::$swaggerTypes[$property];

        preg_match("/([\\\\\w\d]+)(\[\])?/", $swaggerType, $matches);

        if(count($matches) > 0 && count($matches) < 3){
            try {
                $reflection = new \ReflectionClass($swaggerType);
                $reflectionInstance = $reflection->newInstance($data);

                return $reflectionInstance;
            }catch(\Exception $ex){
                return $data;
            }
        }else if(count($matches) >= 3){
            $reflectionInstances = [];
            foreach($data as $d){
                try {
                    $reflection = new \ReflectionClass(str_replace("[]", "", $swaggerType) );
                    $reflectionInstances[] = $reflection->newInstance($d);

                    return $reflectionInstances;
                } catch (\Exception $ex) {
                    return $data;
                }
            }
        }

        return $data;
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
     * Validate all the properties in the 
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tld
     *
     * @return string
     */
    public function getTld()
    {
        return $this->container['tld'];
    }

    /**
     * Sets tld
     *
     * @param string $tld tld
     *
     * @return $this
     */
    public function setTld($tld)
    {
        $this->container['tld'] = $tld;

        return $this;
    }

    /**
     * Gets subtld
     *
     * @return string
     */
    public function getSubtld()
    {
        return $this->container['subtld'];
    }

    /**
     * Sets subtld
     *
     * @param string $subtld subtld
     *
     * @return $this
     */
    public function setSubtld($subtld)
    {
        $this->container['subtld'] = $subtld;

        return $this;
    }

    /**
     * Gets average_tld_frequency
     *
     * @return float
     */
    public function getAverageTldFrequency()
    {
        return $this->container['average_tld_frequency'];
    }

    /**
     * Sets average_tld_frequency
     *
     * @param float $average_tld_frequency average_tld_frequency
     *
     * @return $this
     */
    public function setAverageTldFrequency($average_tld_frequency)
    {
        $this->container['average_tld_frequency'] = $average_tld_frequency;

        return $this;
    }

    /**
     * Gets average_tld_price
     *
     * @return float
     */
    public function getAverageTldPrice()
    {
        return $this->container['average_tld_price'];
    }

    /**
     * Sets average_tld_price
     *
     * @param float $average_tld_price average_tld_price
     *
     * @return $this
     */
    public function setAverageTldPrice($average_tld_price)
    {
        $this->container['average_tld_price'] = $average_tld_price;

        return $this;
    }

    /**
     * Gets averag_subt_tld_frequency
     *
     * @return float
     */
    public function getAveragSubtTldFrequency()
    {
        return $this->container['averag_subt_tld_frequency'];
    }

    /**
     * Sets averag_subt_tld_frequency
     *
     * @param float $averag_subt_tld_frequency averag_subt_tld_frequency
     *
     * @return $this
     */
    public function setAveragSubtTldFrequency($averag_subt_tld_frequency)
    {
        $this->container['averag_subt_tld_frequency'] = $averag_subt_tld_frequency;

        return $this;
    }

    /**
     * Gets average_subtld_price
     *
     * @return float
     */
    public function getAverageSubtldPrice()
    {
        return $this->container['average_subtld_price'];
    }

    /**
     * Sets average_subtld_price
     *
     * @param float $average_subtld_price average_subtld_price
     *
     * @return $this
     */
    public function setAverageSubtldPrice($average_subtld_price)
    {
        $this->container['average_subtld_price'] = $average_subtld_price;

        return $this;
    }

    /**
     * Gets tld_num_domains
     *
     * @return float
     */
    public function getTldNumDomains()
    {
        return $this->container['tld_num_domains'];
    }

    /**
     * Sets tld_num_domains
     *
     * @param float $tld_num_domains tld_num_domains
     *
     * @return $this
     */
    public function setTldNumDomains($tld_num_domains)
    {
        $this->container['tld_num_domains'] = $tld_num_domains;

        return $this;
    }

    /**
     * Gets tld_globale_rank
     *
     * @return float
     */
    public function getTldGlobaleRank()
    {
        return $this->container['tld_globale_rank'];
    }

    /**
     * Sets tld_globale_rank
     *
     * @param float $tld_globale_rank tld_globale_rank
     *
     * @return $this
     */
    public function setTldGlobaleRank($tld_globale_rank)
    {
        $this->container['tld_globale_rank'] = $tld_globale_rank;

        return $this;
    }

    /**
     * Gets subtld_num_domains
     *
     * @return float
     */
    public function getSubtldNumDomains()
    {
        return $this->container['subtld_num_domains'];
    }

    /**
     * Sets subtld_num_domains
     *
     * @param float $subtld_num_domains subtld_num_domains
     *
     * @return $this
     */
    public function setSubtldNumDomains($subtld_num_domains)
    {
        $this->container['subtld_num_domains'] = $subtld_num_domains;

        return $this;
    }

    /**
     * Gets subtld_globale_rank
     *
     * @return float
     */
    public function getSubtldGlobaleRank()
    {
        return $this->container['subtld_globale_rank'];
    }

    /**
     * Sets subtld_globale_rank
     *
     * @param float $subtld_globale_rank subtld_globale_rank
     *
     * @return $this
     */
    public function setSubtldGlobaleRank($subtld_globale_rank)
    {
        $this->container['subtld_globale_rank'] = $subtld_globale_rank;

        return $this;
    }

    /**
     * Gets language_tld_match
     *
     * @return float
     */
    public function getLanguageTldMatch()
    {
        return $this->container['language_tld_match'];
    }

    /**
     * Sets language_tld_match
     *
     * @param float $language_tld_match language_tld_match
     *
     * @return $this
     */
    public function setLanguageTldMatch($language_tld_match)
    {
        $this->container['language_tld_match'] = $language_tld_match;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;
        foreach ($container as $key => &$value) {
            if (!$retrieveAllValues && empty($value)) {
                unset($container[$key]);
                continue;
            }
            
            if (gettype($value) === "object") {
                if(method_exists($value, 'toArray')) {
                    $value = $value->toArray();
                }else{
                    if(get_class($value) === "DateTime"){
                        $value = $value->format("Y-m-d\TH:i:s");
                    }else{
                        $value = (array) $value;
                    }
                }
            }
            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}


