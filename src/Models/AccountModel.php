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
 *Represents an Account
 */
class AccountModel implements JsonSerializable
{
    /**
     * An account identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * An account number
     * @required
     * @var string $accountNumber public property
     */
    public $accountNumber;

    /**
     * A display name
     * @required
     * @var string $displayName public property
     */
    public $displayName;

    /**
     * The currency code for the account
     * @required
     * @var string $currencyCode public property
     */
    public $currencyCode;

    /**
     * The current balance of the account
     * @required
     * @var double $currentBalance public property
     */
    public $currentBalance;

    /**
     * The date the account was created
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * The status of the account
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The contact email on file for the account
     * @var string|null $contactEmail public property
     */
    public $contactEmail;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $accountIdentifier Initialization value for $this->accountIdentifier
     * @param string    $accountNumber     Initialization value for $this->accountNumber
     * @param string    $displayName       Initialization value for $this->displayName
     * @param string    $currencyCode      Initialization value for $this->currencyCode
     * @param double    $currentBalance    Initialization value for $this->currentBalance
     * @param \DateTime $createdAt         Initialization value for $this->createdAt
     * @param string    $status            Initialization value for $this->status
     * @param string    $contactEmail      Initialization value for $this->contactEmail
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 8:
                $this->accountIdentifier = func_get_arg(0);
                $this->accountNumber     = func_get_arg(1);
                $this->displayName       = func_get_arg(2);
                $this->currencyCode      = func_get_arg(3);
                $this->currentBalance    = func_get_arg(4);
                $this->createdAt         = func_get_arg(5);
                $this->status            = func_get_arg(6);
                $this->contactEmail      = func_get_arg(7);
                break;

            default:
                $this->currencyCode = 'USD';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accountIdentifier'] = $this->accountIdentifier;
        $json['accountNumber']     = $this->accountNumber;
        $json['displayName']       = $this->displayName;
        $json['currencyCode']      = $this->currencyCode;
        $json['currentBalance']    = $this->currentBalance;
        $json['createdAt']         = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['status']            = $this->status;
        $json['contactEmail']      = $this->contactEmail;

        return $json;
    }
}
