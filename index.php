<?php

require 'app/bootstrap.php';

use Resources\Capture\Capture;

$capture = new Capture();
$capture->load('invoice.php', [
    'order' => 123455,
    'name' => 'John Doe',
    'amount' => 123.45
]);

$capture->respond('invoice.pdf');

