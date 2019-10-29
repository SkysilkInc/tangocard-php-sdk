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
 *Represents a Brand
 */
class BrandModel implements JsonSerializable
{
    /**
     * The brand key
     * @required
     * @var string $brandKey public property
     */
    public $brandKey;

    /**
     * The brand name
     * @required
     * @var string $brandName public property
     */
    public $brandName;

    /**
     * The brand's disclaimer
     * @required
     * @var string $disclaimer public property
     */
    public $disclaimer;

    /**
     * The brand's description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * The brand's short description
     * @required
     * @var string $shortDescription public property
     */
    public $shortDescription;

    /**
     * The brand's terms
     * @required
     * @var string $terms public property
     */
    public $terms;

    /**
     * The date the brand was created
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdDate public property
     */
    public $createdDate;

    /**
     * The date the brand was last updated
     * @required
     * @factory \RaasLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $lastUpdateDate public property
     */
    public $lastUpdateDate;

    /**
     * A map of Image URLs
     * @required
     * @var array $imageUrls public property
     */
    public $imageUrls;

    /**
     * The brand's status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * An array of Item objects
     * @required
     * @var \RaasLib\Models\ItemModel[] $items public property
     */
    public $items;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $brandKey         Initialization value for $this->brandKey
     * @param string    $brandName        Initialization value for $this->brandName
     * @param string    $disclaimer       Initialization value for $this->disclaimer
     * @param string    $description      Initialization value for $this->description
     * @param string    $shortDescription Initialization value for $this->shortDescription
     * @param string    $terms            Initialization value for $this->terms
     * @param \DateTime $createdDate      Initialization value for $this->createdDate
     * @param \DateTime $lastUpdateDate   Initialization value for $this->lastUpdateDate
     * @param array     $imageUrls        Initialization value for $this->imageUrls
     * @param string    $status           Initialization value for $this->status
     * @param array     $items            Initialization value for $this->items
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->brandKey         = func_get_arg(0);
            $this->brandName        = func_get_arg(1);
            $this->disclaimer       = func_get_arg(2);
            $this->description      = func_get_arg(3);
            $this->shortDescription = func_get_arg(4);
            $this->terms            = func_get_arg(5);
            $this->createdDate      = func_get_arg(6);
            $this->lastUpdateDate   = func_get_arg(7);
            $this->imageUrls        = func_get_arg(8);
            $this->status           = func_get_arg(9);
            $this->items            = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['brandKey']         = $this->brandKey;
        $json['brandName']        = $this->brandName;
        $json['disclaimer']       = $this->disclaimer;
        $json['description']      = $this->description;
        $json['shortDescription'] = $this->shortDescription;
        $json['terms']            = $this->terms;
        $json['createdDate']      = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        $json['lastUpdateDate']   = DateTimeHelper::toRfc3339DateTime($this->lastUpdateDate);
        $json['imageUrls']        = $this->imageUrls;
        $json['status']           = $this->status;
        $json['items']            = $this->items;

        return $json;
    }
}
