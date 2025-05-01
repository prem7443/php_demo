<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($name && $email) {
        $collection->insertOne([
            'name' => $name,
            'email' => $email,
            'created_at' => new MongoDB\BSON\UTCDateTime()
        ]);
    }

    header("Location: index.php");
    exit();
}
?>
