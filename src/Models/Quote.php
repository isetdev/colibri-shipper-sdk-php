<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Quote input to calculate freight in services endpoints
 */
class Quote implements JsonSerializable
{
    /**
     * services to quote
     * @required
     * @var \FreteasyLib\Models\Service[] $services public property
     */
    public $services;

    /**
     * order sender
     * @required
     * @var \FreteasyLib\Models\Sender $sender public property
     */
    public $sender;

    /**
     * order destiny
     * @required
     * @var \FreteasyLib\Models\Destiny $destiny public property
     */
    public $destiny;

    /**
     * items in order
     * @required
     * @var \FreteasyLib\Models\Item[] $items public property
     */
    public $items;

    /**
     * Constructor to set initial or default values of member properties
     * @param array   $services Initialization value for $this->services
     * @param Sender  $sender   Initialization value for $this->sender
     * @param Destiny $destiny  Initialization value for $this->destiny
     * @param array   $items    Initialization value for $this->items
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->services = func_get_arg(0);
            $this->sender   = func_get_arg(1);
            $this->destiny  = func_get_arg(2);
            $this->items    = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['services'] = $this->services;
        $json['sender']   = $this->sender;
        $json['destiny']  = $this->destiny;
        $json['items']    = $this->items;

        return $json;
    }
}
