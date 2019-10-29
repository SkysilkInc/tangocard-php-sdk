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
 *Represents the response from the unregister credit card call
 */
class UnregisterCreditCardResponseModel implements JsonSerializable
{
    /**
     * The date the card was removed
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdDate public property
     */
    public $createdDate;

    /**
     * A message describing the status of the card
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * The credit card token
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $createdDate Initialization value for $this->createdDate
     * @param string    $message     Initialization value for $this->message
     * @param string    $token       Initialization value for $this->token
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->createdDate = func_get_arg(0);
            $this->message     = func_get_arg(1);
            $this->token       = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['createdDate'] = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['message']     = $this->message;
        $json['token']       = $this->token;

        return $json;
    }
}
