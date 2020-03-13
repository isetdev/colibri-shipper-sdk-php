<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Order origin
 */
class Sender implements JsonSerializable
{
    /**
     * seller name
     * @var string|null $name public property
     */
    public $name;

    /**
     * seller documents
     * @var array|null $doc public property
     */
    public $doc;

    /**
     * seller address
     * @required
     * @var array $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name    Initialization value for $this->name
     * @param array  $doc     Initialization value for $this->doc
     * @param array  $address Initialization value for $this->address
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->name    = func_get_arg(0);
            $this->doc     = func_get_arg(1);
            $this->address = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']    = $this->name;
        $json['doc']     = $this->doc;
        $json['address'] = $this->address;

        return $json;
    }
}
