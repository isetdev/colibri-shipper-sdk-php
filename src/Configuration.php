<?php
/*
 * FreteasyLib
 *
 * This file was automatically generated for ISET by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FreteasyLib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::PRODUCTION;

    /**
     * API Key (Request to Dev Team)
     * @var string
     */
    public static $xApiKey = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::DEFAULT_)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::PRODUCTION => array(
            Servers::DEFAULT_ => 'https://colibri-shipper.endpoint.directory/v1/',
        ),
        Environments::SANDBOX => array(
            Servers::DEFAULT_ => 'https://shipper-sandbox.endpoint.directory/',
        ),
    );
}
