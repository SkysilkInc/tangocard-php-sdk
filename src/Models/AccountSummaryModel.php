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
 *Represents an Account Summary
 */
class AccountSummaryModel implements JsonSerializable
{
    /**
     * The account identifier
     * @required
     * @var string $accountIdentifier public property
     */
    public $accountIdentifier;

    /**
     * The account number
     * @required
     * @var string $accountNumber public property
     */
    public $accountNumber;

    /**
     * The display name
     * @required
     * @var string $displayName public property
     */
    public $displayName;

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
     * Constructor to set initial or default values of member properties
     * @param string    $accountIdentifier Initialization value for $this->accountIdentifier
     * @param string    $accountNumber     Initialization value for $this->accountNumber
     * @param string    $displayName       Initialization value for $this->displayName
     * @param \DateTime $createdAt         Initialization value for $this->createdAt
     * @param string    $status            Initialization value for $this->status
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->accountIdentifier = func_get_arg(0);
            $this->accountNumber     = func_get_arg(1);
            $this->displayName       = func_get_arg(2);
            $this->createdAt         = func_get_arg(3);
            $this->status            = func_get_arg(4);
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
        $json['createdAt']         = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['status']            = $this->status;

        return $json;
    }
}
