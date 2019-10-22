<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PropertyValue extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
     * Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
     *
     *
     * @var string
     */
    protected $propertyID;

    /**
     * The value of the quantitative value or property value node.<br/><br/>
     * 
     * <ul>
     * <li>For <a class="localLink" href="https://schema.org/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="https://schema.org/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
     * <li>For <a class="localLink" href="https://schema.org/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var decimal|string|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null
     */
    protected $value;

    /**
     * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
     *
     *
     * @var Schema.NET.QualitativeValue|QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Models\SchemaOrg\Enumeration|PropertyValue|null
     */
    protected $valueReference;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var decimal|null
     */
    protected $maxValue;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var decimal|null
     */
    protected $minValue;

    /**
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUnitCode($unitCode)
    {
        $types = array(
            "string",
        );

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
    }

    /**
     * @return string
     */
    public function getPropertyID()
    {
        return $this->propertyID;
    }

    /**
     * @param string $propertyID
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPropertyID($propertyID)
    {
        $types = array(
            "string",
        );

        $propertyID = self::checkTypes($propertyID, $types);

        $this->propertyID = $propertyID;
    }

    /**
     * @return decimal|string|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param decimal|string|\OpenActive\Models\SchemaOrg\StructuredValue|bool|null $value
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = array(
            "decimal",
            "string",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "bool",
            "null",
        );

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return Schema.NET.QualitativeValue|QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Models\SchemaOrg\Enumeration|PropertyValue|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param Schema.NET.QualitativeValue|QuantitativeValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Models\SchemaOrg\Enumeration|PropertyValue|null $valueReference
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = array(
            "Schema.NET.QualitativeValue",
            "QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "PropertyValue",
            "null",
        );

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
    }

    /**
     * @return decimal|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param decimal|null $maxValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = array(
            "decimal",
            "null",
        );

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * @param string $unitText
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUnitText($unitText)
    {
        $types = array(
            "string",
        );

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

    /**
     * @return decimal|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param decimal|null $minValue
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = array(
            "decimal",
            "null",
        );

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

}
