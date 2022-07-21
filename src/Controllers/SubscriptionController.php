<?php

namespace App\Controllers;

#use ChargeBee\ChargeBee\Environment;
#use ChargeBee\ChargeBee\Models\Subscription;
use ChargeBee_Environment;
use ChargeBee_Subscription;


class SubscriptionController
{
    protected $coupon = 'MYUSERS09087';

    public function __construct() {
        ChargeBee_Environment::configure(env('CHARGEBEE_SITE'), env('CHARGEBEE_KEY'));
    }

    public function createSubscription($firstName = 'MyTester') {
        $lastName = 'LocalCb';

        $data = [
            'planId' => env('PLAN_ID'),
            'customer' => [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => 'foo.bar@example.com',
                'phone' => '5014445555',
                'autoCollection' => 'off',
            ],
            //'coupon' => [$this->coupon],
            'couponIds' => [$this->coupon],
        ];

        echo "Calling Chargebee" . PHP_EOL;
        $result = ChargeBee_Subscription::create($data);
        echo "Chargebee replied with: " . PHP_EOL;
        $customer = $result->customer();
        echo "  Customer ID: " . $customer->id . PHP_EOL;
    }
}

