<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib;

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
    public static $environment = Environments::SANDBOX;

    /**
     * Platform Name (Provided by Tango Card)
     * @var string
     */
    public static $platformName = 'QAPlatform2';

    /**
     * Platform Key (Provided by Tango Card)
     * @var string
     */
    public static $platformKey = 'apYPfT6HNONpDRUj3CLGWYt7gvIHONpDRUYPfT6Hj';

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
        Environments::SANDBOX => array(
            Servers::DEFAULT_ => 'https://integration-api.tangocard.com/raas/v2',
        ),
        Environments::PRODUCTION => array(
            Servers::DEFAULT_ => 'https://api.tangocard.com/raas/v2',
        ),
    );
}
