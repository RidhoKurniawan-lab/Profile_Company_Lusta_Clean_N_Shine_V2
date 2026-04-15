<?php

class Auth {

    public static function check(): bool {
        return isset($_SESSION['auth']);
    }

    // UNTUK WEB (HTML PAGE)
    public static function requireWebLogin() {
        if (!self::check()) {
            header('Location: /login');
            exit;
        }
    }

    // UNTUK API (JSON)
    public static function requireApiLogin() {
        if (!self::check()) {
            http_response_code(401);
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'Unauthorized'
            ]);
            exit;
        }
    }

    public static function user(): array {
        return $_SESSION['auth'] ?? null;
    }
}