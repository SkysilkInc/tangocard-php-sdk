<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the request to register a credit card
 */
class CreateCreditCardRequestModel implements JsonSerializable
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
     * The credit card's label/nickname
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * The IP address of the user registering the card
     * @required
     * @var string $ipAddress public property
     */
    public $ipAddress;

    /**
     * A NewCreditCard object
     * @required
     * @var \RaasLib\Models\NewCreditCardModel $creditCard public property
     */
    public $creditCard;

    /**
     * A BillingAddress object
     * @required
     * @var \RaasLib\Models\BillingAddressModel $billingAddress public property
     */
    public $billingAddress;

    /**
     * An optional array of FullNameEmail objects
     * @var \RaasLib\Models\FullNameEmailModel[]|null $contactInformation public property
     */
    public $contactInformation;

    /**
     * Constructor to set initial or default values of member properties
     * @param string              $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string              $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string              $label              Initialization value for $this->label
     * @param string              $ipAddress          Initialization value for $this->ipAddress
     * @param NewCreditCardModel  $creditCard         Initialization value for $this->creditCard
     * @param BillingAddressModel $billingAddress     Initialization value for $this->billingAddress
     * @param array               $contactInformation Initialization value for $this->contactInformation
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->customerIdentifier = func_get_arg(0);
            $this->accountIdentifier  = func_get_arg(1);
            $this->label              = func_get_arg(2);
            $this->ipAddress          = func_get_arg(3);
            $this->creditCard         = func_get_arg(4);
            $this->billingAddress     = func_get_arg(5);
            $this->contactInformation = func_get_arg(6);
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
        $json['label']              = $this->label;
        $json['ipAddress']          = $this->ipAddress;
        $json['creditCard']         = $this->creditCard;
        $json['billingAddress']     = $this->billingAddress;
        $json['contactInformation'] = $this->contactInformation;

        return $json;
    }
}
