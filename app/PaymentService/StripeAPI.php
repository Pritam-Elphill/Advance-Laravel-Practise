<?php

namespace App\PaymentService;



class StripeAPI implements PaymentInterface
{


    function checkout(): string
    {
        return "StripeAPI called successfully";
    }
}
