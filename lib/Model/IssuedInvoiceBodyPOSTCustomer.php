<?php
/**
 * IssuedInvoiceBodyPOSTCustomer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\Helios\Invoices
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * iNuvio Server Invoices API
 *
 * ## Úvod    **REST API** je rozšířený standard programového rozhranní pro integraci aplikací.
 *
 * The version of the OpenAPI document: 1.2.33
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\Helios\Invoices\Model;

use \ArrayAccess;
use \BeLenka\Helios\Invoices\ObjectSerializer;

/**
 * IssuedInvoiceBodyPOSTCustomer Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\Helios\Invoices
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IssuedInvoiceBodyPOSTCustomer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'issuedInvoiceBodyPOST_customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'cin' => 'string',
        'tin' => 'string',
        'name' => 'string',
        'street' => 'string',
        'descriptive_number' => 'string',
        'reference_number' => 'string',
        'city' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => 'int32',
        'cin' => null,
        'tin' => null,
        'name' => null,
        'street' => null,
        'descriptive_number' => null,
        'reference_number' => null,
        'city' => null,
        'postal_code' => null,
        'country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_id' => false,
		'cin' => false,
		'tin' => false,
		'name' => false,
		'street' => false,
		'descriptive_number' => false,
		'reference_number' => false,
		'city' => false,
		'postal_code' => false,
		'country_code' => false
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
        'customer_id' => 'customerId',
        'cin' => 'cin',
        'tin' => 'tin',
        'name' => 'name',
        'street' => 'street',
        'descriptive_number' => 'descriptiveNumber',
        'reference_number' => 'referenceNumber',
        'city' => 'city',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'cin' => 'setCin',
        'tin' => 'setTin',
        'name' => 'setName',
        'street' => 'setStreet',
        'descriptive_number' => 'setDescriptiveNumber',
        'reference_number' => 'setReferenceNumber',
        'city' => 'setCity',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'cin' => 'getCin',
        'tin' => 'getTin',
        'name' => 'getName',
        'street' => 'getStreet',
        'descriptive_number' => 'getDescriptiveNumber',
        'reference_number' => 'getReferenceNumber',
        'city' => 'getCity',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode'
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
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('cin', $data ?? [], null);
        $this->setIfExists('tin', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('descriptive_number', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
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
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id Systémové číslo odběratele [TabCisOrg.ID]
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
     * Gets cin
     *
     * @return string|null
     */
    public function getCin()
    {
        return $this->container['cin'];
    }

    /**
     * Sets cin
     *
     * @param string|null $cin IČO [TabCisOrg.ICO]
     *
     * @return self
     */
    public function setCin($cin)
    {
        if (is_null($cin)) {
            throw new \InvalidArgumentException('non-nullable cin cannot be null');
        }
        $this->container['cin'] = $cin;

        return $this;
    }

    /**
     * Gets tin
     *
     * @return string|null
     */
    public function getTin()
    {
        return $this->container['tin'];
    }

    /**
     * Sets tin
     *
     * @param string|null $tin DIČ [TabCisOrg.DIC]
     *
     * @return self
     */
    public function setTin($tin)
    {
        if (is_null($tin)) {
            throw new \InvalidArgumentException('non-nullable tin cannot be null');
        }
        $this->container['tin'] = $tin;

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
     * @param string|null $name Název dodavatele [TabCisOrg.Nazev]
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
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Ulice [TabCisOrg.Ulice]
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets descriptive_number
     *
     * @return string|null
     */
    public function getDescriptiveNumber()
    {
        return $this->container['descriptive_number'];
    }

    /**
     * Sets descriptive_number
     *
     * @param string|null $descriptive_number Číslo popisné [TabCisOrg.PopCislo]
     *
     * @return self
     */
    public function setDescriptiveNumber($descriptive_number)
    {
        if (is_null($descriptive_number)) {
            throw new \InvalidArgumentException('non-nullable descriptive_number cannot be null');
        }
        $this->container['descriptive_number'] = $descriptive_number;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Číslo orientační [TabCisOrg.OrCislo]
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Místo [TabCisOrg.Misto]
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code PSČ [TabCisOrg.PSC]
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code ISO Kód země [TabCisOrg.IdZeme]
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

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


