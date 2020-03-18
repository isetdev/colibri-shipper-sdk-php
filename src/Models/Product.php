<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Product implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $sku public property
     */
    public $sku;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * @todo Write general description for this property
     * @required
     * @var \FreteasyLib\Models\Dimensions $dimensions public property
     */
    public $dimensions;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $weight public property
     */
    public $weight;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $declaredValue public property
     */
    public $declaredValue;

    /**
     * Constructor to set initial or default values of member properties
     * @param string     $sku           Initialization value for $this->sku
     * @param integer    $quantity      Initialization value for $this->quantity
     * @param Dimensions $dimensions    Initialization value for $this->dimensions
     * @param string     $weight        Initialization value for $this->weight
     * @param double     $declaredValue Initialization value for $this->declaredValue
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->sku           = func_get_arg(0);
            $this->quantity      = func_get_arg(1);
            $this->dimensions    = func_get_arg(2);
            $this->weight        = func_get_arg(3);
            $this->declaredValue = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['sku']           = $this->sku;
        $json['quantity']      = $this->quantity;
        $json['dimensions']    = $this->dimensions;
        $json['weight']        = $this->weight;
        $json['declaredValue'] = $this->declaredValue;

        return $json;
    }
}