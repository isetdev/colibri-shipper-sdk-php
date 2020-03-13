<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Address info of sender or destiny
 */
class Address implements JsonSerializable
{
    /**
     * postal code, zip code, cep, etc
     * @required
     * @var string $postcode public property
     */
    public $postcode;

    /**
     * street name
     * @maps street_line1
     * @var string|null $streetLine1 public property
     */
    public $streetLine1;

    /**
     * complement
     * @maps street_line2
     * @var string|null $streetLine2 public property
     */
    public $streetLine2;

    /**
     * number of place
     * @var string|null $number public property
     */
    public $number;

    /**
     * suburb of place
     * @var string|null $suburb public property
     */
    public $suburb;

    /**
     * city of place
     * @var string|null $city public property
     */
    public $city;

    /**
     * state of place
     * @var string|null $state public property
     */
    public $state;

    /**
     * country of place
     * @var string|null $country public property
     */
    public $country;

    /**
     * neighborhood of place
     * @var string|null $neighborhood public property
     */
    public $neighborhood;

    /**
     * country of place
     * @var string|null $county public property
     */
    public $county;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $postcode     Initialization value for $this->postcode
     * @param string $streetLine1  Initialization value for $this->streetLine1
     * @param string $streetLine2  Initialization value for $this->streetLine2
     * @param string $number       Initialization value for $this->number
     * @param string $suburb       Initialization value for $this->suburb
     * @param string $city         Initialization value for $this->city
     * @param string $state        Initialization value for $this->state
     * @param string $country      Initialization value for $this->country
     * @param string $neighborhood Initialization value for $this->neighborhood
     * @param string $county       Initialization value for $this->county
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->postcode     = func_get_arg(0);
            $this->streetLine1  = func_get_arg(1);
            $this->streetLine2  = func_get_arg(2);
            $this->number       = func_get_arg(3);
            $this->suburb       = func_get_arg(4);
            $this->city         = func_get_arg(5);
            $this->state        = func_get_arg(6);
            $this->country      = func_get_arg(7);
            $this->neighborhood = func_get_arg(8);
            $this->county       = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['postcode']     = $this->postcode;
        $json['street_line1'] = $this->streetLine1;
        $json['street_line2'] = $this->streetLine2;
        $json['number']       = $this->number;
        $json['suburb']       = $this->suburb;
        $json['city']         = $this->city;
        $json['state']        = $this->state;
        $json['country']      = $this->country;
        $json['neighborhood'] = $this->neighborhood;
        $json['county']       = $this->county;

        return $json;
    }
}
