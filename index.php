<?php
require_once UTILS_PATH . '/auth.util.php';
requireLogin();

ob_start();
?>
<h2>Dashboard</h2>
<p>You are logged in as <?= getCurrentUser()['username'] ?>.</p>
<?php
$content = ob_get_clean();
$title = "Dashboard";
require_once LAYOUTS_PATH . '/base.layout.php';
?>