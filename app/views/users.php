<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f4f6f9;
            color: #334155;
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 950px;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            overflow: hidden;
        }

        .card-header {
            padding: 24px 28px;
            border-bottom: 1px solid #edf2f7;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-header h2 {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            letter-spacing: -0.02em;
        }

        .badge-count {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 13px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 9999px;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        thead tr {
            background-color: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            padding: 14px 24px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
        }

        td {
            padding: 16px 24px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr {
            transition: background-color 0.15s ease-in-out;
        }

        tbody tr:hover {
            background-color: #f8fafc;
        }

        .user-id {
            font-weight: 600;
            color: #64748b;
        }

        .user-name {
            font-weight: 600;
            color: #0f172a;
        }

        .user-email {
            color: #475569;
        }

        .user-tag {
            display: inline-block;
            background: #f1f5f9;
            color: #475569;
            padding: 2px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        }

        @media (max-width: 640px) {
            body {
                padding: 16px 12px;
            }
            .card-header {
                padding: 18px 20px;
            }
            th, td {
                padding: 12px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Users</h2>
                <span class="badge-count"><?= count($users); ?> <?= count($users) === 1 ? 'user' : 'users'; ?></span>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 70px;">ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)): ?>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="user-id">#<?= html_escape($user['id']) ?></td>
                                <td class="user-name"><?= html_escape($user['firstname']) ?></td>
                                <td><?= html_escape($user['lastname']) ?></td>
                                <td class="user-email"><?= html_escape($user['email']) ?></td>
                                <td><span class="user-tag">@<?= html_escape($user['username']) ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" style="text-align: center; color: #94a3b8; padding: 32px;">No users found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>