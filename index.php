<?php require 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MongoDB Practice</title>
</head>
<body>
    <h2>Add New User</h2>
    <form method="POST" action="insert.php">
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <button type="submit">Add User</button>
    </form>

    <hr>

    <h2>User List</h2>
    <ul>
        <?php
        $users = $collection->find([], ['sort' => ['created_at' => -1]]);
        foreach ($users as $user) {
            echo "<li>{$user['name']} ({$user['email']})</li>";
        }
        ?>
    </ul>
</body>
</html>
