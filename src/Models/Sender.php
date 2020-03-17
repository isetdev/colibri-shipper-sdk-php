<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Order origin info
 */
class Sender implements JsonSerializable
{
    /**
     * seller address
     * @required
     * @var \FreteasyLib\Models\Address $address public property
     */
    public $address;

    /**
     * seller documents
     * @required
     * @var \FreteasyLib\Models\Document $doc public property
     */
    public $doc;

    /**
     * seller name
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param Address  $address Initialization value for $this->address
     * @param Document $doc     Initialization value for $this->doc
     * @param string   $name    Initialization value for $this->name
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->address = func_get_arg(0);
            $this->doc     = func_get_arg(1);
            $this->name    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address'] = $this->address;
        $json['doc']     = $this->doc;
        $json['name']    = $this->name;

        return $json;
    }
}
