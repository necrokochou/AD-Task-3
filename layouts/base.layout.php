<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Task Manager' ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header>
        <h1>Task Manager</h1>
        <?php if (isLoggedIn()): ?>
            <p>Welcome, <?= getCurrentUser()['first_name'] ?> | <a href="/handlers/logout.handler.php">Logout</a></p>
        <?php endif; ?>
    </header>
    <main>
        <?= $content ?? '' ?>
    </main>
</body>
</html>
