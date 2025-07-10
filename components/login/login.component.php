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
