<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Dispatcher is who will ship the order
 */
class Dispatcher implements JsonSerializable
{
    /**
     * dispatcher info
     * @var array|null $doc public property
     */
    public $doc;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $doc Initialization value for $this->doc
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->doc = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['doc'] = $this->doc;

        return $json;
    }
}
