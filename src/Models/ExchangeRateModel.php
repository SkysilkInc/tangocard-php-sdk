<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;
use RaasLib\Utils\DateTimeHelper;

/**
 *Represents an Exchange Rate
 */
class ExchangeRateModel implements JsonSerializable
{
    /**
     * When the exchange rate was last updated
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $lastModifiedDate public property
     */
    public $lastModifiedDate;

    /**
     * The reward currency
     * @required
     * @var string $rewardCurrency public property
     */
    public $rewardCurrency;

    /**
     * The base currency
     * @required
     * @var string $baseCurrency public property
     */
    public $baseCurrency;

    /**
     * The exchange rate
     * @required
     * @var double $baseFx public property
     */
    public $baseFx;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $lastModifiedDate Initialization value for $this->lastModifiedDate
     * @param string    $rewardCurrency   Initialization value for $this->rewardCurrency
     * @param string    $baseCurrency     Initialization value for $this->baseCurrency
     * @param double    $baseFx           Initialization value for $this->baseFx
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->lastModifiedDate = func_get_arg(0);
            $this->rewardCurrency   = func_get_arg(1);
            $this->baseCurrency     = func_get_arg(2);
            $this->baseFx           = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['lastModifiedDate'] = DateTimeHelper::toRfc3339DateTime($this->lastModifiedDate);
        $json['rewardCurrency']   = $this->rewardCurrency;
        $json['baseCurrency']     = $this->baseCurrency;
        $json['baseFx']           = $this->baseFx;

        return $json;
    }
}
