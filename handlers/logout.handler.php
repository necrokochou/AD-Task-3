<?php
require_once BASE_PATH . '/bootstrap.php';
session_start();
session_destroy();
header('Location: /index.php');
exit;
?>

<!-- <?php
session_start();

// Clear session data
$_SESSION = [];

// Remove session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
header('Location: /pages/LoginPage/index.php');
exit;
?> -->
