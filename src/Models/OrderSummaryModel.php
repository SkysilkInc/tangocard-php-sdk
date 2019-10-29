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
 *Represents an Order Summary
 */
class OrderSummaryModel implements JsonSerializable
{
    /**
     * The reference order id
     * @required
     * @var string $referenceOrderID public property
     */
    public $referenceOrderID;

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
     * The account number
     * @required
     * @var string $accountNumber public property
     */
    public $accountNumber;

    /**
     * The order amount information
     * @required
     * @var \RaasLib\Models\CurrencyBreakdownModel $amountCharged public property
     */
    public $amountCharged;

    /**
     * The margin share information
     * @required
     * @var \RaasLib\Models\CurrencyBreakdownModel $marginShare public property
     */
    public $marginShare;

    /**
     * The UTID
     * @required
     * @var string $utid public property
     */
    public $utid;

    /**
     * The reward's name
     * @required
     * @var string $rewardName public property
     */
    public $rewardName;

    /**
     * The sender's information
     * @required
     * @var string $sender public property
     */
    public $sender;

    /**
     * The recipient's information
     * @required
     * @var \RaasLib\Models\NameEmailModel $recipient public property
     */
    public $recipient;

    /**
     * Indicates if an an email was sent to the recipient
     * @required
     * @var bool $sendEmail public property
     */
    public $sendEmail;

    /**
     * The order's status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The date the order was placed
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * The order's email template id
     * @var string|null $etid public property
     */
    public $etid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $referenceOrderID   Initialization value for $this->referenceOrderID
     * @param string                  $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string                  $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string                  $accountNumber      Initialization value for $this->accountNumber
     * @param CurrencyBreakdownModel  $amountCharged      Initialization value for $this->amountCharged
     * @param CurrencyBreakdownModel  $marginShare        Initialization value for $this->marginShare
     * @param string                  $utid               Initialization value for $this->utid
     * @param string                  $rewardName         Initialization value for $this->rewardName
     * @param string                  $sender             Initialization value for $this->sender
     * @param NameEmailModel          $recipient          Initialization value for $this->recipient
     * @param bool                    $sendEmail          Initialization value for $this->sendEmail
     * @param string                  $status             Initialization value for $this->status
     * @param \DateTime               $createdAt          Initialization value for $this->createdAt
     * @param string                  $etid               Initialization value for $this->etid
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->referenceOrderID   = func_get_arg(0);
            $this->customerIdentifier = func_get_arg(1);
            $this->accountIdentifier  = func_get_arg(2);
            $this->accountNumber      = func_get_arg(3);
            $this->amountCharged      = func_get_arg(4);
            $this->marginShare        = func_get_arg(5);
            $this->utid               = func_get_arg(6);
            $this->rewardName         = func_get_arg(7);
            $this->sender             = func_get_arg(8);
            $this->recipient          = func_get_arg(9);
            $this->sendEmail          = func_get_arg(10);
            $this->status             = func_get_arg(11);
            $this->createdAt          = func_get_arg(12);
            $this->etid               = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['referenceOrderID']   = $this->referenceOrderID;
        $json['customerIdentifier'] = $this->customerIdentifier;
        $json['accountIdentifier']  = $this->accountIdentifier;
        $json['accountNumber']      = $this->accountNumber;
        $json['amountCharged']      = $this->amountCharged;
        $json['marginShare']        = $this->marginShare;
        $json['utid']               = $this->utid;
        $json['rewardName']         = $this->rewardName;
        $json['sender']             = $this->sender;
        $json['recipient']          = $this->recipient;
        $json['sendEmail']          = $this->sendEmail;
        $json['status']             = $this->status;
        $json['createdAt']          = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['etid']               = $this->etid;

        return $json;
    }
}
