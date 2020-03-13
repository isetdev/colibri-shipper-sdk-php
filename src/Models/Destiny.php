<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Order destination
 */
class Destiny implements JsonSerializable
{
    /**
     * customer name
     * @var string|null $name public property
     */
    public $name;

    /**
     * customer address
     * @required
     * @var array $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name    Initialization value for $this->name
     * @param array  $address Initialization value for $this->address
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name    = func_get_arg(0);
            $this->address = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']    = $this->name;
        $json['address'] = $this->address;

        return $json;
    }
}
