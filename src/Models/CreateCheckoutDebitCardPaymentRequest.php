<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;

/**
 *Checkout credit card payment request
 */
class CreateCheckoutDebitCardPaymentRequest implements JsonSerializable
{
    /**
     * Card invoice text descriptor
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * The payment authentication request
     * @required
     * @var \PagarmeCoreApiLib\Models\CreatePaymentAuthenticationRequest $authentication public property
     */
    public $authentication;

    /**
     * Define the type of one-off transaction initiated?
     * @var String|null $initiated_type public property
     */
    public $initiated_type;

    /**
     * Identifies the recurrence model
     * @var String $recurrence_model public property
     */
    public $recurrence_model;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                             $statementDescriptor Initialization value for $this-
     *                                                                  >statementDescriptor
     * @param CreatePaymentAuthenticationRequest $authentication      Initialization value for $this->authentication
     * @param String                             $initiated_type      Initialization value for $this->initiated_type
     * @param String                             $recurrence_model      Initialization value for $this->recurrence_model
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->authentication      = func_get_arg(1);
            $this->initiated_type      = func_get_arg(2);
            $this->recurrence_model    = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['authentication']       = $this->authentication;
        if($this->initiated_type) {
            $json['initiated_type'] = $this->initiated_type;
        }
        $json['recurrence_model']     = $this->recurrence_model;
        return $json;
    }
}
