<?php

namespace App\PaymentService;

class PayAPI
{
    public function __construct($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

    function pay()
    {
        return "Your payment completed successfully. \r\n Transaction ID = " . $this->transaction_id;
    }
}
