<?php

class ChargeBee_InvoiceLineItemDiscount extends ChargeBee_Model
{
    protected $allowed = array('line_item_id', 'discount_type', 'coupon_id', 'discount_amount');

}

?>