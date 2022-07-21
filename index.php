<?php
require './src/bootstrap.php';

//
// Experiment with ChargeBee's api
//


use App\Controllers\SubscriptionController;

$firstName = $argv[1] ?? null;
if (empty($firstName)) {
    echo "usage: php index.php <first name>" . PHP_EOL;
    exit(1);
}

$sub = new SubscriptionController();
$sub->createSubscription($firstName);

