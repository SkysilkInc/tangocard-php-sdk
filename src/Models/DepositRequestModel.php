<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the request to deposit funds via credit card
 */
class DepositRequestModel implements JsonSerializable
{
    /**
     * The customer identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * The account identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * The credit card token
     * @required
     * @var string $creditCardToken public property
     */
    public $creditCardToken;

    /**
     * The amount to fund
     * @required
     * @var double $amount public property
     */
    public $amount;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string $creditCardToken    Initialization value for $this->creditCardToken
     * @param double $amount             Initialization value for $this->amount
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->customerIdentifier = func_get_arg(0);
            $this->accountIdentifier  = func_get_arg(1);
            $this->creditCardToken    = func_get_arg(2);
            $this->amount             = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['accountIdentifier']  = $this->accountIdentifier;
        $json['creditCardToken']    = $this->creditCardToken;
        $json['amount']             = $this->amount;

        return $json;
    }
}
