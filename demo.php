<?php

use Mayunfeng\PhoneLocation\PhoneLocation;

include './src/PhoneLocation.php';

$pl = new PhoneLocation();
$info = $pl->find(18137888888);
print_r($info);
