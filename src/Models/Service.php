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
     * service methods
     * @var \FreteasyLib\Models\Methods[]|null $methods public property
     */
    public $methods;

    /**
     * service credentials
     * @required
     * @var array $credentials public property
     */
    public $credentials;

    /**
     * service dispatcher
     * @var array|null $dispatcher public property
     */
    public $dispatcher;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id          Initialization value for $this->id
     * @param array  $methods     Initialization value for $this->methods
     * @param array  $credentials Initialization value for $this->credentials
     * @param array  $dispatcher  Initialization value for $this->dispatcher
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->methods     = func_get_arg(1);
            $this->credentials = func_get_arg(2);
            $this->dispatcher  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['methods']     = $this->methods;
        $json['credentials'] = $this->credentials;
        $json['dispatcher']  = $this->dispatcher;

        return $json;
    }
}
