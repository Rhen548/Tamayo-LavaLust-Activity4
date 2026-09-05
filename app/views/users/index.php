<?php /** @var array $users */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #1f2937;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #d1d5db;
            text-align: left;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>User Management</h1>

    <table>
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
                    <td><?= htmlspecialchars($user['id']); ?></td>
                    <td><?= htmlspecialchars($user['firstname']); ?></td>
                    <td><?= htmlspecialchars($user['lastname']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td><?= htmlspecialchars($user['username']); ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</div>

</body>
</html>