<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the response from the get exchange rates call
 */
class ExchangeRateResponseModel implements JsonSerializable
{
    /**
     * A disclaimer about the exchange rates returned
     * @required
     * @var string $disclaimer public property
     */
    public $disclaimer;

    /**
     * An array of ExchangeRate objects
     * @required
     * @var \RaasLib\Models\ExchangeRateModel[] $exchangeRates public property
     */
    public $exchangeRates;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $disclaimer    Initialization value for $this->disclaimer
     * @param array  $exchangeRates Initialization value for $this->exchangeRates
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->disclaimer    = func_get_arg(0);
            $this->exchangeRates = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['disclaimer']    = $this->disclaimer;
        $json['exchangeRates'] = $this->exchangeRates;

        return $json;
    }
}
