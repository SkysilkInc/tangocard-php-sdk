<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the pagination information returned in a paginated API call
 */
class PageModel implements JsonSerializable
{
    /**
     * The page number
     * @required
     * @var integer $number public property
     */
    public $number;

    /**
     * The number of elements per page
     * @required
     * @var integer $elementsPerBlock public property
     */
    public $elementsPerBlock;

    /**
     * The number of results returned
     * @required
     * @var integer $resultCount public property
     */
    public $resultCount;

    /**
     * The total number of results
     * @required
     * @var integer $totalCount public property
     */
    public $totalCount;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $number           Initialization value for $this->number
     * @param integer $elementsPerBlock Initialization value for $this->elementsPerBlock
     * @param integer $resultCount      Initialization value for $this->resultCount
     * @param integer $totalCount       Initialization value for $this->totalCount
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->number           = func_get_arg(0);
            $this->elementsPerBlock = func_get_arg(1);
            $this->resultCount      = func_get_arg(2);
            $this->totalCount       = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['number']           = $this->number;
        $json['elementsPerBlock'] = $this->elementsPerBlock;
        $json['resultCount']      = $this->resultCount;
        $json['totalCount']       = $this->totalCount;

        return $json;
    }
}
