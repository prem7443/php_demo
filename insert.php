<?php
require 'db.php';  // Include MongoDB connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the name and email from the form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($name && $email) {
        // Insert the new user into the MongoDB collection
        $collection->insertOne([
            'name' => $name,
            'email' => $email,
            'created_at' => new MongoDB\BSON\UTCDateTime()  // Add timestamp
        ]);
    }

    // Redirect back to the index page after submission
    header('Location: index.php');
    exit;
}
?>
