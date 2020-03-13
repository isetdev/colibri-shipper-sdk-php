<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib\Models;

use JsonSerializable;

/**
 *Credentials to access or authenticate in service gateway
 */
class Credentials implements JsonSerializable
{
    /**
     * login to access or authenticate in service endpoint
     * @var string|null $login public property
     */
    public $login;

    /**
     * password to access or authenticate in service endpoint
     * @var string|null $password public property
     */
    public $password;

    /**
     * code to access and identification the request in service endpoint
     * @var string|null $code public property
     */
    public $code;

    /**
     * company_code to access and identification the request in service endpoint
     * @maps company_code
     * @var string|null $companyCode public property
     */
    public $companyCode;

    /**
     * token to authenticate in service endpoint
     * @var string|null $token public property
     */
    public $token;

    /**
     * document info
     * @var array|null $doc public property
     */
    public $doc;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $login       Initialization value for $this->login
     * @param string $password    Initialization value for $this->password
     * @param string $code        Initialization value for $this->code
     * @param string $companyCode Initialization value for $this->companyCode
     * @param string $token       Initialization value for $this->token
     * @param array  $doc         Initialization value for $this->doc
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->login       = func_get_arg(0);
            $this->password    = func_get_arg(1);
            $this->code        = func_get_arg(2);
            $this->companyCode = func_get_arg(3);
            $this->token       = func_get_arg(4);
            $this->doc         = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['login']        = $this->login;
        $json['password']     = $this->password;
        $json['code']         = $this->code;
        $json['company_code'] = $this->companyCode;
        $json['token']        = $this->token;
        $json['doc']          = $this->doc;

        return $json;
    }
}
