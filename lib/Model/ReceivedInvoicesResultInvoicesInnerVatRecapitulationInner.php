<?php
/**
 * ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner
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
 * ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\Helios\Invoices
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceivedInvoicesResultInvoicesInnerVatRecapitulationInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'receivedInvoicesResult_invoices_inner_vatRecapitulation_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vat_rate' => 'float',
        'currency_amount' => 'float',
        'currency_amount_tax_inclusive' => 'float',
        'vat_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vat_rate' => 'double',
        'currency_amount' => 'double',
        'currency_amount_tax_inclusive' => 'double',
        'vat_amount' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vat_rate' => true,
		'currency_amount' => false,
		'currency_amount_tax_inclusive' => false,
		'vat_amount' => false
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
        'vat_rate' => 'vatRate',
        'currency_amount' => 'currencyAmount',
        'currency_amount_tax_inclusive' => 'currencyAmountTaxInclusive',
        'vat_amount' => 'vatAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vat_rate' => 'setVatRate',
        'currency_amount' => 'setCurrencyAmount',
        'currency_amount_tax_inclusive' => 'setCurrencyAmountTaxInclusive',
        'vat_amount' => 'setVatAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vat_rate' => 'getVatRate',
        'currency_amount' => 'getCurrencyAmount',
        'currency_amount_tax_inclusive' => 'getCurrencyAmountTaxInclusive',
        'vat_amount' => 'getVatAmount'
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
        $this->setIfExists('vat_rate', $data ?? [], null);
        $this->setIfExists('currency_amount', $data ?? [], null);
        $this->setIfExists('currency_amount_tax_inclusive', $data ?? [], null);
        $this->setIfExists('vat_amount', $data ?? [], null);
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
     * Gets vat_rate
     *
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float|null $vat_rate Sazba DPH
     *
     * @return self
     */
    public function setVatRate($vat_rate)
    {
        if (is_null($vat_rate)) {
            array_push($this->openAPINullablesSetToNull, 'vat_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets currency_amount
     *
     * @return float|null
     */
    public function getCurrencyAmount()
    {
        return $this->container['currency_amount'];
    }

    /**
     * Sets currency_amount
     *
     * @param float|null $currency_amount Částka celkem bez DPH v měně DPH
     *
     * @return self
     */
    public function setCurrencyAmount($currency_amount)
    {
        if (is_null($currency_amount)) {
            throw new \InvalidArgumentException('non-nullable currency_amount cannot be null');
        }
        $this->container['currency_amount'] = $currency_amount;

        return $this;
    }

    /**
     * Gets currency_amount_tax_inclusive
     *
     * @return float|null
     */
    public function getCurrencyAmountTaxInclusive()
    {
        return $this->container['currency_amount_tax_inclusive'];
    }

    /**
     * Sets currency_amount_tax_inclusive
     *
     * @param float|null $currency_amount_tax_inclusive Částka celkem včetně DPH v měně DPH
     *
     * @return self
     */
    public function setCurrencyAmountTaxInclusive($currency_amount_tax_inclusive)
    {
        if (is_null($currency_amount_tax_inclusive)) {
            throw new \InvalidArgumentException('non-nullable currency_amount_tax_inclusive cannot be null');
        }
        $this->container['currency_amount_tax_inclusive'] = $currency_amount_tax_inclusive;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param float|null $vat_amount Částka DPH v měně DPH
     *
     * @return self
     */
    public function setVatAmount($vat_amount)
    {
        if (is_null($vat_amount)) {
            throw new \InvalidArgumentException('non-nullable vat_amount cannot be null');
        }
        $this->container['vat_amount'] = $vat_amount;

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


