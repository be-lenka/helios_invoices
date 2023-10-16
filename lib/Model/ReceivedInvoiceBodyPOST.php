<?php
/**
 * ReceivedInvoiceBodyPOST
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
 * ReceivedInvoiceBodyPOST Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\Helios\Invoices
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceivedInvoiceBodyPOST implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'receivedInvoiceBodyPOST';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_currency_rounding' => 'float',
        'supplier' => '\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTSupplier',
        'document_type' => 'string',
        'issue_date' => '\DateTime',
        'transaction_date' => '\DateTime',
        'vat_date' => '\DateTime',
        'vat_applicable' => 'string',
        'due_date' => '\DateTime',
        'tin' => 'string',
        'currency_code' => 'string',
        'exchange_rate' => 'float',
        'exchange_unit' => 'int',
        'invoice_no' => 'string',
        'variable_symbol' => 'string',
        'constant_symbol' => 'string',
        'specific_symbol' => 'string',
        'delivery_description' => 'string',
        'order_no' => 'string',
        'note' => 'string',
        'auto_lock' => 'bool',
        'items' => '\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTItemsInner[]',
        'vat_recapitulation' => '\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTVatRecapitulationInner[]',
        'payments' => '\BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTPaymentsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_currency_rounding' => 'double',
        'supplier' => null,
        'document_type' => null,
        'issue_date' => 'date',
        'transaction_date' => 'date',
        'vat_date' => 'date',
        'vat_applicable' => null,
        'due_date' => 'date',
        'tin' => null,
        'currency_code' => null,
        'exchange_rate' => 'double',
        'exchange_unit' => 'int32',
        'invoice_no' => null,
        'variable_symbol' => null,
        'constant_symbol' => null,
        'specific_symbol' => null,
        'delivery_description' => null,
        'order_no' => null,
        'note' => null,
        'auto_lock' => null,
        'items' => null,
        'vat_recapitulation' => null,
        'payments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total_currency_rounding' => false,
		'supplier' => false,
		'document_type' => false,
		'issue_date' => false,
		'transaction_date' => false,
		'vat_date' => true,
		'vat_applicable' => false,
		'due_date' => true,
		'tin' => false,
		'currency_code' => false,
		'exchange_rate' => false,
		'exchange_unit' => false,
		'invoice_no' => false,
		'variable_symbol' => false,
		'constant_symbol' => false,
		'specific_symbol' => false,
		'delivery_description' => false,
		'order_no' => false,
		'note' => false,
		'auto_lock' => false,
		'items' => false,
		'vat_recapitulation' => false,
		'payments' => false
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
        'total_currency_rounding' => 'totalCurrencyRounding',
        'supplier' => 'supplier',
        'document_type' => 'documentType',
        'issue_date' => 'issueDate',
        'transaction_date' => 'transactionDate',
        'vat_date' => 'vatDate',
        'vat_applicable' => 'vatApplicable',
        'due_date' => 'dueDate',
        'tin' => 'tin',
        'currency_code' => 'currencyCode',
        'exchange_rate' => 'exchangeRate',
        'exchange_unit' => 'exchangeUnit',
        'invoice_no' => 'invoiceNo',
        'variable_symbol' => 'variableSymbol',
        'constant_symbol' => 'constantSymbol',
        'specific_symbol' => 'specificSymbol',
        'delivery_description' => 'deliveryDescription',
        'order_no' => 'orderNo',
        'note' => 'note',
        'auto_lock' => 'autoLock',
        'items' => 'items',
        'vat_recapitulation' => 'vatRecapitulation',
        'payments' => 'payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_currency_rounding' => 'setTotalCurrencyRounding',
        'supplier' => 'setSupplier',
        'document_type' => 'setDocumentType',
        'issue_date' => 'setIssueDate',
        'transaction_date' => 'setTransactionDate',
        'vat_date' => 'setVatDate',
        'vat_applicable' => 'setVatApplicable',
        'due_date' => 'setDueDate',
        'tin' => 'setTin',
        'currency_code' => 'setCurrencyCode',
        'exchange_rate' => 'setExchangeRate',
        'exchange_unit' => 'setExchangeUnit',
        'invoice_no' => 'setInvoiceNo',
        'variable_symbol' => 'setVariableSymbol',
        'constant_symbol' => 'setConstantSymbol',
        'specific_symbol' => 'setSpecificSymbol',
        'delivery_description' => 'setDeliveryDescription',
        'order_no' => 'setOrderNo',
        'note' => 'setNote',
        'auto_lock' => 'setAutoLock',
        'items' => 'setItems',
        'vat_recapitulation' => 'setVatRecapitulation',
        'payments' => 'setPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_currency_rounding' => 'getTotalCurrencyRounding',
        'supplier' => 'getSupplier',
        'document_type' => 'getDocumentType',
        'issue_date' => 'getIssueDate',
        'transaction_date' => 'getTransactionDate',
        'vat_date' => 'getVatDate',
        'vat_applicable' => 'getVatApplicable',
        'due_date' => 'getDueDate',
        'tin' => 'getTin',
        'currency_code' => 'getCurrencyCode',
        'exchange_rate' => 'getExchangeRate',
        'exchange_unit' => 'getExchangeUnit',
        'invoice_no' => 'getInvoiceNo',
        'variable_symbol' => 'getVariableSymbol',
        'constant_symbol' => 'getConstantSymbol',
        'specific_symbol' => 'getSpecificSymbol',
        'delivery_description' => 'getDeliveryDescription',
        'order_no' => 'getOrderNo',
        'note' => 'getNote',
        'auto_lock' => 'getAutoLock',
        'items' => 'getItems',
        'vat_recapitulation' => 'getVatRecapitulation',
        'payments' => 'getPayments'
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

    public const VAT_APPLICABLE_NOT_SPECIFIED = 'notSpecified';
    public const VAT_APPLICABLE_PROFORMA = 'proforma';
    public const VAT_APPLICABLE_TAX_INVOICE = 'taxInvoice';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVatApplicableAllowableValues()
    {
        return [
            self::VAT_APPLICABLE_NOT_SPECIFIED,
            self::VAT_APPLICABLE_PROFORMA,
            self::VAT_APPLICABLE_TAX_INVOICE,
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
        $this->setIfExists('total_currency_rounding', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('issue_date', $data ?? [], null);
        $this->setIfExists('transaction_date', $data ?? [], null);
        $this->setIfExists('vat_date', $data ?? [], null);
        $this->setIfExists('vat_applicable', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('tin', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('exchange_unit', $data ?? [], null);
        $this->setIfExists('invoice_no', $data ?? [], null);
        $this->setIfExists('variable_symbol', $data ?? [], null);
        $this->setIfExists('constant_symbol', $data ?? [], null);
        $this->setIfExists('specific_symbol', $data ?? [], null);
        $this->setIfExists('delivery_description', $data ?? [], null);
        $this->setIfExists('order_no', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('auto_lock', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('vat_recapitulation', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
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

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        if ($this->container['transaction_date'] === null) {
            $invalidProperties[] = "'transaction_date' can't be null";
        }
        $allowedValues = $this->getVatApplicableAllowableValues();
        if (!is_null($this->container['vat_applicable']) && !in_array($this->container['vat_applicable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vat_applicable', must be one of '%s'",
                $this->container['vat_applicable'],
                implode("', '", $allowedValues)
            );
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
     * Gets total_currency_rounding
     *
     * @return float|null
     */
    public function getTotalCurrencyRounding()
    {
        return $this->container['total_currency_rounding'];
    }

    /**
     * Sets total_currency_rounding
     *
     * @param float|null $total_currency_rounding Zaokrouhlení v měně dokladu [TabDokladyZbozi.ZadanaCastkaZaoVal]
     *
     * @return self
     */
    public function setTotalCurrencyRounding($total_currency_rounding)
    {
        if (is_null($total_currency_rounding)) {
            throw new \InvalidArgumentException('non-nullable total_currency_rounding cannot be null');
        }
        $this->container['total_currency_rounding'] = $total_currency_rounding;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTSupplier|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTSupplier|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            throw new \InvalidArgumentException('non-nullable supplier cannot be null');
        }
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type Řada dokladu [TabDruhDokZbo.RadaDokladu]
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime|null $issue_date Datum vystavení [TabDokladyZbozi.DatPovinnostiFa]
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        if (is_null($issue_date)) {
            throw new \InvalidArgumentException('non-nullable issue_date cannot be null');
        }
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime $transaction_date Datum případu [TabDokladyZbozi.DatPorizeni]
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        if (is_null($transaction_date)) {
            throw new \InvalidArgumentException('non-nullable transaction_date cannot be null');
        }
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets vat_date
     *
     * @return \DateTime|null
     */
    public function getVatDate()
    {
        return $this->container['vat_date'];
    }

    /**
     * Sets vat_date
     *
     * @param \DateTime|null $vat_date DUZP [TabDokladyZbozi.DUZP]
     *
     * @return self
     */
    public function setVatDate($vat_date)
    {
        if (is_null($vat_date)) {
            array_push($this->openAPINullablesSetToNull, 'vat_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat_date'] = $vat_date;

        return $this;
    }

    /**
     * Gets vat_applicable
     *
     * @return string|null
     */
    public function getVatApplicable()
    {
        return $this->container['vat_applicable'];
    }

    /**
     * Sets vat_applicable
     *
     * @param string|null $vat_applicable vat_applicable
     *
     * @return self
     */
    public function setVatApplicable($vat_applicable)
    {
        if (is_null($vat_applicable)) {
            throw new \InvalidArgumentException('non-nullable vat_applicable cannot be null');
        }
        $allowedValues = $this->getVatApplicableAllowableValues();
        if (!in_array($vat_applicable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vat_applicable', must be one of '%s'",
                    $vat_applicable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vat_applicable'] = $vat_applicable;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date Splatno [TabDokladyZbozi.Splatnost]
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            array_push($this->openAPINullablesSetToNull, 'due_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('due_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['due_date'] = $due_date;

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
     * @param string|null $tin DIČ vlastní organizace [TabDokladyZbozi.SamoVyDICDPH]
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
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Měna dokladu [TabDokladyZbozi.Mena]
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate Kurz [TabDokladyZbozi.Kurz]
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets exchange_unit
     *
     * @return int|null
     */
    public function getExchangeUnit()
    {
        return $this->container['exchange_unit'];
    }

    /**
     * Sets exchange_unit
     *
     * @param int|null $exchange_unit Množství kurz [TabDokladyZbozi.JednotkaMeny]
     *
     * @return self
     */
    public function setExchangeUnit($exchange_unit)
    {
        if (is_null($exchange_unit)) {
            throw new \InvalidArgumentException('non-nullable exchange_unit cannot be null');
        }
        $this->container['exchange_unit'] = $exchange_unit;

        return $this;
    }

    /**
     * Gets invoice_no
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string|null $invoice_no Evidenční číslo daňového dokladu [TabDokladyZbozi.DodFakKV]
     *
     * @return self
     */
    public function setInvoiceNo($invoice_no)
    {
        if (is_null($invoice_no)) {
            throw new \InvalidArgumentException('non-nullable invoice_no cannot be null');
        }
        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets variable_symbol
     *
     * @return string|null
     */
    public function getVariableSymbol()
    {
        return $this->container['variable_symbol'];
    }

    /**
     * Sets variable_symbol
     *
     * @param string|null $variable_symbol Variabilní symbol [TabDokladyZbozi.DodFak]
     *
     * @return self
     */
    public function setVariableSymbol($variable_symbol)
    {
        if (is_null($variable_symbol)) {
            throw new \InvalidArgumentException('non-nullable variable_symbol cannot be null');
        }
        $this->container['variable_symbol'] = $variable_symbol;

        return $this;
    }

    /**
     * Gets constant_symbol
     *
     * @return string|null
     */
    public function getConstantSymbol()
    {
        return $this->container['constant_symbol'];
    }

    /**
     * Sets constant_symbol
     *
     * @param string|null $constant_symbol Konstantní symbol [TabDokladyZbozi.KonstSymbol]
     *
     * @return self
     */
    public function setConstantSymbol($constant_symbol)
    {
        if (is_null($constant_symbol)) {
            throw new \InvalidArgumentException('non-nullable constant_symbol cannot be null');
        }
        $this->container['constant_symbol'] = $constant_symbol;

        return $this;
    }

    /**
     * Gets specific_symbol
     *
     * @return string|null
     */
    public function getSpecificSymbol()
    {
        return $this->container['specific_symbol'];
    }

    /**
     * Sets specific_symbol
     *
     * @param string|null $specific_symbol Specifický symbol [TabDokladyZbozi.SpecifickySymbol]
     *
     * @return self
     */
    public function setSpecificSymbol($specific_symbol)
    {
        if (is_null($specific_symbol)) {
            throw new \InvalidArgumentException('non-nullable specific_symbol cannot be null');
        }
        $this->container['specific_symbol'] = $specific_symbol;

        return $this;
    }

    /**
     * Gets delivery_description
     *
     * @return string|null
     */
    public function getDeliveryDescription()
    {
        return $this->container['delivery_description'];
    }

    /**
     * Sets delivery_description
     *
     * @param string|null $delivery_description Popis dodávky [TabDokladyZbozi.PopisDodavky]
     *
     * @return self
     */
    public function setDeliveryDescription($delivery_description)
    {
        if (is_null($delivery_description)) {
            throw new \InvalidArgumentException('non-nullable delivery_description cannot be null');
        }
        $this->container['delivery_description'] = $delivery_description;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string|null $order_no Číslo objednávky [TabDokladyZbozi.NavaznaObjednavka]
     *
     * @return self
     */
    public function setOrderNo($order_no)
    {
        if (is_null($order_no)) {
            throw new \InvalidArgumentException('non-nullable order_no cannot be null');
        }
        $this->container['order_no'] = $order_no;

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
     * @param string|null $note Poznámka [TabDokladyZbozi.Poznamka]
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
     * Gets auto_lock
     *
     * @return bool|null
     */
    public function getAutoLock()
    {
        return $this->container['auto_lock'];
    }

    /**
     * Sets auto_lock
     *
     * @param bool|null $auto_lock Doklad se automaticky zamkne [akce realizace faktury]
     *
     * @return self
     */
    public function setAutoLock($auto_lock)
    {
        if (is_null($auto_lock)) {
            throw new \InvalidArgumentException('non-nullable auto_lock cannot be null');
        }
        $this->container['auto_lock'] = $auto_lock;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTItemsInner[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTItemsInner[]|null $items Položky faktury
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets vat_recapitulation
     *
     * @return \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTVatRecapitulationInner[]|null
     */
    public function getVatRecapitulation()
    {
        return $this->container['vat_recapitulation'];
    }

    /**
     * Sets vat_recapitulation
     *
     * @param \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTVatRecapitulationInner[]|null $vat_recapitulation Rekapitulace DPH
     *
     * @return self
     */
    public function setVatRecapitulation($vat_recapitulation)
    {
        if (is_null($vat_recapitulation)) {
            throw new \InvalidArgumentException('non-nullable vat_recapitulation cannot be null');
        }
        $this->container['vat_recapitulation'] = $vat_recapitulation;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTPaymentsInner[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \BeLenka\Helios\Invoices\Model\ReceivedInvoiceBodyPOSTPaymentsInner[]|null $payments Úhrady
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

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

