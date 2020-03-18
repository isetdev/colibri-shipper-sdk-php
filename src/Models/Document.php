<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Documentation to identify the freight calculation requester
 */
class Document implements JsonSerializable
{
    /**
     * document type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * document number
     * @required
     * @var string $number public property
     */
    public $number;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type   Initialization value for $this->type
     * @param string $number Initialization value for $this->number
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type   = func_get_arg(0);
            $this->number = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']   = $this->type;
        $json['number'] = $this->number;

        return $json;
    }
}
