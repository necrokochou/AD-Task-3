<?php
declare(strict_types=1);

function isLoggedIn(): bool {
    return isset($_SESSION['user']);
}

function requireLogin(): void {
    if (!isLoggedIn()) {
        header('Location: /components/authentication/login.component.php');
        exit;
    }
}

function getCurrentUser(): ?array {
    return $_SESSION['user'] ?? null;
}
