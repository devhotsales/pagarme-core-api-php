<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Split
 */
class CancelSplitRequest implements JsonSerializable
{
    /**
     * Split type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Recipient id
     * @required
     * @maps recipient_id
     * @var string $recipientId public property
     */
    public $recipientId;

    /**
     * The split options request
     * @var \PagarmeCoreApiLib\Models\CreateSplitOptionsRequest|null $options public property
     */
    public $options;

    /**
     * Rule id
     * @maps Split_Rule_ID
     * @var string|null $splitRuleID public property
     */
    public $splitRuleID;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                    $type        Initialization value for $this->type
     * @param integer                   $amount      Initialization value for $this->amount
     * @param string                    $recipientId Initialization value for $this->recipientId
     * @param CreateSplitOptionsRequest $options     Initialization value for $this->options
     * @param string                    $splitRuleID Initialization value for $this->splitRuleID
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->type        = func_get_arg(0);
            $this->amount      = func_get_arg(1);
            $this->recipientId = func_get_arg(2);
            $this->options     = func_get_arg(3);
            $this->splitRuleID = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']          = $this->type;
        $json['amount']        = $this->amount;
        $json['recipient_id']  = $this->recipientId;
        $json['options']       = $this->options;
        $json['Split_Rule_ID'] = $this->splitRuleID;

        return $json;
    }
}