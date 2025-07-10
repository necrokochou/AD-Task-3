<?php
namespace App\Utils;

use PDO;

class Auth {
    private PDO $pdo;

    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function login(string $user, string $pass): bool {
        $stmt = $this->pdo->prepare("SELECT password FROM users WHERE username = :u");
        $stmt->execute([':u' => $user]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        return $r && password_verify($pass, $r['password']);
    }
}
