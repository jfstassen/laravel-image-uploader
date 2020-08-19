<?php

namespace App\Orders;

use Illuminate\Support\Str;
use App\Billing\PaymentGateway;

class OrderDetails
{
  private $paymentGateway;

  public function __construct(PaymentGateway $paymentGateway)
  {
    $this->paymentGateway = $paymentGateway;
  }
  public function all()
  {
    $this->paymentGateway->setDiscount(500);

    return [
      "name"=> "Victor",
      "address"=> "123 Coder Street",
    ];
  }
}