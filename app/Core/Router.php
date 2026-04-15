<?php

class Router
{

    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get(string $uri, $action)
    {
        $this->routes['GET'][$this->normalize($uri)] = $action;
    }

    public function post(string $uri, $action)
    {
        $this->routes['POST'][$this->normalize($uri)] = $action;
    }

    public function run() {
        
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = $this->normalize($uri);

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo '404 Not Found';
            return;
        }

        [$controller, $methodAction] = $this->routes[$method][$uri];

        require_once BASE_PATH . '/app/Core/Controller.php';
        require_once BASE_PATH . '/app/Controllers/' . $controller . '.php';

        $controllerName = basename($controller);
        $instance = new $controllerName();

        call_user_func([$instance, $methodAction]);
    }

    protected function normalize(string $uri): string
    {
        return '/' . trim($uri, '/');
    }
}
