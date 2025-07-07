<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
require_once UTILS_PATH . '/envSetter.util.php';

$host = $databases['pgHost'];
$port = $databases['pgPort'];
$username = $databases['pgUser'];
$password = $databases['pgPassword'];
$dbname = $databases['pgDB'];

$dsn = "pgsql:host={$databases['pgHost']};
        port={$port};
        dbname={$dbname}";
$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

echo "Applying schema from database/users.model.sql…\n";

$sql = file_get_contents('database/users.model.sql');

if ($sql === false) {
    throw new RuntimeException("Could not read database/users.model.sql");
} else {
    echo "Creation success from database/users.model.sql\n";
}

$pdo->exec($sql);

echo "Truncating tables...\n";
foreach (['users'] as $table) {
    $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");
    echo "Truncated table: {$table}\n";
}

foreach (['projects'] as $table) {
    $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");
    echo "Truncated table: {$table}\n";
}

foreach (['project_users'] as $table) {
    $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");
    echo "Truncated table: {$table}\n";
}

foreach (['tasks'] as $table) {
    $pdo->exec("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");
    echo "Truncated table: {$table}\n";
}

$users = require_once DUMMIES_PATH . '/users.staticData.php';

echo "Seeding users...\n";
$stmt = $pdo->prepare("INSERT INTO users (username, role, first_name, last_name, password) VALUES (:username, :role, :fn, :ln, :ps)");

foreach ($users as $user) {
    $stmt->execute([
        ':username' => $user['username'],
        ':role' => $user['role'],
        ':fn' => $user['first_name'],
        ':ln' => $user['last_name'],
        ':ps' => password_hash($user['password'], PASSWORD_DEFAULT),
    ]);
    echo "Seeded user: {$user['username']}\n";
}