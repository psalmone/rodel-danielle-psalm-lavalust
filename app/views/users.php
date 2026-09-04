<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>Users</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= html_escape($user['id']) ?></td>
                <td><?= html_escape($user['firstname']) ?></td>
                <td><?= html_escape($user['lastname']) ?></td>
                <td><?= html_escape($user['email']) ?></td>
                <td><?= html_escape($user['username']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>