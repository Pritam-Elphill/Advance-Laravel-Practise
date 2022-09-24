<?php

namespace App\PaymentService;

class PaypalAPI implements PaymentInterface
{
    // public function __construct($transaction_id)
    // {
    //     $this->transaction_id = $transaction_id;
    // }

    // function pay()
    // {
    //     return "Your payment completed successfully. \r\n Transaction ID = " . $this->transaction_id;
    // }

    function checkout(): string
    {
        return "PaypalAPI called successfully";
    }
}
