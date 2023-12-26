<?php
/**
 * OrderUpdateRequest
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
 * OrderUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description a order
 * @package  Conekta
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_update_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'charges' => '\Conekta\Model\ChargeRequest[]',
        'checkout' => '\Conekta\Model\CheckoutRequest',
        'currency' => 'string',
        'customer_info' => '\Conekta\Model\OrderUpdateRequestCustomerInfo',
        'discount_lines' => '\Conekta\Model\OrderDiscountLinesRequest[]',
        'fiscal_entity' => '\Conekta\Model\OrderUpdateFiscalEntityRequest',
        'line_items' => '\Conekta\Model\Product[]',
        'metadata' => 'array<string,string>',
        'pre_authorize' => 'bool',
        'shipping_contact' => '\Conekta\Model\CustomerShippingContacts',
        'shipping_lines' => '\Conekta\Model\ShippingRequest[]',
        'tax_lines' => '\Conekta\Model\OrderTaxRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'charges' => null,
        'checkout' => null,
        'currency' => null,
        'customer_info' => null,
        'discount_lines' => null,
        'fiscal_entity' => null,
        'line_items' => null,
        'metadata' => null,
        'pre_authorize' => null,
        'shipping_contact' => null,
        'shipping_lines' => null,
        'tax_lines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'charges' => false,
        'checkout' => false,
        'currency' => false,
        'customer_info' => false,
        'discount_lines' => false,
        'fiscal_entity' => false,
        'line_items' => false,
        'metadata' => false,
        'pre_authorize' => false,
        'shipping_contact' => false,
        'shipping_lines' => false,
        'tax_lines' => false
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
        'charges' => 'charges',
        'checkout' => 'checkout',
        'currency' => 'currency',
        'customer_info' => 'customer_info',
        'discount_lines' => 'discount_lines',
        'fiscal_entity' => 'fiscal_entity',
        'line_items' => 'line_items',
        'metadata' => 'metadata',
        'pre_authorize' => 'pre_authorize',
        'shipping_contact' => 'shipping_contact',
        'shipping_lines' => 'shipping_lines',
        'tax_lines' => 'tax_lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charges' => 'setCharges',
        'checkout' => 'setCheckout',
        'currency' => 'setCurrency',
        'customer_info' => 'setCustomerInfo',
        'discount_lines' => 'setDiscountLines',
        'fiscal_entity' => 'setFiscalEntity',
        'line_items' => 'setLineItems',
        'metadata' => 'setMetadata',
        'pre_authorize' => 'setPreAuthorize',
        'shipping_contact' => 'setShippingContact',
        'shipping_lines' => 'setShippingLines',
        'tax_lines' => 'setTaxLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charges' => 'getCharges',
        'checkout' => 'getCheckout',
        'currency' => 'getCurrency',
        'customer_info' => 'getCustomerInfo',
        'discount_lines' => 'getDiscountLines',
        'fiscal_entity' => 'getFiscalEntity',
        'line_items' => 'getLineItems',
        'metadata' => 'getMetadata',
        'pre_authorize' => 'getPreAuthorize',
        'shipping_contact' => 'getShippingContact',
        'shipping_lines' => 'getShippingLines',
        'tax_lines' => 'getTaxLines'
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
        $this->setIfExists('charges', $data ?? [], null);
        $this->setIfExists('checkout', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('customer_info', $data ?? [], null);
        $this->setIfExists('discount_lines', $data ?? [], null);
        $this->setIfExists('fiscal_entity', $data ?? [], null);
        $this->setIfExists('line_items', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('pre_authorize', $data ?? [], false);
        $this->setIfExists('shipping_contact', $data ?? [], null);
        $this->setIfExists('shipping_lines', $data ?? [], null);
        $this->setIfExists('tax_lines', $data ?? [], null);
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

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
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
     * Gets charges
     *
     * @return \Conekta\Model\ChargeRequest[]|null
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Conekta\Model\ChargeRequest[]|null $charges charges
     *
     * @return self
     */
    public function setCharges($charges)
    {
        if (is_null($charges)) {
            throw new \InvalidArgumentException('non-nullable charges cannot be null');
        }
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return \Conekta\Model\CheckoutRequest|null
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param \Conekta\Model\CheckoutRequest|null $checkout checkout
     *
     * @return self
     */
    public function setCheckout($checkout)
    {
        if (is_null($checkout)) {
            throw new \InvalidArgumentException('non-nullable checkout cannot be null');
        }
        $this->container['checkout'] = $checkout;

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
     * @param string|null $currency Currency with which the payment will be made. It uses the 3-letter code of the [International Standard ISO 4217.](https://es.wikipedia.org/wiki/ISO_4217)
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling OrderUpdateRequest., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customer_info
     *
     * @return \Conekta\Model\OrderUpdateRequestCustomerInfo|null
     */
    public function getCustomerInfo()
    {
        return $this->container['customer_info'];
    }

    /**
     * Sets customer_info
     *
     * @param \Conekta\Model\OrderUpdateRequestCustomerInfo|null $customer_info customer_info
     *
     * @return self
     */
    public function setCustomerInfo($customer_info)
    {
        if (is_null($customer_info)) {
            throw new \InvalidArgumentException('non-nullable customer_info cannot be null');
        }
        $this->container['customer_info'] = $customer_info;

        return $this;
    }

    /**
     * Gets discount_lines
     *
     * @return \Conekta\Model\OrderDiscountLinesRequest[]|null
     */
    public function getDiscountLines()
    {
        return $this->container['discount_lines'];
    }

    /**
     * Sets discount_lines
     *
     * @param \Conekta\Model\OrderDiscountLinesRequest[]|null $discount_lines List of [discounts](https://developers.conekta.com/v2.1.0/reference/orderscreatediscountline) that are applied to the order. You must have at least one discount.
     *
     * @return self
     */
    public function setDiscountLines($discount_lines)
    {
        if (is_null($discount_lines)) {
            throw new \InvalidArgumentException('non-nullable discount_lines cannot be null');
        }
        $this->container['discount_lines'] = $discount_lines;

        return $this;
    }

    /**
     * Gets fiscal_entity
     *
     * @return \Conekta\Model\OrderUpdateFiscalEntityRequest|null
     */
    public function getFiscalEntity()
    {
        return $this->container['fiscal_entity'];
    }

    /**
     * Sets fiscal_entity
     *
     * @param \Conekta\Model\OrderUpdateFiscalEntityRequest|null $fiscal_entity fiscal_entity
     *
     * @return self
     */
    public function setFiscalEntity($fiscal_entity)
    {
        if (is_null($fiscal_entity)) {
            throw new \InvalidArgumentException('non-nullable fiscal_entity cannot be null');
        }
        $this->container['fiscal_entity'] = $fiscal_entity;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Conekta\Model\Product[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Conekta\Model\Product[]|null $line_items List of [products](https://developers.conekta.com/v2.1.0/reference/orderscreateproduct) that are sold in the order. You must have at least one product.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        if (is_null($line_items)) {
            throw new \InvalidArgumentException('non-nullable line_items cannot be null');
        }
        $this->container['line_items'] = $line_items;

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
     * @param array<string,string>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets pre_authorize
     *
     * @return bool|null
     */
    public function getPreAuthorize()
    {
        return $this->container['pre_authorize'];
    }

    /**
     * Sets pre_authorize
     *
     * @param bool|null $pre_authorize Indicates whether the order charges must be preauthorized
     *
     * @return self
     */
    public function setPreAuthorize($pre_authorize)
    {
        if (is_null($pre_authorize)) {
            throw new \InvalidArgumentException('non-nullable pre_authorize cannot be null');
        }
        $this->container['pre_authorize'] = $pre_authorize;

        return $this;
    }

    /**
     * Gets shipping_contact
     *
     * @return \Conekta\Model\CustomerShippingContacts|null
     */
    public function getShippingContact()
    {
        return $this->container['shipping_contact'];
    }

    /**
     * Sets shipping_contact
     *
     * @param \Conekta\Model\CustomerShippingContacts|null $shipping_contact shipping_contact
     *
     * @return self
     */
    public function setShippingContact($shipping_contact)
    {
        if (is_null($shipping_contact)) {
            throw new \InvalidArgumentException('non-nullable shipping_contact cannot be null');
        }
        $this->container['shipping_contact'] = $shipping_contact;

        return $this;
    }

    /**
     * Gets shipping_lines
     *
     * @return \Conekta\Model\ShippingRequest[]|null
     */
    public function getShippingLines()
    {
        return $this->container['shipping_lines'];
    }

    /**
     * Sets shipping_lines
     *
     * @param \Conekta\Model\ShippingRequest[]|null $shipping_lines List of [shipping costs](https://developers.conekta.com/v2.1.0/reference/orderscreateshipping). If the online store offers digital products.
     *
     * @return self
     */
    public function setShippingLines($shipping_lines)
    {
        if (is_null($shipping_lines)) {
            throw new \InvalidArgumentException('non-nullable shipping_lines cannot be null');
        }
        $this->container['shipping_lines'] = $shipping_lines;

        return $this;
    }

    /**
     * Gets tax_lines
     *
     * @return \Conekta\Model\OrderTaxRequest[]|null
     */
    public function getTaxLines()
    {
        return $this->container['tax_lines'];
    }

    /**
     * Sets tax_lines
     *
     * @param \Conekta\Model\OrderTaxRequest[]|null $tax_lines tax_lines
     *
     * @return self
     */
    public function setTaxLines($tax_lines)
    {
        if (is_null($tax_lines)) {
            throw new \InvalidArgumentException('non-nullable tax_lines cannot be null');
        }
        $this->container['tax_lines'] = $tax_lines;

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


