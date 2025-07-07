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
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    testing...

    <form id=createUserForm">
        <label for="username">Username</label>
        <input type="text" name="username" id="usernameInput">
        <label for="password">Password</label>
        <input type="text" name="password" id="passwordInput">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="fnInput">
        <label for="middleName">Middle Name</label>
        <input type="text" name="middleName" id="mnInput">
        <label for="lastName">lastName</label>
        <input type="text" name="lastName" id="lnInput">
        <button type="submit">Submit</button>

        <div id="response"></div>

    </form>
</body>

</html> -->