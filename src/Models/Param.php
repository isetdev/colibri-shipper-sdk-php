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
class Param implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $customName public property
     */
    public $customName;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id         Initialization value for $this->id
     * @param string $customName Initialization value for $this->customName
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->customName = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']         = $this->id;
        $json['customName'] = $this->customName;

        return $json;
    }
}
