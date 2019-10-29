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
 *Represents the response from a get deposit call
 */
class GetDepositResponseModel implements JsonSerializable
{
    /**
     * The deposit amount
     * @required
     * @var double $amount public property
     */
    public $amount;

    /**
     * The amount charged
     * @required
     * @var double $amountCharged public property
     */
    public $amountCharged;

    /**
     * The date the deposit was made
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdDate public property
     */
    public $createdDate;

    /**
     * The fee percentage
     * @required
     * @var double $feePercent public property
     */
    public $feePercent;

    /**
     * The deposit reference id
     * @required
     * @var string $referenceDepositID public property
     */
    public $referenceDepositID;

    /**
     * The deposit's status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param double    $amount             Initialization value for $this->amount
     * @param double    $amountCharged      Initialization value for $this->amountCharged
     * @param \DateTime $createdDate        Initialization value for $this->createdDate
     * @param double    $feePercent         Initialization value for $this->feePercent
     * @param string    $referenceDepositID Initialization value for $this->referenceDepositID
     * @param string    $status             Initialization value for $this->status
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->amount             = func_get_arg(0);
            $this->amountCharged      = func_get_arg(1);
            $this->createdDate        = func_get_arg(2);
            $this->feePercent         = func_get_arg(3);
            $this->referenceDepositID = func_get_arg(4);
            $this->status             = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']             = $this->amount;
        $json['amountCharged']      = $this->amountCharged;
        $json['createdDate']        = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['feePercent']         = $this->feePercent;
        $json['referenceDepositID'] = $this->referenceDepositID;
        $json['status']             = $this->status;

        return $json;
    }
}
