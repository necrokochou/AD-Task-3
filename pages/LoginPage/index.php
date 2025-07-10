<?php
require_once BASE_PATH . '/bootstrap.php';
session_start();

$error = $_GET['error'] ?? '';

require_once LAYOUTS_PATH . '/header.layout.php';
?>

<h2>Login</h2>

<?php if ($error): ?>
    <p style="color: red;">❌ <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" action="/handlers/auth.handler.php">
    <input type="hidden" name="action" value="login" />
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required />
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
    </div>

    <button type="submit">Login</button>
</form>

<br>
<a href="/index.php"><button>Back to Home</button></a>

<?php require_once LAYOUTS_PATH . '/footer.layout.php';
