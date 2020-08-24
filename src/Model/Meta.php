<?php
/**
 * Meta
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
 * Meta Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Meta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'online' => 'bool',
        'dnssec' => 'bool',
        'description' => 'string',
        'title' => 'string',
        'certificate_issure' => 'string',
        'certificate_valid' => 'bool',
        'ipv4' => 'string[]',
        'ipv6' => 'string[]',
        'mx' => 'string[]',
        'ns' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'online' => null,
        'dnssec' => null,
        'description' => null,
        'title' => null,
        'certificate_issure' => null,
        'certificate_valid' => null,
        'ipv4' => null,
        'ipv6' => null,
        'mx' => null,
        'ns' => null
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
        'online' => 'online',
        'dnssec' => 'dnssec',
        'description' => 'description',
        'title' => 'title',
        'certificate_issure' => 'certificateIssure',
        'certificate_valid' => 'certificateValid',
        'ipv4' => 'ipv4',
        'ipv6' => 'ipv6',
        'mx' => 'mx',
        'ns' => 'ns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'online' => 'setOnline',
        'dnssec' => 'setDnssec',
        'description' => 'setDescription',
        'title' => 'setTitle',
        'certificate_issure' => 'setCertificateIssure',
        'certificate_valid' => 'setCertificateValid',
        'ipv4' => 'setIpv4',
        'ipv6' => 'setIpv6',
        'mx' => 'setMx',
        'ns' => 'setNs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'online' => 'getOnline',
        'dnssec' => 'getDnssec',
        'description' => 'getDescription',
        'title' => 'getTitle',
        'certificate_issure' => 'getCertificateIssure',
        'certificate_valid' => 'getCertificateValid',
        'ipv4' => 'getIpv4',
        'ipv6' => 'getIpv6',
        'mx' => 'getMx',
        'ns' => 'getNs'
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
        $this->container['online'] = isset($data['online']) ? $this->createData($data['online'], 'online')  : null;
        $this->container['dnssec'] = isset($data['dnssec']) ? $this->createData($data['dnssec'], 'dnssec')  : null;
        $this->container['description'] = isset($data['description']) ? $this->createData($data['description'], 'description')  : null;
        $this->container['title'] = isset($data['title']) ? $this->createData($data['title'], 'title')  : null;
        $this->container['certificate_issure'] = isset($data['certificate_issure']) ? $this->createData($data['certificate_issure'], 'certificate_issure')  : null;
        $this->container['certificate_valid'] = isset($data['certificate_valid']) ? $this->createData($data['certificate_valid'], 'certificate_valid')  : null;
        $this->container['ipv4'] = isset($data['ipv4']) ? $this->createData($data['ipv4'], 'ipv4')  : null;
        $this->container['ipv6'] = isset($data['ipv6']) ? $this->createData($data['ipv6'], 'ipv6')  : null;
        $this->container['mx'] = isset($data['mx']) ? $this->createData($data['mx'], 'mx')  : null;
        $this->container['ns'] = isset($data['ns']) ? $this->createData($data['ns'], 'ns')  : null;
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
     * Gets online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool $online online
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets dnssec
     *
     * @return bool
     */
    public function getDnssec()
    {
        return $this->container['dnssec'];
    }

    /**
     * Sets dnssec
     *
     * @param bool $dnssec dnssec
     *
     * @return $this
     */
    public function setDnssec($dnssec)
    {
        $this->container['dnssec'] = $dnssec;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets certificate_issure
     *
     * @return string
     */
    public function getCertificateIssure()
    {
        return $this->container['certificate_issure'];
    }

    /**
     * Sets certificate_issure
     *
     * @param string $certificate_issure certificate_issure
     *
     * @return $this
     */
    public function setCertificateIssure($certificate_issure)
    {
        $this->container['certificate_issure'] = $certificate_issure;

        return $this;
    }

    /**
     * Gets certificate_valid
     *
     * @return bool
     */
    public function getCertificateValid()
    {
        return $this->container['certificate_valid'];
    }

    /**
     * Sets certificate_valid
     *
     * @param bool $certificate_valid certificate_valid
     *
     * @return $this
     */
    public function setCertificateValid($certificate_valid)
    {
        $this->container['certificate_valid'] = $certificate_valid;

        return $this;
    }

    /**
     * Gets ipv4
     *
     * @return string[]
     */
    public function getIpv4()
    {
        return $this->container['ipv4'];
    }

    /**
     * Sets ipv4
     *
     * @param string[] $ipv4 ipv4
     *
     * @return $this
     */
    public function setIpv4($ipv4)
    {
        $this->container['ipv4'] = $ipv4;

        return $this;
    }

    /**
     * Gets ipv6
     *
     * @return string[]
     */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
     * Sets ipv6
     *
     * @param string[] $ipv6 ipv6
     *
     * @return $this
     */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;

        return $this;
    }

    /**
     * Gets mx
     *
     * @return string[]
     */
    public function getMx()
    {
        return $this->container['mx'];
    }

    /**
     * Sets mx
     *
     * @param string[] $mx mx
     *
     * @return $this
     */
    public function setMx($mx)
    {
        $this->container['mx'] = $mx;

        return $this;
    }

    /**
     * Gets ns
     *
     * @return string[]
     */
    public function getNs()
    {
        return $this->container['ns'];
    }

    /**
     * Sets ns
     *
     * @param string[] $ns ns
     *
     * @return $this
     */
    public function setNs($ns)
    {
        $this->container['ns'] = $ns;

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


