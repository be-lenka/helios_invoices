<?php
/**
 * ReceivedInvoiceBodyPOSTItemsInner
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
 * ReceivedInvoiceBodyPOSTItemsInner Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\Helios\Invoices
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceivedInvoiceBodyPOSTItemsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'receivedInvoiceBodyPOST_items_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transfer_id' => 'string',
        'warehouse_id' => 'string',
        'description' => 'string',
        'description_type' => 'string',
        'quantity' => 'float',
        'measure_unit' => 'string',
        'currency_amount' => 'float',
        'vat_rate' => 'float',
        'is_reverse_charge' => 'bool',
        'reverse_charge_code' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transfer_id' => null,
        'warehouse_id' => null,
        'description' => null,
        'description_type' => null,
        'quantity' => 'double',
        'measure_unit' => null,
        'currency_amount' => 'double',
        'vat_rate' => 'double',
        'is_reverse_charge' => null,
        'reverse_charge_code' => null,
        'note' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transfer_id' => false,
		'warehouse_id' => false,
		'description' => false,
		'description_type' => false,
		'quantity' => false,
		'measure_unit' => true,
		'currency_amount' => false,
		'vat_rate' => true,
		'is_reverse_charge' => false,
		'reverse_charge_code' => false,
		'note' => false
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
        'transfer_id' => 'transferId',
        'warehouse_id' => 'warehouseId',
        'description' => 'description',
        'description_type' => 'descriptionType',
        'quantity' => 'quantity',
        'measure_unit' => 'measureUnit',
        'currency_amount' => 'currencyAmount',
        'vat_rate' => 'vatRate',
        'is_reverse_charge' => 'isReverseCharge',
        'reverse_charge_code' => 'reverseChargeCode',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_id' => 'setTransferId',
        'warehouse_id' => 'setWarehouseId',
        'description' => 'setDescription',
        'description_type' => 'setDescriptionType',
        'quantity' => 'setQuantity',
        'measure_unit' => 'setMeasureUnit',
        'currency_amount' => 'setCurrencyAmount',
        'vat_rate' => 'setVatRate',
        'is_reverse_charge' => 'setIsReverseCharge',
        'reverse_charge_code' => 'setReverseChargeCode',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_id' => 'getTransferId',
        'warehouse_id' => 'getWarehouseId',
        'description' => 'getDescription',
        'description_type' => 'getDescriptionType',
        'quantity' => 'getQuantity',
        'measure_unit' => 'getMeasureUnit',
        'currency_amount' => 'getCurrencyAmount',
        'vat_rate' => 'getVatRate',
        'is_reverse_charge' => 'getIsReverseCharge',
        'reverse_charge_code' => 'getReverseChargeCode',
        'note' => 'getNote'
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

    public const DESCRIPTION_TYPE_EAN = 'ean';
    public const DESCRIPTION_TYPE_CATALOGUE_ID = 'catalogueId';
    public const DESCRIPTION_TYPE_FREE_ITEM = 'freeItem';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDescriptionTypeAllowableValues()
    {
        return [
            self::DESCRIPTION_TYPE_EAN,
            self::DESCRIPTION_TYPE_CATALOGUE_ID,
            self::DESCRIPTION_TYPE_FREE_ITEM,
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
        $this->setIfExists('transfer_id', $data ?? [], null);
        $this->setIfExists('warehouse_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_type', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('measure_unit', $data ?? [], null);
        $this->setIfExists('currency_amount', $data ?? [], null);
        $this->setIfExists('vat_rate', $data ?? [], null);
        $this->setIfExists('is_reverse_charge', $data ?? [], null);
        $this->setIfExists('reverse_charge_code', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['description_type'] === null) {
            $invalidProperties[] = "'description_type' can't be null";
        }
        $allowedValues = $this->getDescriptionTypeAllowableValues();
        if (!is_null($this->container['description_type']) && !in_array($this->container['description_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'description_type', must be one of '%s'",
                $this->container['description_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['currency_amount'] === null) {
            $invalidProperties[] = "'currency_amount' can't be null";
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
     * Gets transfer_id
     *
     * @return string|null
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id
     *
     * @param string|null $transfer_id Transaction transfer Id [Identifikace zaslaná externím systémem - je propsána na výstup, nikde se neukládá.]
     *
     * @return self
     */
    public function setTransferId($transfer_id)
    {
        if (is_null($transfer_id)) {
            throw new \InvalidArgumentException('non-nullable transfer_id cannot be null');
        }
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id Číslo skladu, pokud se nejedná o freeItem [TabStrom.Cislo]
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id)
    {
        if (is_null($warehouse_id)) {
            throw new \InvalidArgumentException('non-nullable warehouse_id cannot be null');
        }
        $this->container['warehouse_id'] = $warehouse_id;

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
     * @param string $description Popis položky [ean: TabBarCodeZbo.BarCode/catalogueId: TabKmenZbozi.CisloZbozi/freeItem: TabOZTxtPol.Popis]
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
     * Gets description_type
     *
     * @return string
     */
    public function getDescriptionType()
    {
        return $this->container['description_type'];
    }

    /**
     * Sets description_type
     *
     * @param string $description_type description_type
     *
     * @return self
     */
    public function setDescriptionType($description_type)
    {
        if (is_null($description_type)) {
            throw new \InvalidArgumentException('non-nullable description_type cannot be null');
        }
        $allowedValues = $this->getDescriptionTypeAllowableValues();
        if (!in_array($description_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'description_type', must be one of '%s'",
                    $description_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['description_type'] = $description_type;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Množství [TabPohybyZbozi.Mnozstvi/TabOZTxtPol.Mnozstvi]
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets measure_unit
     *
     * @return string|null
     */
    public function getMeasureUnit()
    {
        return $this->container['measure_unit'];
    }

    /**
     * Sets measure_unit
     *
     * @param string|null $measure_unit Měrná jednotka [TabPohybyZbozi.MJ/TabOZTxtPol.MJ]
     *
     * @return self
     */
    public function setMeasureUnit($measure_unit)
    {
        if (is_null($measure_unit)) {
            array_push($this->openAPINullablesSetToNull, 'measure_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('measure_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['measure_unit'] = $measure_unit;

        return $this;
    }

    /**
     * Gets currency_amount
     *
     * @return float
     */
    public function getCurrencyAmount()
    {
        return $this->container['currency_amount'];
    }

    /**
     * Sets currency_amount
     *
     * @param float $currency_amount Celková cena bez DPH v měně dokladu [TabPohybyZbozi.CCbezDaniVal/TabOZTxtPol.CCbezDaniVal]
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
     * @param float|null $vat_rate SazbaDPH [samovyměření ANO: TabPohybyZbozi.SazbaDPHproPDP/TabOZTxtPol.SazbaDPHproPDP, samovyměření NE: TabPohybyZbozi.SazbaDPH/TabOZTxtPol.SazbaDPH]
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
     * Gets is_reverse_charge
     *
     * @return bool|null
     */
    public function getIsReverseCharge()
    {
        return $this->container['is_reverse_charge'];
    }

    /**
     * Sets is_reverse_charge
     *
     * @param bool|null $is_reverse_charge Samovyměření Ano/Ne
     *
     * @return self
     */
    public function setIsReverseCharge($is_reverse_charge)
    {
        if (is_null($is_reverse_charge)) {
            throw new \InvalidArgumentException('non-nullable is_reverse_charge cannot be null');
        }
        $this->container['is_reverse_charge'] = $is_reverse_charge;

        return $this;
    }

    /**
     * Gets reverse_charge_code
     *
     * @return string|null
     */
    public function getReverseChargeCode()
    {
        return $this->container['reverse_charge_code'];
    }

    /**
     * Sets reverse_charge_code
     *
     * @param string|null $reverse_charge_code Kód PDP [TabCisKoduPDP.KodZbozi (vazba TabPohybyZbozi.IDKodPDP/TabOZTxtPol.IDKodPDP)]
     *
     * @return self
     */
    public function setReverseChargeCode($reverse_charge_code)
    {
        if (is_null($reverse_charge_code)) {
            throw new \InvalidArgumentException('non-nullable reverse_charge_code cannot be null');
        }
        $this->container['reverse_charge_code'] = $reverse_charge_code;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Poznámka k položce [TabPohybyZbozi.Poznamka/TabOZTxtPol.Poznamka]
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

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

