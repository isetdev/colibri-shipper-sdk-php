<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Freight gateway info
 */
class Service implements JsonSerializable
{
    /**
     * service id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * service credentials
     * @required
     * @var \FreteasyLib\Models\Credentials $credentials public property
     */
    public $credentials;

    /**
     * service methods
     * @var \FreteasyLib\Models\Method[]|null $methods public property
     */
    public $methods;

    /**
     * Constructor to set initial or default values of member properties
     * @param string      $id          Initialization value for $this->id
     * @param Credentials $credentials Initialization value for $this->credentials
     * @param array       $methods     Initialization value for $this->methods
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->credentials = func_get_arg(1);
            $this->methods     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['credentials'] = $this->credentials;
        $json['methods']     = $this->methods;

        return $json;
    }
}
