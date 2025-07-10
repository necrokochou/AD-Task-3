<?php
require_once BASE_PATH . '/bootstrap.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /errors/unauthorized.error.php");
    exit;
}

require_once LAYOUTS_PATH . '/header.layout.php';
?>

<h2>Welcome, <?= htmlspecialchars($_SESSION['user']) ?> 👋</h2>
<p>You are now logged in to the dashboard.</p>

<form method="POST" action="/handlers/logout.handler.php">
    <button type="submit">Logout</button>
</form>

<?php require_once LAYOUTS_PATH . '/footer.layout.php'; ?>
