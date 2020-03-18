<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Order destination info
 */
class Destiny implements JsonSerializable
{
    /**
     * customer address
     * @required
     * @var \FreteasyLib\Models\Address $address public property
     */
    public $address;

    /**
     * customer name
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param Address $address Initialization value for $this->address
     * @param string  $name    Initialization value for $this->name
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->address = func_get_arg(0);
            $this->name    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address'] = $this->address;
        $json['name']    = $this->name;

        return $json;
    }
}
