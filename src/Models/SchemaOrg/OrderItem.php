<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OrderItem extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The current status of the order item.
     *
     *
     * @var Schema.NET.OrderStatus|null
     */
    protected $orderItemStatus;

    /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     *
     *
     * @var decimal|null
     */
    protected $orderQuantity;

    /**
     * The item ordered.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    protected $orderedItem;

    /**
     * The delivery of the parcel related to this order or order item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    protected $orderDelivery;

    /**
     * The identifier of the order item.
     *
     *
     * @var string
     */
    protected $orderItemNumber;

    /**
     * @return Schema.NET.OrderStatus|null
     */
    public function getOrderItemStatus()
    {
        return $this->orderItemStatus;
    }

    /**
     * @param Schema.NET.OrderStatus|null $orderItemStatus
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderItemStatus($orderItemStatus)
    {
        $types = array(
            "Schema.NET.OrderStatus",
            "null",
        );

        $orderItemStatus = self::checkTypes($orderItemStatus, $types);

        $this->orderItemStatus = $orderItemStatus;
    }

    /**
     * @return decimal|null
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * @param decimal|null $orderQuantity
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderQuantity($orderQuantity)
    {
        $types = array(
            "decimal",
            "null",
        );

        $orderQuantity = self::checkTypes($orderQuantity, $types);

        $this->orderQuantity = $orderQuantity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|OrderItem $orderedItem
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderedItem($orderedItem)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "OrderItem",
        );

        $orderedItem = self::checkTypes($orderedItem, $types);

        $this->orderedItem = $orderedItem;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ParcelDelivery
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ParcelDelivery $orderDelivery
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderDelivery($orderDelivery)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ParcelDelivery",
        );

        $orderDelivery = self::checkTypes($orderDelivery, $types);

        $this->orderDelivery = $orderDelivery;
    }

    /**
     * @return string
     */
    public function getOrderItemNumber()
    {
        return $this->orderItemNumber;
    }

    /**
     * @param string $orderItemNumber
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOrderItemNumber($orderItemNumber)
    {
        $types = array(
            "string",
        );

        $orderItemNumber = self::checkTypes($orderItemNumber, $types);

        $this->orderItemNumber = $orderItemNumber;
    }

}
