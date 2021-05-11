<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Observation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Observation";
    }

    public static function fieldList() {
        $fields = [
            "marginOfError" => "marginOfError",
            "observedNode" => "observedNode",
            "measuredProperty" => "measuredProperty",
            "observationDate" => "observationDate",
            "measuredValue" => "measuredValue",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A marginOfError for an [[Observation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $marginOfError;

    /**
     * The observedNode of an [[Observation]], often a [[StatisticalPopulation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StatisticalPopulation
     */
    protected $observedNode;

    /**
     * The measuredProperty of an [[Observation]], either a schema.org property, a property from other RDF-compatible systems e.g. W3C RDF Data Cube, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
     *
     *
     * @var \OpenActive\Enums\PropertyEnumeration|null
     */
    protected $measuredProperty;

    /**
     * The observationDate of an [[Observation]].
     *
     *
     * @var DateTime|null
     */
    protected $observationDate;

    /**
     * The measuredValue of an [[Observation]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataType
     */
    protected $measuredValue;

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getMarginOfError()
    {
        return $this->marginOfError;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue $marginOfError
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMarginOfError($marginOfError)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $marginOfError = self::checkTypes($marginOfError, $types);

        $this->marginOfError = $marginOfError;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StatisticalPopulation
     */
    public function getObservedNode()
    {
        return $this->observedNode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StatisticalPopulation $observedNode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservedNode($observedNode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\StatisticalPopulation",
        ];

        $observedNode = self::checkTypes($observedNode, $types);

        $this->observedNode = $observedNode;
    }

    /**
     * @return \OpenActive\Enums\PropertyEnumeration|null
     */
    public function getMeasuredProperty()
    {
        return $this->measuredProperty;
    }

    /**
     * @param \OpenActive\Enums\PropertyEnumeration|null $measuredProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasuredProperty($measuredProperty)
    {
        $types = [
            "\OpenActive\Enums\PropertyEnumeration",
            "null",
        ];

        $measuredProperty = self::checkTypes($measuredProperty, $types);

        $this->measuredProperty = $measuredProperty;
    }

    /**
     * @return DateTime|null
     */
    public function getObservationDate()
    {
        return $this->observationDate;
    }

    /**
     * @param DateTime|null $observationDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservationDate($observationDate)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $observationDate = self::checkTypes($observationDate, $types);

        $this->observationDate = $observationDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataType
     */
    public function getMeasuredValue()
    {
        return $this->measuredValue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataType $measuredValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasuredValue($measuredValue)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DataType",
        ];

        $measuredValue = self::checkTypes($measuredValue, $types);

        $this->measuredValue = $measuredValue;
    }

}
