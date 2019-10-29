<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents a full name and an email address
 */
class FullNameEmailModel implements JsonSerializable
{
    /**
     * The full name
     * @required
     * @var string $fullName public property
     */
    public $fullName;

    /**
     * The email address
     * @required
     * @var string $emailAddress public property
     */
    public $emailAddress;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $fullName     Initialization value for $this->fullName
     * @param string $emailAddress Initialization value for $this->emailAddress
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->fullName     = func_get_arg(0);
            $this->emailAddress = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['fullName']     = $this->fullName;
        $json['emailAddress'] = $this->emailAddress;

        return $json;
    }
}
