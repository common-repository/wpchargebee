<?php

class ChargeBee_CustomerPaymentMethod extends ChargeBee_Model
{
    protected $allowed = array('type', 'gateway', 'gateway_account_id', 'status', 'reference_id');

}

?>