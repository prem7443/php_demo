<?php
require 'vendor/autoload.php'; // MongoDB library via Composer

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->practiceDB->users;
?>
