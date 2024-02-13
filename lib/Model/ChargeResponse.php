<?php
/**
 * ChargeResponse
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
 * ChargeResponse Class Doc Comment
 *
 * @category Class
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChargeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'charge_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'channel' => '\Conekta\Model\ChargeResponseChannel',
        'created_at' => 'int',
        'currency' => 'string',
        'customer_id' => 'string',
        'description' => 'string',
        'device_fingerprint' => 'string',
        'failure_code' => 'string',
        'failure_message' => 'string',
        'id' => 'string',
        'livemode' => 'bool',
        'object' => 'string',
        'order_id' => 'string',
        'paid_at' => 'int',
        'payment_method' => '\Conekta\Model\ChargeResponsePaymentMethod',
        'reference_id' => 'string',
        'refunds' => '\Conekta\Model\ChargeResponseRefunds',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'channel' => null,
        'created_at' => 'int64',
        'currency' => null,
        'customer_id' => null,
        'description' => null,
        'device_fingerprint' => null,
        'failure_code' => null,
        'failure_message' => null,
        'id' => null,
        'livemode' => null,
        'object' => null,
        'order_id' => null,
        'paid_at' => null,
        'payment_method' => null,
        'reference_id' => null,
        'refunds' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'channel' => false,
        'created_at' => false,
        'currency' => false,
        'customer_id' => false,
        'description' => false,
        'device_fingerprint' => false,
        'failure_code' => false,
        'failure_message' => false,
        'id' => false,
        'livemode' => false,
        'object' => false,
        'order_id' => false,
        'paid_at' => true,
        'payment_method' => false,
        'reference_id' => true,
        'refunds' => true,
        'status' => false
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
        'amount' => 'amount',
        'channel' => 'channel',
        'created_at' => 'created_at',
        'currency' => 'currency',
        'customer_id' => 'customer_id',
        'description' => 'description',
        'device_fingerprint' => 'device_fingerprint',
        'failure_code' => 'failure_code',
        'failure_message' => 'failure_message',
        'id' => 'id',
        'livemode' => 'livemode',
        'object' => 'object',
        'order_id' => 'order_id',
        'paid_at' => 'paid_at',
        'payment_method' => 'payment_method',
        'reference_id' => 'reference_id',
        'refunds' => 'refunds',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'channel' => 'setChannel',
        'created_at' => 'setCreatedAt',
        'currency' => 'setCurrency',
        'customer_id' => 'setCustomerId',
        'description' => 'setDescription',
        'device_fingerprint' => 'setDeviceFingerprint',
        'failure_code' => 'setFailureCode',
        'failure_message' => 'setFailureMessage',
        'id' => 'setId',
        'livemode' => 'setLivemode',
        'object' => 'setObject',
        'order_id' => 'setOrderId',
        'paid_at' => 'setPaidAt',
        'payment_method' => 'setPaymentMethod',
        'reference_id' => 'setReferenceId',
        'refunds' => 'setRefunds',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'channel' => 'getChannel',
        'created_at' => 'getCreatedAt',
        'currency' => 'getCurrency',
        'customer_id' => 'getCustomerId',
        'description' => 'getDescription',
        'device_fingerprint' => 'getDeviceFingerprint',
        'failure_code' => 'getFailureCode',
        'failure_message' => 'getFailureMessage',
        'id' => 'getId',
        'livemode' => 'getLivemode',
        'object' => 'getObject',
        'order_id' => 'getOrderId',
        'paid_at' => 'getPaidAt',
        'payment_method' => 'getPaymentMethod',
        'reference_id' => 'getReferenceId',
        'refunds' => 'getRefunds',
        'status' => 'getStatus'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('device_fingerprint', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('failure_message', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('livemode', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('paid_at', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('refunds', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \Conekta\Model\ChargeResponseChannel|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \Conekta\Model\ChargeResponseChannel|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at created_at
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets device_fingerprint
     *
     * @return string|null
     */
    public function getDeviceFingerprint()
    {
        return $this->container['device_fingerprint'];
    }

    /**
     * Sets device_fingerprint
     *
     * @param string|null $device_fingerprint device_fingerprint
     *
     * @return self
     */
    public function setDeviceFingerprint($device_fingerprint)
    {
        if (is_null($device_fingerprint)) {
            throw new \InvalidArgumentException('non-nullable device_fingerprint cannot be null');
        }
        $this->container['device_fingerprint'] = $device_fingerprint;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code failure_code
     *
     * @return self
     */
    public function setFailureCode($failure_code)
    {
        if (is_null($failure_code)) {
            throw new \InvalidArgumentException('non-nullable failure_code cannot be null');
        }
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_message
     *
     * @return string|null
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string|null $failure_message failure_message
     *
     * @return self
     */
    public function setFailureMessage($failure_message)
    {
        if (is_null($failure_message)) {
            throw new \InvalidArgumentException('non-nullable failure_message cannot be null');
        }
        $this->container['failure_message'] = $failure_message;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
     * Gets livemode
     *
     * @return bool|null
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     *
     * @param bool|null $livemode livemode
     *
     * @return self
     */
    public function setLivemode($livemode)
    {
        if (is_null($livemode)) {
            throw new \InvalidArgumentException('non-nullable livemode cannot be null');
        }
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object object
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
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return int|null
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param int|null $paid_at paid_at
     *
     * @return self
     */
    public function setPaidAt($paid_at)
    {
        if (is_null($paid_at)) {
            array_push($this->openAPINullablesSetToNull, 'paid_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paid_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Conekta\Model\ChargeResponsePaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Conekta\Model\ChargeResponsePaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id Reference ID of the charge
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            array_push($this->openAPINullablesSetToNull, 'reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Conekta\Model\ChargeResponseRefunds|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Conekta\Model\ChargeResponseRefunds|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            array_push($this->openAPINullablesSetToNull, 'refunds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refunds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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


