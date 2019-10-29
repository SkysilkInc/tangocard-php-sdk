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
 *Represents a Credit Card
 */
class CreditCardModel implements JsonSerializable
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
     * @var string $token public property
     */
    public $token;

    /**
     * The label/nickname for the credit card
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * The last four digits of the credit card number
     * @required
     * @var string $lastFourDigits public property
     */
    public $lastFourDigits;

    /**
     * The credit card's expiration date
     * @required
     * @var string $expirationDate public property
     */
    public $expirationDate;

    /**
     * The status of the credit card
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * The date the card was added
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdDate public property
     */
    public $createdDate;

    /**
     * The date the card will be available for use
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $activationDate public property
     */
    public $activationDate;

    /**
     * An optional array of FullNameEmail objects
     * @var \RaasLib\Models\FullNameEmailModel[]|null $contactInformation public property
     */
    public $contactInformation;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $customerIdentifier Initialization value for $this->customerIdentifier
     * @param string    $accountIdentifier  Initialization value for $this->accountIdentifier
     * @param string    $token              Initialization value for $this->token
     * @param string    $label              Initialization value for $this->label
     * @param string    $lastFourDigits     Initialization value for $this->lastFourDigits
     * @param string    $expirationDate     Initialization value for $this->expirationDate
     * @param string    $status             Initialization value for $this->status
     * @param \DateTime $createdDate        Initialization value for $this->createdDate
     * @param \DateTime $activationDate     Initialization value for $this->activationDate
     * @param array     $contactInformation Initialization value for $this->contactInformation
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->customerIdentifier = func_get_arg(0);
            $this->accountIdentifier  = func_get_arg(1);
            $this->token              = func_get_arg(2);
            $this->label              = func_get_arg(3);
            $this->lastFourDigits     = func_get_arg(4);
            $this->expirationDate     = func_get_arg(5);
            $this->status             = func_get_arg(6);
            $this->createdDate        = func_get_arg(7);
            $this->activationDate     = func_get_arg(8);
            $this->contactInformation = func_get_arg(9);
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
        $json['token']              = $this->token;
        $json['label']              = $this->label;
        $json['lastFourDigits']     = $this->lastFourDigits;
        $json['expirationDate']     = $this->expirationDate;
        $json['status']             = $this->status;
        $json['createdDate']        = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['activationDate']     = DateTimeHelper::toRfc3339DateTime($this->activationDate);
        $json['contactInformation'] = $this->contactInformation;

        return $json;
    }
}
