<?php
/**
 * CreateCustomerPaymentMethodsResponse
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
 * OpenAPI Generator version: 7.2.0
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
 * CreateCustomerPaymentMethodsResponse Class Doc Comment
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateCustomerPaymentMethodsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_customer_payment_methods_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'object' => 'string',
        'created_at' => 'int',
        'parent_id' => 'string',
        'reference' => 'string',
        'barcode' => 'string',
        'barcode_url' => 'string',
        'expires_at' => 'string',
        'provider' => 'string',
        'last4' => 'string',
        'bin' => 'string',
        'card_type' => 'string',
        'exp_month' => 'string',
        'exp_year' => 'string',
        'brand' => 'string',
        'name' => 'string',
        'default' => 'bool',
        'visible_on_checkout' => 'bool',
        'payment_source_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'object' => null,
        'created_at' => 'int64',
        'parent_id' => null,
        'reference' => null,
        'barcode' => null,
        'barcode_url' => null,
        'expires_at' => null,
        'provider' => null,
        'last4' => null,
        'bin' => null,
        'card_type' => null,
        'exp_month' => null,
        'exp_year' => null,
        'brand' => null,
        'name' => null,
        'default' => null,
        'visible_on_checkout' => null,
        'payment_source_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'id' => false,
        'object' => false,
        'created_at' => false,
        'parent_id' => false,
        'reference' => false,
        'barcode' => false,
        'barcode_url' => false,
        'expires_at' => false,
        'provider' => false,
        'last4' => false,
        'bin' => false,
        'card_type' => false,
        'exp_month' => false,
        'exp_year' => false,
        'brand' => false,
        'name' => false,
        'default' => false,
        'visible_on_checkout' => false,
        'payment_source_status' => false
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
        'type' => 'type',
        'id' => 'id',
        'object' => 'object',
        'created_at' => 'created_at',
        'parent_id' => 'parent_id',
        'reference' => 'reference',
        'barcode' => 'barcode',
        'barcode_url' => 'barcode_url',
        'expires_at' => 'expires_at',
        'provider' => 'provider',
        'last4' => 'last4',
        'bin' => 'bin',
        'card_type' => 'card_type',
        'exp_month' => 'exp_month',
        'exp_year' => 'exp_year',
        'brand' => 'brand',
        'name' => 'name',
        'default' => 'default',
        'visible_on_checkout' => 'visible_on_checkout',
        'payment_source_status' => 'payment_source_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'object' => 'setObject',
        'created_at' => 'setCreatedAt',
        'parent_id' => 'setParentId',
        'reference' => 'setReference',
        'barcode' => 'setBarcode',
        'barcode_url' => 'setBarcodeUrl',
        'expires_at' => 'setExpiresAt',
        'provider' => 'setProvider',
        'last4' => 'setLast4',
        'bin' => 'setBin',
        'card_type' => 'setCardType',
        'exp_month' => 'setExpMonth',
        'exp_year' => 'setExpYear',
        'brand' => 'setBrand',
        'name' => 'setName',
        'default' => 'setDefault',
        'visible_on_checkout' => 'setVisibleOnCheckout',
        'payment_source_status' => 'setPaymentSourceStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'object' => 'getObject',
        'created_at' => 'getCreatedAt',
        'parent_id' => 'getParentId',
        'reference' => 'getReference',
        'barcode' => 'getBarcode',
        'barcode_url' => 'getBarcodeUrl',
        'expires_at' => 'getExpiresAt',
        'provider' => 'getProvider',
        'last4' => 'getLast4',
        'bin' => 'getBin',
        'card_type' => 'getCardType',
        'exp_month' => 'getExpMonth',
        'exp_year' => 'getExpYear',
        'brand' => 'getBrand',
        'name' => 'getName',
        'default' => 'getDefault',
        'visible_on_checkout' => 'getVisibleOnCheckout',
        'payment_source_status' => 'getPaymentSourceStatus'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('barcode_url', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('last4', $data ?? [], null);
        $this->setIfExists('bin', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
        $this->setIfExists('exp_month', $data ?? [], null);
        $this->setIfExists('exp_year', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('visible_on_checkout', $data ?? [], null);
        $this->setIfExists('payment_source_status', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        if (is_null($barcode)) {
            throw new \InvalidArgumentException('non-nullable barcode cannot be null');
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets barcode_url
     *
     * @return string|null
     */
    public function getBarcodeUrl()
    {
        return $this->container['barcode_url'];
    }

    /**
     * Sets barcode_url
     *
     * @param string|null $barcode_url barcode_url
     *
     * @return self
     */
    public function setBarcodeUrl($barcode_url)
    {
        if (is_null($barcode_url)) {
            throw new \InvalidArgumentException('non-nullable barcode_url cannot be null');
        }
        $this->container['barcode_url'] = $barcode_url;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return string|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param string|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets last4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     *
     * @param string|null $last4 last4
     *
     * @return self
     */
    public function setLast4($last4)
    {
        if (is_null($last4)) {
            throw new \InvalidArgumentException('non-nullable last4 cannot be null');
        }
        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin bin
     *
     * @return self
     */
    public function setBin($bin)
    {
        if (is_null($bin)) {
            throw new \InvalidArgumentException('non-nullable bin cannot be null');
        }
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type card_type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        if (is_null($card_type)) {
            throw new \InvalidArgumentException('non-nullable card_type cannot be null');
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets exp_month
     *
     * @return string|null
     */
    public function getExpMonth()
    {
        return $this->container['exp_month'];
    }

    /**
     * Sets exp_month
     *
     * @param string|null $exp_month exp_month
     *
     * @return self
     */
    public function setExpMonth($exp_month)
    {
        if (is_null($exp_month)) {
            throw new \InvalidArgumentException('non-nullable exp_month cannot be null');
        }
        $this->container['exp_month'] = $exp_month;

        return $this;
    }

    /**
     * Gets exp_year
     *
     * @return string|null
     */
    public function getExpYear()
    {
        return $this->container['exp_year'];
    }

    /**
     * Sets exp_year
     *
     * @param string|null $exp_year exp_year
     *
     * @return self
     */
    public function setExpYear($exp_year)
    {
        if (is_null($exp_year)) {
            throw new \InvalidArgumentException('non-nullable exp_year cannot be null');
        }
        $this->container['exp_year'] = $exp_year;

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
     * @param string|null $brand brand
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
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
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets visible_on_checkout
     *
     * @return bool|null
     */
    public function getVisibleOnCheckout()
    {
        return $this->container['visible_on_checkout'];
    }

    /**
     * Sets visible_on_checkout
     *
     * @param bool|null $visible_on_checkout visible_on_checkout
     *
     * @return self
     */
    public function setVisibleOnCheckout($visible_on_checkout)
    {
        if (is_null($visible_on_checkout)) {
            throw new \InvalidArgumentException('non-nullable visible_on_checkout cannot be null');
        }
        $this->container['visible_on_checkout'] = $visible_on_checkout;

        return $this;
    }

    /**
     * Gets payment_source_status
     *
     * @return string|null
     */
    public function getPaymentSourceStatus()
    {
        return $this->container['payment_source_status'];
    }

    /**
     * Sets payment_source_status
     *
     * @param string|null $payment_source_status payment_source_status
     *
     * @return self
     */
    public function setPaymentSourceStatus($payment_source_status)
    {
        if (is_null($payment_source_status)) {
            throw new \InvalidArgumentException('non-nullable payment_source_status cannot be null');
        }
        $this->container['payment_source_status'] = $payment_source_status;

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


