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
 *Represents a Customer/Group
 */
class CustomerModel implements JsonSerializable
{
    /**
     * The customer identifier
     * @required
     * @var string $customerIdentifier public property
     */
    public $customerIdentifier;

    /**
     * The display name
     * @required
     * @var string $displayName public property
     */
    public $displayName;

    /**
     * The status of the customer
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The date the customer was created
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * An array of AccountSummary objects
     * @var \RaasLib\Models\AccountSummaryModel[]|null $accounts public property
     */
    public $accounts;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string    $displayName        Initialization value for $this->displayName
     * @param string    $status             Initialization value for $this->status
     * @param \DateTime $createdAt          Initialization value for $this->createdAt
     * @param array     $accounts           Initialization value for $this->accounts
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->customerIdentifier = func_get_arg(0);
            $this->displayName        = func_get_arg(1);
            $this->status             = func_get_arg(2);
            $this->createdAt          = func_get_arg(3);
            $this->accounts           = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['displayName']        = $this->displayName;
        $json['status']             = $this->status;
        $json['createdAt']          = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['accounts']           = $this->accounts;

        return $json;
    }
}
