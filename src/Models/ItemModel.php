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
 *Represents an item
 */
class ItemModel implements JsonSerializable
{
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
     * The currency code
     * @required
     * @var string $currencyCode public property
     */
    public $currencyCode;

    /**
     * The item's status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The item's value type (VARIABLE_VALUE or FIXED_VALUE)
     * @required
     * @var string $valueType public property
     */
    public $valueType;

    /**
     * The reward type
     * @required
     * @var string $rewardType public property
     */
    public $rewardType;

    /**
     * The date the item was created
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdDate public property
     */
    public $createdDate;

    /**
     * The date the item was last updated
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $lastUpdateDate public property
     */
    public $lastUpdateDate;

    /**
     * The countries this item is valid in
     * @required
     * @var array $countries public property
     */
    public $countries;

    /**
     * The minimum orderable value (for variable value items)
     * @var double|null $minValue public property
     */
    public $minValue;

    /**
     * The maximum orderable value (for variable value items)
     * @var double|null $maxValue public property
     */
    public $maxValue;

    /**
     * The face value of the gift card
     * @var double|null $faceValue public property
     */
    public $faceValue;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $utid           Initialization value for $this->utid
     * @param string    $rewardName     Initialization value for $this->rewardName
     * @param string    $currencyCode   Initialization value for $this->currencyCode
     * @param string    $status         Initialization value for $this->status
     * @param string    $valueType      Initialization value for $this->valueType
     * @param string    $rewardType     Initialization value for $this->rewardType
     * @param \DateTime $createdDate    Initialization value for $this->createdDate
     * @param \DateTime $lastUpdateDate Initialization value for $this->lastUpdateDate
     * @param array     $countries      Initialization value for $this->countries
     * @param double    $minValue       Initialization value for $this->minValue
     * @param double    $maxValue       Initialization value for $this->maxValue
     * @param double    $faceValue      Initialization value for $this->faceValue
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->utid           = func_get_arg(0);
            $this->rewardName     = func_get_arg(1);
            $this->currencyCode   = func_get_arg(2);
            $this->status         = func_get_arg(3);
            $this->valueType      = func_get_arg(4);
            $this->rewardType     = func_get_arg(5);
            $this->createdDate    = func_get_arg(6);
            $this->lastUpdateDate = func_get_arg(7);
            $this->countries      = func_get_arg(8);
            $this->minValue       = func_get_arg(9);
            $this->maxValue       = func_get_arg(10);
            $this->faceValue      = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['utid']           = $this->utid;
        $json['rewardName']     = $this->rewardName;
        $json['currencyCode']   = $this->currencyCode;
        $json['status']         = $this->status;
        $json['valueType']      = $this->valueType;
        $json['rewardType']     = $this->rewardType;
        $json['createdDate']    = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['lastUpdateDate'] = DateTimeHelper::toRfc3339DateTime($this->lastUpdateDate);
        $json['countries']      = $this->countries;
        $json['minValue']       = $this->minValue;
        $json['maxValue']       = $this->maxValue;
        $json['faceValue']      = $this->faceValue;

        return $json;
    }
}
