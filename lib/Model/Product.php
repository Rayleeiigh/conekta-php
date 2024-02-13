<?php
/**
 * Product
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Conekta API
 *
 * Conekta sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@conekta.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Conekta\Model;

use \ArrayAccess;
use \Conekta\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'antifraud_info' => 'array<string,mixed>',
        'brand' => 'string',
        'description' => 'string',
        'metadata' => 'array<string,string>',
        'name' => 'string',
        'quantity' => 'int',
        'sku' => 'string',
        'tags' => 'string[]',
        'unit_price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'antifraud_info' => null,
        'brand' => null,
        'description' => null,
        'metadata' => null,
        'name' => null,
        'quantity' => 'int32',
        'sku' => null,
        'tags' => null,
        'unit_price' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'antifraud_info' => false,
        'brand' => false,
        'description' => false,
        'metadata' => false,
        'name' => false,
        'quantity' => false,
        'sku' => false,
        'tags' => false,
        'unit_price' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'antifraud_info' => 'antifraud_info',
        'brand' => 'brand',
        'description' => 'description',
        'metadata' => 'metadata',
        'name' => 'name',
        'quantity' => 'quantity',
        'sku' => 'sku',
        'tags' => 'tags',
        'unit_price' => 'unit_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antifraud_info' => 'setAntifraudInfo',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'sku' => 'setSku',
        'tags' => 'setTags',
        'unit_price' => 'setUnitPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antifraud_info' => 'getAntifraudInfo',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'sku' => 'getSku',
        'tags' => 'getTags',
        'unit_price' => 'getUnitPrice'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('antifraud_info', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 250)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['metadata']) && (count($this->container['metadata']) > 100)) {
            $invalidProperties[] = "invalid value for 'metadata', number of items must be less than or equal to 100.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if (($this->container['unit_price'] < 0)) {
            $invalidProperties[] = "invalid value for 'unit_price', must be bigger than or equal to 0.";
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
     * Gets antifraud_info
     *
     * @return array<string,mixed>|null
     */
    public function getAntifraudInfo()
    {
        return $this->container['antifraud_info'];
    }

    /**
     * Sets antifraud_info
     *
     * @param array<string,mixed>|null $antifraud_info antifraud_info
     *
     * @return self
     */
    public function setAntifraudInfo($antifraud_info)
    {
        if (is_null($antifraud_info)) {
            throw new \InvalidArgumentException('non-nullable antifraud_info cannot be null');
        }
        $this->container['antifraud_info'] = $antifraud_info;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The brand of the item.
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Short description of the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 250)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Product., must be smaller than or equal to 250.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata It is a key/value hash that can hold custom fields. Maximum 100 elements and allows special characters.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }

        if ((count($metadata) > 100)) {
            throw new \InvalidArgumentException('invalid value for $metadata when calling Product., number of items must be less than or equal to 100.');
        }
        $this->container['metadata'] = $metadata;

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
     * @param string $name The name of the item. It will be displayed in the order.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity of the item in the order.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The stock keeping unit for the item. It is used to identify the item in the order.
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags List of tags for the item. It is used to identify the item in the order.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int $unit_price The price of the item in cents.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        if (($unit_price < 0)) {
            throw new \InvalidArgumentException('invalid value for $unit_price when calling Product., must be bigger than or equal to 0.');
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


