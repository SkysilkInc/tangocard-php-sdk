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
 *Represents the response from a get order call
 */
class OrderModel implements JsonSerializable
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
     * The order's amount information
     * @required
     * @var \RaasLib\Models\CurrencyBreakdownModel $amountCharged public property
     */
    public $amountCharged;

    /**
     * Information about the gift card amount
     * @required
     * @var \RaasLib\Models\CurrencyBreakdownModel $denomination public property
     */
    public $denomination;

    /**
     * The UTID
     * @required
     * @var string $utid public property
     */
    public $utid;

    /**
     * The reward name
     * @required
     * @var string $rewardName public property
     */
    public $rewardName;

    /**
     * Indicates if an email was sent to the recipient
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
     * When the order was placed
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Contains the reward credentials
     * @required
     * @var \RaasLib\Models\RewardModel $reward public property
     */
    public $reward;

    /**
     * The sender data
     * @var \RaasLib\Models\NameEmailModel|null $sender public property
     */
    public $sender;

    /**
     * The recipient data
     * @var \RaasLib\Models\NameEmailModel|null $recipient public property
     */
    public $recipient;

    /**
     * The email template id
     * @var string|null $etid public property
     */
    public $etid;

    /**
     * An optional campaign identifier
     * @var string|null $campaign public property
     */
    public $campaign;

    /**
     * The subject of the email
     * @var string|null $emailSubject public property
     */
    public $emailSubject;

    /**
     * An external reference id
     * @var string|null $externalRefID public property
     */
    public $externalRefID;

    /**
     * A message included with the email
     * @var string|null $message public property
     */
    public $message;

    /**
     * Optional customer notes
     * @var string|null $notes public property
     */
    public $notes;

    /**
     * Margin share information
     * @var \RaasLib\Models\CurrencyBreakdownModel|null $marginShare public property
     */
    public $marginShare;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $referenceOrderID   Initialization value for $this->referenceOrderID
     * @param string                  $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string                  $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string                  $accountNumber      Initialization value for $this->accountNumber
     * @param CurrencyBreakdownModel  $amountCharged      Initialization value for $this->amountCharged
     * @param CurrencyBreakdownModel  $denomination       Initialization value for $this->denomination
     * @param string                  $utid               Initialization value for $this->utid
     * @param string                  $rewardName         Initialization value for $this->rewardName
     * @param bool                    $sendEmail          Initialization value for $this->sendEmail
     * @param string                  $status             Initialization value for $this->status
     * @param \DateTime               $createdAt          Initialization value for $this->createdAt
     * @param RewardModel             $reward             Initialization value for $this->reward
     * @param NameEmailModel          $sender             Initialization value for $this->sender
     * @param NameEmailModel          $recipient          Initialization value for $this->recipient
     * @param string                  $etid               Initialization value for $this->etid
     * @param string                  $campaign           Initialization value for $this->campaign
     * @param string                  $emailSubject       Initialization value for $this->emailSubject
     * @param string                  $externalRefID      Initialization value for $this->externalRefID
     * @param string                  $message            Initialization value for $this->message
     * @param string                  $notes              Initialization value for $this->notes
     * @param CurrencyBreakdownModel  $marginShare        Initialization value for $this->marginShare
     */
    public function __construct()
    {
        if (21 == func_num_args()) {
            $this->referenceOrderID   = func_get_arg(0);
            $this->customerIdentifier = func_get_arg(1);
            $this->accountIdentifier  = func_get_arg(2);
            $this->accountNumber      = func_get_arg(3);
            $this->amountCharged      = func_get_arg(4);
            $this->denomination       = func_get_arg(5);
            $this->utid               = func_get_arg(6);
            $this->rewardName         = func_get_arg(7);
            $this->sendEmail          = func_get_arg(8);
            $this->status             = func_get_arg(9);
            $this->createdAt          = func_get_arg(10);
            $this->reward             = func_get_arg(11);
            $this->sender             = func_get_arg(12);
            $this->recipient          = func_get_arg(13);
            $this->etid               = func_get_arg(14);
            $this->campaign           = func_get_arg(15);
            $this->emailSubject       = func_get_arg(16);
            $this->externalRefID      = func_get_arg(17);
            $this->message            = func_get_arg(18);
            $this->notes              = func_get_arg(19);
            $this->marginShare        = func_get_arg(20);
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
        $json['denomination']       = $this->denomination;
        $json['utid']               = $this->utid;
        $json['rewardName']         = $this->rewardName;
        $json['sendEmail']          = $this->sendEmail;
        $json['status']             = $this->status;
        $json['createdAt']          = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['reward']             = $this->reward;
        $json['sender']             = $this->sender;
        $json['recipient']          = $this->recipient;
        $json['etid']               = $this->etid;
        $json['campaign']           = $this->campaign;
        $json['emailSubject']       = $this->emailSubject;
        $json['externalRefID']      = $this->externalRefID;
        $json['message']            = $this->message;
        $json['notes']              = $this->notes;
        $json['marginShare']        = $this->marginShare;

        return $json;
    }
}
