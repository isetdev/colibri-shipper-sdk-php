<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Dimensions of item to freight calculation
 */
class Dimensions implements JsonSerializable
{
    /**
     * Item width
     * @required
     * @var double $width public property
     */
    public $width;

    /**
     * Item height
     * @required
     * @var double $height public property
     */
    public $height;

    /**
     * Item length
     * @required
     * @var double $length public property
     */
    public $length;

    /**
     * Constructor to set initial or default values of member properties
     * @param double $width  Initialization value for $this->width
     * @param double $height Initialization value for $this->height
     * @param double $length Initialization value for $this->length
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->width  = func_get_arg(0);
            $this->height = func_get_arg(1);
            $this->length = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['width']  = $this->width;
        $json['height'] = $this->height;
        $json['length'] = $this->length;

        return $json;
    }
}
