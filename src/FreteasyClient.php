<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib;

use FreteasyLib\Controllers;

/**
 * FreteasyLib client class
 */
class FreteasyClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $xApiKey = null
    ) {
        Configuration::$xApiKey = $xApiKey ? $xApiKey : Configuration::$xApiKey;
    }
    /**
     * Singleton access to Quote controller
     * @return Controllers\QuoteController The *Singleton* instance
     */
    public function getQuote()
    {
        return Controllers\QuoteController::getInstance();
    }
    /**
     * Singleton access to Address controller
     * @return Controllers\AddressController The *Singleton* instance
     */
    public function getAddress()
    {
        return Controllers\AddressController::getInstance();
    }
}
