<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Item information to freight calculation
 */
class Item implements JsonSerializable
{
    /**
     * item identification
     * @var string|null $sku public property
     */
    public $sku;

    /**
     * item quantity
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * dimensions of item
     * @required
     * @var array $dimensions public property
     */
    public $dimensions;

    /**
     * weight of item
     * @required
     * @var double $weight public property
     */
    public $weight;

    /**
     * declared value of item
     * @required
     * @maps declared_value
     * @var double $declaredValue public property
     */
    public $declaredValue;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $sku           Initialization value for $this->sku
     * @param integer $quantity      Initialization value for $this->quantity
     * @param array   $dimensions    Initialization value for $this->dimensions
     * @param double  $weight        Initialization value for $this->weight
     * @param double  $declaredValue Initialization value for $this->declaredValue
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 5:
                $this->sku           = func_get_arg(0);
                $this->quantity      = func_get_arg(1);
                $this->dimensions    = func_get_arg(2);
                $this->weight        = func_get_arg(3);
                $this->declaredValue = func_get_arg(4);
                break;

            default:
                $this->quantity = 1;
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['sku']            = $this->sku;
        $json['quantity']       = $this->quantity;
        $json['dimensions']     = $this->dimensions;
        $json['weight']         = $this->weight;
        $json['declared_value'] = $this->declaredValue;

        return $json;
    }
}
